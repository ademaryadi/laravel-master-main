<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Sendemail extends BaseController
{
    public function send(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Informasi Pendaftaran');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        // return redirect('/login-jarjastel');
        return redirect('/konfirmasi-registrasi');
        // print_r($request->all());
    }

    public function send_telsusbh(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Informasi Pendaftaran');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        // return redirect('/login-telsusbh');
        return redirect('/konfirmasi-registrasi');
        // print_r($request->all());
    }

    public function send_telsusnbh(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Informasi Pendaftaran');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        // return redirect('/login-telsusnbh');
        return redirect('/konfirmasi-registrasi');
        // print_r($request->all());
    }

    public function konfirmasi_jarjastel(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.konfirmasi', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Pengajuan Pemenuhan Persyaratan');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return redirect('/konfirmasi-msg');
        // print_r($request->all());
    }

    public function konfirmasi_telsusbh(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.konfirmasi', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Pengajuan Pemenuhan Persyaratan');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return redirect('/konfirmasi-msg');
    }

    public function konfirmasi_telsusnbh(Request $request){
    	$to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$to_name, "email" => $to_email);
        Mail::send('emails.konfirmasi', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Pengajuan Pemenuhan Persyaratan');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return redirect('/konfirmasi-msg');
    }

    public function penomoran_submit(Request $request){
    	// $to_name = $request->input('name');
        // $to_email = $request->input('email');
        // $data = array('name'=>$to_name, "email" => $to_email);
        // Mail::send('emails.konfirmasi', $data, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //     ->subject('Pengajuan Pemenuhan Persyaratan');
        //     $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        // });
        return redirect('/penomoran-msg');
    }

    public function forget_password(Request $request){
        $to_email = $request->input('email');
        $data = array("email" => $to_email);
        Mail::send('emails.forget_password', $data, function($message) use ($to_email) {
            $message->to($to_email)
            ->subject('Siap Kominfo - Buat Kembali Password Anda');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return redirect('/login-jarjastel');
    }
       
    public function email_daftar_perizinan(Request $request){
        //todo, get email from database by applicant id
        $to_email = 'titus.nainggolan@gmail.com';
        $data = array("email" => $to_email);
        Mail::send('perizinan.email-perizinan', $data, function($message) use ($to_email) {
            $message->to($to_email)
            ->subject('Siap Kominfo - KONFIRMASI KODE IZIN BARU (OSS RBA)');
            $message->from('devtesting.ryan@gmail.com','Siap - Kominfo');
        });
        return "success";
    }
}
