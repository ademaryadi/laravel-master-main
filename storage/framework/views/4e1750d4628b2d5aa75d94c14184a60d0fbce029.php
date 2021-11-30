<?php $__env->startSection('container'); ?>
<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
    Penambahan Jenis Penomoran
</h3>
<form id="kt_project_settings_form" class="form" action="<?php echo e(url('penomoran-submit', . $selected)); ?>" method="post">
    <?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
    <div class="card">
        <div class="card-header" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light">Informasi & Status Permohonan</div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Informasi & Status Permohonan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6"><?php echo e($perizinan['jenis_izin']); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Media Transmisi</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6"><?php echo e($perizinan['media_transmisi']); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6"> Nomor Permohonan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label name="lb_nm_idperizinan" class="form-label fw-bolder text-dark fs-6"><?php echo e($perizinan['id']); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nama Perusahaan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label name="lb_nm_company" class="form-label fw-bolder text-dark fs-6"><?php echo e($perusahaan['nama']); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor NIB</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6"><?php echo e(auth()->user()->nama); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kode KBLI</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6"><?php echo e($perizinan['kbli']); ?></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Tanggal Pengajuan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6"><?php echo e($perizinan['tanggal_kib']); ?></label>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light">Penomoran</div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                
                <div class="col-xl-6 fv-row">
                    
                        <select class="form-select" data-control="select2" id="availno" name="availno" data-placeholder="-- pilih nomor --" required>
                            <option></option>
                            <?php $__currentLoopData = $availno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id_trx_penomoran); ?>"><?php echo e($data->desc); ?> - <?php echo e($data->list_nomor); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Surat Pernyataan (*)</label>
                <input class="form-control form-control-lg form-control" type="file" placeholder="" name="surat" autocomplete="off" accept="application/pdf"/>
            </div>
            <div class="fv-row mb-7">
                <div class="text-muted">Dengan ini saya menyatakan bahwa seluruh data yang disampaikan dalam SURAT PERNYATAAN adalah BENAR. Jika dikemudian hari data yang disampaikan terbukti tidak benar, maka kami siap menerima akibat hukum sesuai dengan ketentuan perundang-undangan</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-check form-check-custom form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">YA, SAYA SETUJU</span>
                </label>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Kembali</button>
            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Submit</button>
        </div>
    </div>
</form>
<?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['availno'])) {
          $selected = $_POST['availno'];
        //   echo 'You have chosen: ' . $selected;
        } else {
          echo 'Harap pilih no yang didaftarkan.';
        }
      }
    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ade Maryadi\Documents\GitHub\laravel-master-main\resources\views/penomoran/form-penomoran.blade.php ENDPATH**/ ?>