<?php $__env->startSection('container'); ?>
<div class="card">
    <div class="card-header" style="background-color: #600A88 !important;">
        <div class="card-title fs-3 fw-bolder text-light">IDENTITAS PENANGGUNG JAWAB</div>
    </div>
    <form id="kt_project_settings_form" class="form" action="<?php echo e(url('proses-penanggung-jawab')); ?>" method="post">
        <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
        <div class="card-body p-9">
            <div class="fv-row mb-7">
                <label class="form-check-label">
                    Kriteria Penanggung Jawab<em style="color: red">*</em> :
                </label>
            </div>
            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="fv-row mb-7">
                <input class="form-check-input" <?php if(old('kriteria')==$data_kriteria->id): ?> checked <?php endif; ?> type="radio" value="<?php echo e($data_kriteria->id); ?>" id="kriteria<?php echo e($data_kriteria->id); ?>" name="kriteria" required/>
                <label class="form-check-label" for="kriteria<?php echo e($data_kriteria->id); ?>">
                    <?php echo e($data_kriteria->kriteria); ?>

                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Penanggung Jawab<em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Masukan Nama Lengkap" id="name" name="name" value="<?php echo e(old('name')); ?>" autocomplete="off" required/>
                <?php $__errorArgs = ['name'];
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
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email Penanggung Jawab<em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" placeholder="Masukan Alamat Email" id="email" name="email" value="<?php echo e(old('email')); ?>" autocomplete="off" required/>
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
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor KTP Penanggung Jawab<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Masukan No. KTP Penanggung Jawab" id="nik" name="nik" value="<?php echo e(old('nik')); ?>" maxlength="16" minlength="16" autocomplete="off" required/>
                        <div class="text-muted">KTP Pemohon adalah KTP penerima kuasa untuk mengurus izin. Jika pemohon adalah Direktur Perusahaan, maka KTP pemohon adalah KTP Direktur.</div>
                        <?php $__errorArgs = ['nik'];
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
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">No Telepon / HP Penanggung Jawab<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Masukan No. Telepon Penanggung Jawab" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" maxlength="13" autocomplete="off" required/>
                        <?php $__errorArgs = ['phone'];
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
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nama Jalan<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control <?php $__errorArgs = ['street'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="" id="street" name="street" value="<?php echo e(old('street')); ?>" autocomplete="off" required/>
                        <?php $__errorArgs = ['street'];
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
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Provinsi<em style="color: red">*</em></label>
                        <select class="form-select  <?php $__errorArgs = ['provinsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" data-control="select2" id="provinsi" name="provinsi" data-placeholder="Pilih Provinsi" required>
                            <option></option>
                            <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->prov_id); ?>"><?php echo e($data->prov_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kota/Kabupaten<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kota" name="kota" data-placeholder="Pilih Kota" required>
                            <option></option>
                        </select>
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kecamatan<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kecamatan" name="kecamatan" data-placeholder="Pilih Kecamatan" required>
                            <option></option>
                        </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kelurahan/Desa<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="desa" name="desa" data-placeholder="Pilih Kelurahan/Desa" required>
                            <option></option>
                        </select>
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kode Pos<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kodepos" name="kodepos" data-placeholder="Pilih Kode Pos" required>
                            <option></option>
                        </select>
                </div>
            </div>
            <div class="fv-row mb-4">
                <div class="g-recaptcha" data-sitekey="6LfFNQkdAAAAAFXLESoqX4MXCtrQiB23mIxGq9SJ"></div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Kembali</button>
            <button  type="submit" class="btn btn-primary" id="kt_registrasi_person_submit">Submit</button>
        </div>
    </form>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    $("#kt_registrasi_person_submit").click(function(){
        if($('#radio_button').is(':checked') || $("#name").val()=="" || $("#email").val()=="" || $("#nik").val()=="" || $("#phone").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi semua data!", "warning");
        }else if(grecaptcha.getResponse()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Captcha!", "warning");
        }else{
            // event.preventDefault();
            // window.location.href = 'registrasi-jarjastel-person';
        }
    });

    $('#provinsi').on("change", function(){
        var id = $(this).val();
        // alert(id);
        $('#kota').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKota/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].city_id;
                        var name = response['data'][i].city_name;

                        var option = "<option value='"+id+"'>"+name+"</option>"; 
                        $("#kota").select2("destroy");
                        $("#kota").append(option); 
                        $("#kota").select2();
                        
                        $("#kecamatan").select2("destroy");
                        $("#desa").select2("destroy");
                        $("#kodepos").select2("destroy");
                        $("#kecamatan").select2();
                        $("#desa").select2();
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#kota').on("change", function(){
        var id = $(this).val();
        $('#kecamatan').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKecamatan/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].dis_id;
                        var name = response['data'][i].dis_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#kecamatan").select2("destroy");
                        $("#kecamatan").append(option); 
                        $("#kecamatan").select2();

                        $("#desa").select2("destroy");
                        $("#kodepos").select2("destroy");
                        $("#desa").select2();
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#kecamatan').on("change", function(){
        var id = $(this).val();
        $('#desa').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getDesa/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].subdis_id;
                        var name = response['data'][i].subdis_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#desa").select2("destroy");
                        $("#desa").append(option); 
                        $("#desa").select2();

                        $("#kodepos").select2("destroy");
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#desa').on("change", function(){
        var id = $(this).val();
        $('#kodepos').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKodepos/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].postal_id;
                        var name = response['data'][i].postal_code;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#kodepos").select2("destroy");
                        $("#kodepos").append(option); 
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ade Maryadi\Documents\GitHub\laravel-master-main\resources\views/registrasi/registrasi-jarjastel-person.blade.php ENDPATH**/ ?>