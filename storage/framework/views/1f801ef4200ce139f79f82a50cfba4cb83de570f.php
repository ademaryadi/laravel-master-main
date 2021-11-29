<?php $__env->startSection('container'); ?>
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="mb-5 text-center">
        <h3 class="text-dark mb-3">Selamat Datang Di Portal Perizinan Telekomunikasi<br>DIREKTORAT JENDERAL PENYELENGGARAAN POS DAN INFORMATIKA</h3>
    </div>
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">LOGIN JARINGAN/JASA TEKOMUNIKASI</div>
        </div>
        <div class="card-body p-9">
            
                <form class="form w-100"  id="kt_sign_in_form" action="<?php echo e(url('login-proses')); ?>" method="post">
                    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
                    <div class="fv-row mb-5">
                        <label class="form-label fs-6 fw-bolder text-dark">Alamat Email</label>
                        <input class="form-control form-control-lg form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" placeholder="Masukan Alamat Email" id="email" name="email" value="<?php echo e(old('email')); ?>" autocomplete="off" required />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-5 fv-row">
                        <div class="mb-5">
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                            <div class="position-relative mb-3 d-flex flex-stack" id="show_hide_password">
                                <input class="form-control form-control-lg form-control form-check-inline <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="Masukan Password Anda" id="password" name="password" autocomplete="off" required/>
                                <a href="#" class="form-check-inline"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="form-check form-check-custom form-check form-check-inline">
                            <span class="form-check-label fw-bold text-gray-700 fs-6">Lupa Password?
                            <a href="<?php echo e(url('forget-password')); ?>" class="ms-1 link-primary">Klik Disini</a>.</span>
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
                        
                        <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                        <a href="<?php echo e(url('registrasi-jarjastel')); ?>" class="link-primary fw-bolder">Daftar</a></div>
                    </div>
                </form>
            
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
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
    <?php if(session()->has('loginError')): ?>
    <script>
        swal("Gagal!", "<?php echo e(session('loginError')); ?>", "error");
    </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ade Maryadi\Documents\GitHub\laravel-master-main\resources\views/login/login-jarjastel.blade.php ENDPATH**/ ?>