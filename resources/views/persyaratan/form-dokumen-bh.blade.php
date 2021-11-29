<div class="card card-flush me-5 mb-10">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">		
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder" id="kt_pemenuhan_persyaratan_bh">
                <li class="nav-item">
                    <a class="nav-link text-active-primary active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_pemenuhan_persyaratan_bh_tab_pane_persyaratan">Form Pemenuhan Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_day" href="#kt_pemenuhan_persyaratan_bh_tab_pane_pernyataan">Form Pernyataan</a>
                </li>				
            </ul>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-7 px-20">
        <form class="form" novalidate="novalidate" id="form_persyaratan_bh" th:id="form_persyaratan_bh" th:method="post">
            {{ csrf_field() }}
            <input type="hidden" name="perizinan_id" value="{{ $perizinan['id'] }}">
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                <div class="tab-pane fade active show" id="kt_pemenuhan_persyaratan_bh_tab_pane_persyaratan" role="tabpanel">				
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="mb-5">
                            <h2>Dokumen Pemenuhan Persyaratan</h2>
                            <span class="text-primary text-italic">Seluruh Dokumen dalam format PDF dan maksimal 5 MB</span>
                        </div>								
                        <div class="form-body">									
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Maksud, Tujuan, dan Alasan Membangun Telekomunikasi Khusus</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="maksud_tujuan_bh" id="maksud-tujuan-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Konfigurasi Sistem/Jaringan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="diagram_rute_bh" id="diagram-rute-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>	                                                  
                        </div>
                    </div>
                    <!--end::Container-->							
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_pemenuhan_persyaratan_bh_tab_pane_pernyataan" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12">
                        <div class="mb-5">
                            <h2>Dokumen Pernyataan</h2>
                            <span class="text-primary text-italic">Seluruh Dokumen dalam format PDF dan maksimal 5 MB</span>
                        </div>								
                        <div class="form-body">									
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Pernyataan bersedia mengembalikan Izin apabila sudah tidak digunakan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="bersedia_mengembalikan_bh" id="bersedia-mengembalikan-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Daftar Susunan Pengurus Tidak Termasuk Dalam Daftar Hitam</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="daftar_hitam_bh" id="daftar-hitam-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="fs-6 fw-bold form-label mb-2">Dokumen Izin Penggunaan Spektrum Frekuensi Radio untuk keperluan layanan Penggunaan Spektrum Radio</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="spektrum_frekuensi_bh" id="spektrum-frekuensi-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="fs-6 fw-bold form-label mb-2">Dokumen Ketidaksanggupan dari Penyelenggara Jasa Telekomunikasi untuk menyediakan Layanan yang dibutuhkan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="ketidaksanggupan_bh" id="ketidaksanggupan-bh" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->
                
                <!--begin::Actions-->					        							        
                <div class="d-flex align-items-end flex-column">		            		            
                    <button type="button" id="simpan-persyaratan-bh" class="btn btn-outline btn-outline-success">
                        SIMPAN DATA
                    </button>									                		            
                </div>
                <!--end::Actions-->				
            </div>
            <!--end::Tab content-->
                                
            <!--begin::Actions-->					        							        
            <div class="d-flex flex-stack pt-10">
                <!--begin::Wrapper-->
                <div class="me-2">
                    <button type="button" id="cancel-submision" class="btn btn-light btn-purple">
                        BATAL
                    </button>
                </div>
                <!--end::Wrapper-->							
                <!--begin::Wrapper-->
                <div>
                    <button id="submit-document" type="button" class="btn btn-purple" 
                        data-kt-stepper-action="submit">
                        <span class="indicator-label">SUBMIT</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>							                	
                    </button>										               
                </div>
                <!--end::Wrapper-->
            </div>			        
            <!--end::Actions -->
        </form>				
    </div>
    <!--end::Body-->
</div>

@once
    @push('scripts')        
    <script>
        $("#simpan-persyaratan-bh").click(function() {	
            // event.preventDefault();
            $.ajax({
                url: 'proses-persyaratan-telsus',
                type: 'post',
                dataType: 'json',
                // data: $('form#form_data_alat_teknis').serialize(),
                data: new FormData(document.getElementById("form_persyaratan_bh")),
                processData: false,
                contentType: false,
                success: function(data) {
                    swal("Berhasil!", "Disimpan", "success");
                }
            });
            swal("Berhasil!", "Disimpan", "success");
        });
    </script>
    @endpush
@endonce
