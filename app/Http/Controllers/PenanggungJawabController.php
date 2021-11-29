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
use App\Models\KriteriaPenanggungJawab;
use App\Models\PenanggungJawab;

class PenanggungJawabController extends Controller
{
    public function jarjastel()
    {
        $PenanggungJawab = PenanggungJawab::select("*")->where('users_accounts_id',auth()->user()->id)->get();
        // echo $PenanggungJawab->first()->id;
        if(empty($PenanggungJawab->first())){
            // echo "kosong";
            $provinsi = Provinsi::select("*")->get();
            $kriteria = KriteriaPenanggungJawab::select("*")->where('status',1)->get();
            return view('registrasi/registrasi-jarjastel-person',['provinsi' => $provinsi, 'kriteria' => $kriteria]);
        }else{
            return redirect('/registrasi-jarjastel-perusahaan');
        }
        
    }

    public function telsusbh()
    {
        $provinsi = Provinsi::select("*")->get();
        $kriteria = KriteriaPenanggungJawab::select("*")->where('status',1)->get();
        return view('registrasi/registrasi-jarjastel-person',['provinsi' => $provinsi, 'kriteria' => $kriteria]);
    }
    
    public function prosesPenanggungJawab(Request $request)
    {
        $request->validate([
            'kriteria' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'nik' => 'required|max:16|min:16',
            'phone' => 'required|max:15',
            'street' => 'required|max:255',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kodepos' => 'required'
            // 'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ], [
            'unique' => ':attribute sudah digunakan',
            'required' => 'Field :attribute tidak boleh kosong',
            'regex' => ':attribute wajib memiliki kombinasi angka & huruf',
            'min' => ':attribute minimal memiliki 8 digit',
        ]);

        $PenanggungJawab  = new PenanggungJawab();
        $PenanggungJawab->kriteria_penanggung_jawab_id = $request->kriteria;
        $PenanggungJawab->users_accounts_id = auth()->user()->id;
        $PenanggungJawab->name = $request->name;
        $PenanggungJawab->email = $request->email;
        $PenanggungJawab->nik = $request->nik;
        $PenanggungJawab->phone = $request->phone;
        $PenanggungJawab->street = $request->street;
        $PenanggungJawab->provinsi = $request->provinsi;
        $PenanggungJawab->kota = $request->kota;
        $PenanggungJawab->kecamatan = $request->kecamatan;
        $PenanggungJawab->desa = $request->desa;
        $PenanggungJawab->kodepos = $request->kodepos;
        $PenanggungJawab->save();
        return redirect('/registrasi-jarjastel-perusahaan');
        // dd($PenanggungJawab);
        // $Users->password = bcrypt($request->password);
        // $Users->is_verifikasi = "0";
        // $Users->save();
        // $token = md5(strtotime('now'));
        // $Users_verification_code = new Users_verification_code();
        // $Users_verification_code->users_accounts_id = $Users->id;
        // $Users_verification_code->token_verification = $token;
        // $Users_verification_code->is_used = "0";
        // $Users_verification_code->save();
        // $data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'link_verifikasi' => url('verifikasi/' . $token),
        // ];            
        // $this->send($data);
        // \Mail::to($request->email)->send(new \App\Mail\MailVerifikasi($data));
        // return redirect('/registrasi-sukses');
    }

    public function registrasiSukses()
    {
        return view('registrasi.registrasi-sukses');
    }


}
