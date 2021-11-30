
<?php $__env->startSection('content'); ?>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Detail Permohonan Telekomunikasi</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="form-group row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-form-label">No Penyelenggaraan</label>
                                        <label class="col-lg-6 col-form-label font-weight-bold">: <?php echo e($apprequestno -> nomor_izin); ?></label>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-form-label">No SK Izin</label>
                                        <label class="col-lg-6 col-form-label font-weight-bold">: <?php echo e($apprequestno -> doc_no); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-form-label">Tanggal</label>
                                        <label class="col-lg-6 col-form-label font-weight-bold">: <?php echo e($apprequestno -> tanggal_kib); ?></label>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-form-label">Status</label>
                                        <label class="col-lg-6 col-form-label font-weight-bold">: <?php echo e($apprequestno -> status); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Perusahaan</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        
                            <div class="col-lg-12">
                                
                                    <div>
                                        <label class="col-lg-2 col-form-label">NIB</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> nib); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label">Nama Perusahaan</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> nama); ?></label>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">No NPWP</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> npwp); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label">No. Telp \ Mobile</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> phonecompany); ?></label>
                                    </div>
                                    <div class="col-lg-18">
                                        <label class="col-lg-2 col-form-label">Alamat</label>
                                        
                                        <textarea class="col-lg-8 form-control"  readonly ><?php echo e($apprequestno -> alamat); ?></textarea>
                                        
                                    </div>
                                
                            </div>
                        
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Pemohon</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        
                            <div class="col-lg-12">
                                
                                    <div>
                                        <label class="col-lg-2 col-form-label">NIK</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> nik); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label">Nama Pemohon</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> namapemohon); ?></label>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">E-Mail</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> emailpemohon); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label">No. Telp \ Mobile</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> phonepemohon); ?></label>
                                    </div>
                                    
                                
                            </div>
                        
                    </form>
                                
                </div>
            </div>
            
                        
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Detail Penomoran</h5>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                
                                    <div>
                                        <label class="col-lg-2 col-form-label">Nomor Kode Akses</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> list_nomor); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label">Jenis Nomor</label>
                                        <label class="col-lg-8 col-form-label font-weight-bold">: <?php echo e($apprequestno -> nama_izin); ?></label>
                                    </div>

                                    <div>
                                        <label class="col-lg-2 col-form-label"></label>
                                        <label class="col-lg-8 col-form-label font-weight-bold"><a href="#">  Unduh SK Penetapan</a></label>
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Log Permohonan</h5>
                </div>

                <div class="card-body">
                    <table class="table datatable-reorder">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tanggal Perubahan</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $logperizinan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop -> iteration); ?></td>
                                    <td><?php echo e($log -> status); ?></td>
                                    <td><?php echo e($log -> nama); ?></td>
                                    <td><?php echo e($log -> jabatan); ?></td>
                                    <td><?php echo e($log -> updated_at); ?></td>
                                    <td><?php echo e($log -> note); ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- /form inputs -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ade Maryadi\Documents\GitHub\laravel-master-main\resources\views/adminpage/detailpengajuankodeakses.blade.php ENDPATH**/ ?>