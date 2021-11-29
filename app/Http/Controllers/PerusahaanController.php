<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Mail;
use App\Rules\GoogleRecaptcha;
use App\Models\Users_account;
use App\Models\Provinsi;
use Hash;
use App\Models\Perusahaan;
use App\Models\JenisPerusahaan;
use App\Models\JenisPenanamanModal;

class PerusahaanController extends Controller
{
    
    public function jarjastel()
    {
        $Perusahaan = Perusahaan::select("*")->where('users_accounts_id',auth()->user()->id)->get();
        // echo $PenanggungJawab->first()->id;
        if(empty($Perusahaan->first())){
            $provinsi = Provinsi::select("*")->get();
            $jenis_perusahaan = JenisPerusahaan::select("*")->get();
            $jenis_penanaman_modal = JenisPenanamanModal::select("*")->get();
            return view('registrasi/registrasi-jarjastel-perusahaan',['provinsi' => $provinsi, 'jenis_perusahaan' => $jenis_perusahaan, 'jenis_penanaman_modal' => $jenis_penanaman_modal]);
        }else{
            return redirect('/registrasi-jarjastel-pemohon');
        }
        
    }
    
    public function prosesPerusahaan(Request $request)
    {
        
        $request->validate([
            'nib' => 'required|unique:perusahaan|max:255',
            'nib_file' => 'required|file|mimes:pdf|max:5120',
            'nama_perusahaan' => 'required|max:255',
            'jenis_perusahaan' => 'required',
            // 'penanaman_modal' => 'required', 'street' => 'required|max:255',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kodepos' => 'required',
            'phone' => 'required|max:15',
            'npwp' => 'required',
            'npwp_file' => 'required|file|mimes:pdf|max:5120',
            'domisili' => 'required|file|mimes:pdf|max:5120',
            'surat_kuasa' => 'required|file|mimes:pdf|max:5120',
            'dasar_hukum' => 'required|file|mimes:pdf|max:5120',         
            'sk_kemenkumham' => 'required|file|mimes:pdf|max:5120',
            // 'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ], [
            'unique' => ':attribute sudah digunakan',
            'required' => 'Field :attribute tidak boleh kosong',
            'regex' => ':attribute wajib memiliki kombinasi angka & huruf',
            'min' => ':attribute minimal memiliki 8 digit',
        ]);
        
        $cek_nib=$this->oss_fetch_nib($request->nib,1);

        // var_dump($cek_nib["data"]->dataNIB);
        // if($cek_nib["hasil"]=="success"){
        //     if($cek_nib["data"]->dataNIB->nama_perseroan!=$request->nama_perusahaan){
        //         echo "nama salah";
        //     }
            
        //     if($cek_nib["data"]->dataNIB->alamat_perseroan!=$request->street){
        //         echo "alamat";
        //     }
            
        //     if($cek_nib["data"]->dataNIB->nomor_telpon_perseroan!=$request->phone){
        //         echo "telepon salah";
        //     }
            
        //     if($cek_nib["data"]->dataNIB->npwp_perseroan!=$request->npwp){
        //         echo "npwp salah";
        //     }

        //     if($cek_nib["data"]->dataNIB->nama_perseroan==$request->nama_perusahaan &&
                // $cek_nib["data"]->dataNIB->alamat_perseroan==$request->street &&
                // $cek_nib["data"]->dataNIB->nomor_telpon_perseroan==$request->phone &&
                // $cek_nib["data"]->dataNIB->npwp_perseroan==$request->npwp){
                
                $tujuan_upload = 'documents';

                $file_nib = $request->file('nib_file');
                $nama_file_nib = time()."_"."nib_".$file_nib->getClientOriginalName();
                $file_nib->move($tujuan_upload,$nama_file_nib);

                $file_npwp = $request->file('npwp_file');
                $nama_file_npwp = time()."_"."npwp_".$file_npwp->getClientOriginalName();
                $file_npwp->move($tujuan_upload,$nama_file_npwp);

                $file_domisili = $request->file('domisili');
                $nama_file_domisili = time()."_"."domisili_".$file_domisili->getClientOriginalName();
                $file_domisili->move($tujuan_upload,$nama_file_domisili);

                $file_surat_kuasa= $request->file('surat_kuasa');
                $nama_file_surat_kuasa = time()."_"."surat_kuasa_".$file_surat_kuasa->getClientOriginalName();
                $file_surat_kuasa->move($tujuan_upload,$nama_file_surat_kuasa);

                $file_dasar_hukum= $request->file('dasar_hukum');
                $nama_file_dasar_hukum = time()."_"."akta_terakhir_".$file_dasar_hukum->getClientOriginalName();
                $file_dasar_hukum->move($tujuan_upload,$nama_file_dasar_hukum);

                $file_sk_kemenkumham= $request->file('sk_kemenkumham');
                $nama_file_sk_kemenkumham = time()."_"."sk_kemenkumham_".$file_sk_kemenkumham->getClientOriginalName();
                $file_sk_kemenkumham->move($tujuan_upload,$nama_file_sk_kemenkumham);

                $Perusahaan  = new Perusahaan();
                $Perusahaan->users_accounts_id = auth()->user()->id;
                $Perusahaan->nib = $request->nib;
                $Perusahaan->nib_file = $nama_file_nib;
                $Perusahaan->nama = $request->nama_perusahaan;
                $Perusahaan->jenis_perusahaan = $request->jenis_perusahaan;
                // $Perusahaan->jenis_penanaman_modal = $request->penanaman_modal;
                $Perusahaan->street = $request->street;
                $Perusahaan->provinsi = $request->provinsi;
                $Perusahaan->kota = $request->kota;
                $Perusahaan->kecamatan = $request->kecamatan;
                $Perusahaan->desa = $request->desa;
                $Perusahaan->kodepos = $request->kodepos;
                $Perusahaan->phone = $request->phone;
                $Perusahaan->npwp = $request->npwp;
                $Perusahaan->npwp_file = $nama_file_npwp;
                $Perusahaan->domisili = $nama_file_domisili;
                $Perusahaan->surat_kuasa = $nama_file_surat_kuasa;
                $Perusahaan->dasar_hukum = $nama_file_dasar_hukum;
                $Perusahaan->sk_kemenkumham = $nama_file_sk_kemenkumham;
                $Perusahaan->save();
                return redirect('/registrasi-jarjastel-pemohon');
        //     }
            
        // }else{
        //    echo "NIB Tidak sesuai";
        // }


        
    }

