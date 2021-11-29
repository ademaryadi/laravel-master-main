<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OssApi extends Model
{
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

