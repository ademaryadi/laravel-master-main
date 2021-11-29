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
use App\Models\Users_verification_code;
use Hash;

class LoginController extends Controller
{
    public function index($bidang)
    {
        return view('login.login-'.$bidang);
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);
        $user = Users_account::where('email',$request->email)->first();
        if(!$user){
            return back()->with('loginError','Akun tidak terdaftar!');
        }else{
            if($user->is_verifikasi==0){
                return back()->with('loginError','Akun belum diverifikasi! Silahkan cek kotak masuk email anda!');
            }else{
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/registrasi-jarjastel-person');
                }
                
                return back()->with('loginError','Email dan Password tidak sesuai!');
            }
            
        }
    }
    
    public function registrasiProses(Request $request)
    {
        $request->validate([
            'nib' => 'required|unique:users_accounts|max:13|min:13',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users_accounts',
            'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
            'confirmpassword' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/'
            // 'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ], [
            'unique' => ':attribute sudah digunakan',
            'required' => 'Field :attribute tidak boleh kosong',
            'regex' => ':attribute wajib memiliki kombinasi angka & huruf',
            'min' => ':attribute minimal memiliki 8 digit',
        ]);

        $cek_nib=$this->oss_fetch_nib($request->nib,1);
        if($cek_nib["hasil"]=="success"){
            if ($request->password == $request->confirmpassword) {
                $Users  = new Users_account();
                $Users->nib = $request->nib;
                $Users->nama = $request->name;
                $Users->email = $request->email;
                $Users->password = Hash::make($request->password);
                // $Users->password = bcrypt($request->password);
                $Users->is_verifikasi = "0";
                $Users->save();
                $token = md5(strtotime('now'));
                $Users_verification_code = new Users_verification_code();
                $Users_verification_code->users_accounts_id = $Users->id;
                $Users_verification_code->token_verification = $token;
                $Users_verification_code->is_used = "0";
                $Users_verification_code->save();
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'link_verifikasi' => url('verifikasi/' . $token),
                ];            
                $this->send($data);
                // \Mail::to($request->email)->send(new \App\Mail\MailVerifikasi($data));
                return redirect('/registrasi-sukses');
            } else {
                echo "gagal";
                // return redirect('/register')->with(['alert' => 'danger', 'msg' => 'Password dan konfirmasi password tidak sama']);
            }
        }else{
            return back()->with('RegistrasiError','NIB Tidak Terdaftar di OSS!');
            // echo "NIB Tidak Terdaftar di OSS!";
        }

        
    }

    public function registrasiSukses()
    {
        return view('registrasi.registrasi-sukses');
    }

    public function verifikasi($token)
    {
        $total_token = Users_verification_code::where('token_verification', $token)
            ->where('is_used', '0')
            ->count();
        if ($total_token != 0) {
            $tokenRegistrasi = Users_verification_code::where('token_verification', $token)
                ->where('is_used', '0')
                ->first();

            $update_token = [
                'is_used' => '1'
            ];

            Users_verification_code::where('token_verification', $token)
                ->update($update_token);

            $update_akun = [
                'is_verifikasi' => '1'
            ];

            Users_account::where('id', $tokenRegistrasi->users_accounts_id)
                ->update($update_akun);
            return view('registrasi.verifikasi-sukses');
        } else {
            return redirect('/home')->with(['alert' => 'danger', 'msg' => 'link verifikasi tidak tersedia / sudah digunakan']);
        }
    }

    protected function send($request){
    	$to_name = $request['name'];
        $to_email = $request['email'];
        $link_verifikasi= $request['link_verifikasi'];
        $data = array('name'=>$to_name, "email" => $to_email, "link_verifikasi" => $link_verifikasi);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email, $link_verifikasi) {
            $message->to($to_email, $to_name)
            ->subject('Verifikasi Pendaftaran');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        // return redirect('/login-jarjastel');
        return redirect('/konfirmasi-registrasi');
        // print_r($request->all());
    }

    protected function checkCaptcha(Request $request)
    {
        $secret = "03AGdBq27Dbeuj1zaEbgS_dw4AEUsPGGLNnVYqV7BaQmQb2yg8YCkazi30Pk5CWracII4P3Ahwfc8AGApXSo77x2wMmlEtfGsEk-iwLeThBx3jdKlpgV7Wpkru7tCUGpvccxc5qwMM4fZxWCkg8s6Q7NN-h8HY2go0YHps8AiMcMWKA5G2mOG5rAdMc3VW_N6lcNH8AKXSr4xv3C3INfoMpPglKzzdcolAOlxXnjcdxPkD7U5RIaNH8XrCSXyNepDBI79H7sAA5A2UgoMSDwGn_MPl_UZFHWzYm15ngBqseVX2ZgUuk4jAOOVOcl-5QqPhpJKXqZ4iT8fcdkvkH4jmKaCiUONfpt44TGMJ3m1hAOCFEk4f3yRLlMKLK0RucuseXjpi0Yne3_rmScjJYKcfPirxnhlZiFeW2_tabCPxSrSC_25Mtm8d4ZJaintGpj9bBujCwT5oM1ah";
        $credential = array(
            'secret' => $secret,
            'response' => $request->get('g-recaptcha-response')
        );
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);

        $status = json_decode($response, true);

        return $credential;
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
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