    public function registrasiSukses()
    {
        return view('registrasi.registrasi-sukses');
    }

    public function oss_login(){
        $url=curl_init("https://oss.kominfo.go.id/api/v1/auth/login");
		curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($url, CURLOPT_HTTPHEADER, array(
			'Content-Type:  application/x-www-form-urlencoded')
		);
		curl_setopt($url, CURLOPT_POSTFIELDS,
            "username=izinjartel&password=05b596176235051215e1e5de9bb9e4eb4e899785");
		curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($url);
		curl_close($url);
        $data=json_decode($result);
        if(array_key_exists("access_token",$data)){
			return $rspn['token']=$data->access_token;
		}else{
			return $rspn['message']=$data->message;
		}
    }

	public function oss_fetch_nib($nib,$ossid){
		$token=$this->oss_login();
		header('Content-Type: application/json'); // Specify the type of data
		$ch = curl_init('https://oss.kominfo.go.id/api/v1/nib/'.$nib.'/'.$ossid); // Initialise cURL
		// $post = json_encode($post); // Encode the data array into a JSON string
		$authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
		$result = curl_exec($ch); // Execute the cURL statement
		curl_close($ch); // Close the cURL connection
		$data=json_decode($result);
        if(array_key_exists("responinqueryNIB",$data)){
			$rspn['hasil']='success';
			$rspn['data']=$data->responinqueryNIB;
		}else{
			$rspn['hasil']='error';
			$rspn['message']=$data->message;
		}

		return $rspn;
    }


}
