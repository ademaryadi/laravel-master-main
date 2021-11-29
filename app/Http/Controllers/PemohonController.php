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
use Hash;
use App\Models\Pemohon;

class PemohonController extends Controller
{
    public function jarjastel()
    {
        $Pemohon = Pemohon::select("*")->where('users_accounts_id',auth()->user()->id)->get();
        // echo $PenanggungJawab->first()->id;
        if(empty($Pemohon->first())){
            return view('registrasi/registrasi-jarjastel-pemohon');
        }else{
            return redirect('/dashboard');
        }
        
    }
    
    public function prosesPemohon(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'phone' => 'required|max:15',
            'nik' => 'required|max:16|min:16',
            'nik_file' => 'required|file|mimes:pdf|max:5120',
            'jabatan' => 'required|max:255',
            'kartu' => 'required|file|mimes:pdf|max:5120'        
            // 'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ], [
            'unique' => ':attribute sudah digunakan',
            'required' => 'Field :attribute tidak boleh kosong',
            'regex' => ':attribute wajib memiliki kombinasi angka & huruf',
            'min' => ':attribute minimal memiliki 8 digit',
        ]);
        $file_nik = $request->file('nik_file');
		$nama_file_nik = time()."_".$file_nik->getClientOriginalName();
		$tujuan_upload = 'documents';
		$file_nik->move($tujuan_upload,$file_nik);

        $file_kartu = $request->file('kartu');
		$nama_file_kartu = time()."_".$file_kartu->getClientOriginalName();
		$tujuan_upload = 'documents';
		$file_kartu->move($tujuan_upload,$file_kartu);

        $Pemohon  = new Pemohon();
        $Pemohon->users_accounts_id = auth()->user()->id;
        $Pemohon->nama = $request->name;
        $Pemohon->email = $request->email;
        $Pemohon->phone = $request->phone;
        $Pemohon->nik = $request->nik;
        $Pemohon->nik_file = $nama_file_nik;
        $Pemohon->jabatan = $request->jabatan;
        $Pemohon->kartu_pegawai = $nama_file_kartu;
        $Pemohon->save();
        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];  
        // dd($Pemohon);
        $this->send($data);
        return redirect('/konfirmasi-msg');
        // return redirect('/dashboard');
    }

    protected function send($request){
        date_default_timezone_set('Asia/Jakarta');
    	$to_name = $request['name'];
        $to_email = $request['email'];
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.konfirmasi', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Verifikasi Pendaftaran');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return redirect('/konfirmasi-msg');
    }

    public function registrasiSukses()
    {
        return view('registrasi.registrasi-sukses');
    }


}
