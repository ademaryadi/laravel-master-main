@extends('layout.template-home')

@section('container')
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="card w-lg-500px">
        <div class="card-header text-center" >
            <div>
                <img alt="KOMINFO" src="{{ url('img/banner/header-email.png') }}" class="h-100px w-400px"/>
            </div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="text-muted"><b>Verifikasi</b> Sukses. Silahkan Silahkan Login menggunakan akun yang telah anda daftarkan <a href="home"> disini</a>.</div>
            </div>
        </div>
    </div>
</div>
@endsection