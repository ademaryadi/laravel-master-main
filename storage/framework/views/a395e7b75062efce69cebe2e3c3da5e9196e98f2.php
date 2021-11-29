<div class="modal fade" id="kt_modal_ulo" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
        
            <!--begin::Modal header-->
            <div class="modal-header text-center d-block" style="background-color: #600A88;">
                <!--begin::Modal title-->
                <h3 class="card-title text-white ls-2">UJI LAIK OPERASI</h3>
                <!--end::Modal title-->						
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <div class="d-flex flex-column">
                    <!--begin::Input group-->
                    <form class="form form-modal">
                        <input hidden id="perizinan-id-ulo" name="perizinan-id-ulo" type="text" value=""></input>
                        <div class="fv-row mb-3">		
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Metode ULO</label>
                                <div class="col-lg-8">
                                    <label class="text-center col-form-label">: Uji Petik</label>									     
                                </div>
                            </div>																													
                        </div>
                    
                        <div class="fv-row mb-3">		
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Periode:</label>
                                <div class="col-lg-3">
                                <input type="email" class="form-control" disabled value="99/99/9999"/>								    
                                </div>
                                <label class="col-lg-1 text-center col-form-label">s/d</label>
                                <div class="col-lg-3">
                                <input type="email" class="form-control" disabled value="99/99/9999"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="fv-row pt-10">
                            <div class="form-group">								
                                <!--begin::Label-->
                                <label class="form-label required">Pakta Integritas</label>
                                <!--end::Label-->
            
                                <!--begin::Input-->
                                <input type="file" class="form-control form-control-solid" name="pakta-integritas" 
                                    id="pakta-integritas" accept="application/pdf">
                                <!--end::Input-->
                            </div>
                        </div>
                        
                        <div class="fv-row pt-10">
                            <!--begin::Text-->
                            <div class="fw-bold fs-5 text-center text-dark-600 text-dark my-4">
                                Dengan ini saya menyatakan bahwa seluruh data yang disampaikan dalam PAKTA INTEGRITAS adalah <b>BENAR</b>. 
                                Jika dikemudian hari data yang disampaikan terbukti tidak benar, 
                                maka kami siap menerima akibat hukum sesuai dengan ketentuan perundang-undangan
                            </div>
                        </div>														           
                        <!--begin::Input row-->
                        <div class="d-flex flex-column fv-row">            
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="checkbox-agreement-pakta-integritas" type="checkbox" value="1" id="checkbox-agreement-pakta-integritas" />
                                <!--end::Input-->
                
                                <!--begin::Label-->
                                <label class="form-check-label w-25" for="checkbox-agreement-pakta-integritas">
                                    <div class="fw-bolder text-dark">YA, SAYA SETUJU</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Input row-->									
                    </form>									
                </div>
                
                <!--begin::Actions-->					        							        
                <div class="d-flex flex-stack pt-10">
                    <!--begin::Wrapper-->
                    <div class="me-2">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light btn-secondary">
                            KEMBALI
                        </button>
                    </div>
                    <!--end::Wrapper-->							
                    <!--begin::Wrapper-->
                    <div>
                        <a id="submit-ulo" type="button" class="btn btn-purple">
                            <span class="indicator-label">SUBMIT</span>																                
                        </a>											        
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
                
            </div>
            <!--end::Modal Body-->
        </div>
        <!--end::Modal Content-->
    </div>
<!--end::Modal Dialog-->
</div>

<?php if (! $__env->hasRenderedOnce('2f4cf611-02fe-440d-8db8-b591332b15d7')): $__env->markAsRenderedOnce('2f4cf611-02fe-440d-8db8-b591332b15d7'); ?>
    <?php $__env->startPush('scripts'); ?>    
    <script src="<?php echo e(asset('theme')); ?>/js/kominfo/manajemen-perizinan/form-ulo.js" type="text/javascript"></script>        
    <?php $__env->stopPush(); ?>
<?php endif; ?><?php /**PATH /var/www/html/dev/front-end/resources/views/ulo/form-ulo.blade.php ENDPATH**/ ?>