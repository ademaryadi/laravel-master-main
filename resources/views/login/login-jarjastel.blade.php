@extends('layout.template-login')

@section('container')
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="mb-5 text-center">
        <h3 class="text-dark mb-3">Selamat Datang Di Portal Perizinan Telekomunikasi<br>DIREKTORAT JENDERAL PENYELENGGARAAN POS DAN INFORMATIKA</h3>
    </div>
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">LOGIN JARINGAN/JASA TEKOMUNIKASI</div>
        </div>
        <div class="card-body p-9">
            {{-- <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto"> --}}
                <form class="form w-100"  id="kt_sign_in_form" action="{{ url('login-proses') }}" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="fv-row mb-5">
                        <label class="form-label fs-6 fw-bolder text-dark">Alamat Email</label>
                        <input class="form-control form-control-lg form-control @error('email') is-invalid @enderror" type="email" placeholder="Masukan Alamat Email" id="email" name="email" value="{{ old('email') }}" autocomplete="off" required />
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5 fv-row">
                        <div class="mb-5">
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
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
                    <div class="fv-row mb-5">
                        <label class="form-check form-check-custom form-check form-check-inline">
                            <span class="form-check-label fw-bold text-gray-700 fs-6">Lupa Password?
                            <a href="{{ url('forget-password') }}" class="ms-1 link-primary">Klik Disini</a>.</span>
                        </label>
                    </div>
                    <div class="fv-row mb-5">
                        <div class="g-recaptcha" data-sitekey="6LfFNQkdAAAAAFXLESoqX4MXCtrQiB23mIxGq9SJ"></div>
                    </div>
                    <hr>
                    <div class="text-center mb-5">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg bg-purple w-100">
                            <span class="indicator-label">Masuk</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <div class="text-center mb-5">
                        {{-- <h3 class="text-dark mb-3">LOGIN JARINGAN/JASA TEKOMUNIKASI</h3> --}}
                        <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                        <a href="{{ url('registrasi-jarjastel') }}" class="link-primary fw-bolder">Daftar</a></div>
                    </div>
                </form>
            {{-- </div> --}}
        </div>
    </div>
</div>
@push('scripts')
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
        
        function recaptchaCallback() {
            if($("#email").val()!="" && $("#password").val()!=""){
                $('#kt_sign_in_submit').removeAttr('disabled');
            }else{
                recaptchachecked = false;
            }
        };

        $("#kt_sign_in_submit").click(function(){
            // if(g-recaptcha.getResponse() == "") {
            //         e.preventDefault();
            //         alert("You can't proceed!");
            //     } else {
            //         alert("Thank you");
            //     }
            if($("#email").val()=="" && $("#password").val()==""){
                event.preventDefault();
                swal("Peringatan!", "Mohon isi alamat email dan password!", "warning");
            }else if($("#email").val()==""){
                event.preventDefault();
                swal("Peringatan!", "Mohon isi alamat email anda!", "warning");
            }else if($("#password").val()==""){
                event.preventDefault();
                swal("Peringatan!", "Mohon isi password anda!", "warning");
            }else if(grecaptcha.getResponse()==""){
                event.preventDefault();
                swal("Peringatan!", "Mohon isi captcha!", "warning");
            }else{
                // event.preventDefault();
                // window.location.href = 'registrasi-jarjastel-person';
            }
        });
            
    </script>
    @if(session()->has('loginError'))
    <script>
        swal("Gagal!", "{{ session('loginError') }}", "error");
    </script>
    @endif
@endpush

@endsection