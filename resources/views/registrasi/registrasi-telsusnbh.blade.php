@extends('layout.template-login')

@section('container')
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="mb-5 text-center">
        <h3 class="text-dark mb-3">Selamat Datang Di Portal Perizinan Telekomunikasi<br>DIREKTORAT JENDERAL PENYELENGGARAAN POS DAN INFORMATIKA</h3>
    </div>
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">REGISTRASI TELEKOMUNIKASI KHUSUS</div>
        </div>
        <div class="card-body p-9">
            <form class="form w-100" id="kt_sign_up_form" action="registrasi-telsusnbh-submit" method="post">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Kriteria Penyelenggaraan<em style="color: red">*</em></label>
                    <select class="form-control form-control-lg form-control" placeholder="Pilih Perseorangan/Dinas Khusus/Ins.Pemerintah" name="kriteria" id="kriteria" required />
                        <option value="">--Pilih Perseorangan/Dinas Khusus/Ins.Pemerintah--</option>
                        <option value="Perseorangan">Perseorangan</option>
                        <option value="Dinas Khusus">Dinas Khusus</option>
                        <option value="Instansi Pemerintah">Instansi Pemerintah</option>
                    </select>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">NIB<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control" type="text" placeholder="Masukan Nomor NIB" id="nib" name="nib" autocomplete="off" required/>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Nama Penanggung Jawab<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control" type="text" placeholder="Masukan Nama Lengkap" id="name" name="name" autocomplete="off" required/>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Alamat Email<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control" type="email" placeholder="Masukan Alamat Email" id="email" name="email" autocomplete="off" required/>
                </div>
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6">Password<em style="color: red">*</em></label>
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control" type="password" placeholder="Masukan Password Anda" id="password" name="password" autocomplete="off" required/>
                        </div>
                </div>
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6">Konfirmasi Password<em style="color: red">*</em> &nbsp;<span id="message-match"></span></label>
                    <input class="form-control form-control-lg form-control" type="password" placeholder="Masukan Konfirmasi Password" id="confirmpassword" name="confirmpassword" autocomplete="off" required/>
                </div>
                <div class="fv-row mb-5">
                    <div class="g-recaptcha" data-sitekey="6LfFNQkdAAAAAFXLESoqX4MXCtrQiB23mIxGq9SJ"></div>
                </div>
                <div class="text-center">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-lg bg-purple w-100">
                        <span class="indicator-label">Daftar</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <div class="mb-5 text-center w-100">
                    <div class="text-gray-400 fw-bold fs-4">Sudah punya akun?
                        <a href="login-telsusnbh" class="link-primary fw-bolder">Masuk</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#password, #confirmpassword').on('keyup', function () {
    if ($('#password').val() == $('#confirmpassword').val()) {
        $('#message-match').html('Cocok!').css('color', 'green');
    } else 
        $('#message-match').html('Password tidak cocok!').css('color', 'red');
    });

    $("#kt_sign_up_submit").click(function(){
        if($("#kriteria").val()=="" && $("#nib").val()=="" && $("#name").val()=="" && $("#email").val()=="" && $("#password").val()=="" && $("#confirmpassword").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi semua data!", "warning");
        }else if($("#kriteria").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Kriteria Penyelenggaraan!", "warning");
        }else if($("#nib").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi NIB anda!", "warning");
        }else if($("#name").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Nama Penanggung Jawab!", "warning");
        }else if($("#email").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Alamat Email anda!", "warning");
        }else if($("#password").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Password anda!", "warning");
        }else if($("#confirmpassword").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon Konfirmasi Ulang Password anda!", "warning");
        }else if(grecaptcha.getResponse()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Captcha!", "warning");
        }else{
            event.preventDefault();
            window.location.href = 'registrasi-telsusnbh-person';
        }
    });

</script>
@endsection