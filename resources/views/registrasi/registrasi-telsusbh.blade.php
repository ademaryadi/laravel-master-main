@extends('layout.template-login')

@section('container')
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="mb-5 text-center">
        <h3 class="text-dark mb-3">Selamat Datang Di Portal Perizinan Telekomunikasi<br>DIREKTORAT JENDERAL PENYELENGGARAAN POS DAN INFORMATIKA</h3>
    </div>
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">REGISTRASI TEKOMUNIKASI KHUSUS BADAN HUKUM</div>
        </div>
        <div class="card-body p-9">
            <form class="form w-100" id="kt_sign_up_form" action="registrasi-proses" method="post">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">NIB<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('nib') is-invalid @enderror" type="text" placeholder="Masukan Nomor NIB" id="nib" name="nib" value="{{ old('nib') }}" autocomplete="off" required/>
                    @error('nib')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Nama Penanggung Jawab<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('name') is-invalid @enderror" type="text" placeholder="Masukan Nama Lengkap" id="name" name="name" value="{{ old('name') }}" autocomplete="off" required/>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Alamat Email<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('email') is-invalid @enderror" type="email" placeholder="Masukan Alamat Email" id="email" name="email" value="{{ old('email') }}" autocomplete="off" required/>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-7 fv-row">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6">Password<em style="color: red">*</em></label>
                        <div class="position-relative mb-3 d-flex flex-stack" id="show_hide_password">
                            <input class="form-control form-control-lg form-control form-check-inline @error('password') is-invalid @enderror" type="password" placeholder="Masukan Password Anda" id="password" name="password" autocomplete="off" required/>
                            <a href="#" class="form-check-inline"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6">Konfirmasi Password<em style="color: red">*</em> &nbsp;<span id="message-match"></span></label>
                    <div class="position-relative mb-3 d-flex flex-stack" id="show_hide_confirmpassword">
                        <input class="form-control form-control-lg form-control form-check-inline @error('confirmpassword') is-invalid @enderror" type="password" placeholder="Masukan Konfirmasi Password" id="confirmpassword" name="confirmpassword" autocomplete="off" required/>
                        <a href="#"><i class="fa fa-eye-slash form-check-inline" aria-hidden="true"></i></a>
                        @error('confirmpassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="fv-row mb-5">
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SECRET_KEY') }}"></div>
                    @error(' g-recaptcha-response')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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
                        <a href="login-jarjastel" class="link-primary fw-bolder">Masuk</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });

    $("#show_hide_confirmpassword a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_confirmpassword input').attr("type") == "text"){
            $('#show_hide_confirmpassword input').attr('type', 'password');
            $('#show_hide_confirmpassword i').addClass( "fa-eye-slash" );
            $('#show_hide_confirmpassword i').removeClass( "fa-eye" );
        }else if($('#show_hide_confirmpassword input').attr("type") == "password"){
            $('#show_hide_confirmpassword input').attr('type', 'text');
            $('#show_hide_confirmpassword i').removeClass( "fa-eye-slash" );
            $('#show_hide_confirmpassword i').addClass( "fa-eye" );
        }
    });

    $('#password, #confirmpassword').on('keyup', function () {
    if ($('#password').val() == $('#confirmpassword').val()) {
        $('#message-match').html('Cocok!').css('color', 'green');
    } else 
        $('#message-match').html('Password tidak cocok!').css('color', 'red');
    });

    $("#kt_sign_up_submit").click(function(){
        if($("#nib").val()=="" && $("#name").val()=="" && $("#email").val()=="" && $("#password").val()=="" && $("#confirmpassword").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi semua data!", "warning");
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
            // event.preventDefault();
            // window.location.href = 'registrasi-jarjastel-person';
        }
    });

</script>
@endsection