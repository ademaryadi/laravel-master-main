<?php $__env->startSection('container'); ?>
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="mb-5 text-center">
        <h3 class="text-dark mb-3">Selamat Datang Di Portal Perizinan Telekomunikasi<br>DIREKTORAT JENDERAL PENYELENGGARAAN POS DAN INFORMATIKA</h3>
    </div>
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">LOGIN BIDANG TEKOMUNIKASI KHUSUS</div>
        </div>
        <div class="card-body p-9">
            
                <form class="form w-100" id="kt_sign_in_form" action="registrasi-telsusnbh-person/" method="post">
                    <div class="fv-row mb-5">
                        <label class="form-label fs-6 fw-bolder text-dark">Alamat Email</label>
                        <input class="form-control form-control-lg form-control" type="email" placeholder="Masukan Alamat Email" id="email" name="email" autocomplete="off" required/>
                    </div>
                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control" type="password" placeholder="Masukan Password Anda" id="password" name="password" autocomplete="off" required/>
                            </div>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="form-check form-check-custom form-check form-check-inline">
                            <span class="form-check-label fw-bold text-gray-700 fs-6">Lupa Password?
                            <a href="forget-password/" class="ms-1 link-primary">Klik Disini</a>.</span>
                        </label>
                    </div>
                    <div class="fv-row mb-5">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
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
                        
                        <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                        <a href="registrasi-telsusnbh" class="link-primary fw-bolder">Daftar</a></div>
                    </div>
                </form>
            
        </div>
    </div>
</div>
<script>
    $("#kt_sign_in_submit").click(function(){
        if($("#email").val()=="" && $("#password").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi alamat email dan password", "warning");
        }else if($("#email").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi alamat email anda", "warning");
        }else if($("#password").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi password anda", "warning");
        }
    });
        
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/dev/front-end/resources/views/login/login-telsusnbh.blade.php ENDPATH**/ ?>