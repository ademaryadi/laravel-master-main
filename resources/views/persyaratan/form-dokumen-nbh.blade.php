<div class="card card-flush me-5 mb-10">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder" id="kt_pemenuhan_persyaratan">
                <li class="nav-item">
                    <a class="nav-link text-active-primary active" data-kt-countup-tabs="true" data-bs-toggle="tab" 
                    href="#kt_pemenuhan_persyaratan_tab_pane_persyaratan">Form Pemenuhan Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_day" href="#kt_pemenuhan_persyaratan_tab_pane_pernyataan">Form Pernyataan</a>
                </li>				
            </ul>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-7 px-20">
        <form class="form" novalidate="novalidate" id="form_persyaratan" th:id="form_persyaratan" th:method="post">
            {{ csrf_field() }}
            <input type="hidden" name="perizinan_id" value="{{ $perizinan['id'] }}">
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                
                <div class="tab-pane fade active show" id="kt_pemenuhan_persyaratan_tab_pane_persyaratan" role="tabpanel">				
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="mb-5">
                            <h2>Dokumen Pemenuhan Persyaratan</h2>
                            <span class="text-primary text-italic">Seluruh Dokumen dalam format PDF dan maksimal 5 MB</span>
                        </div>								
                        <div class="form-body">									
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Konfigurasi Sistem/Jaringan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="konfigurasi_sistem" id="konfigurasi-sistem" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Diagram dan Rute Peta Jaringan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="diagram_rute" id="diagram-rute" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="fs-6 fw-bold form-label mb-2">Dokumen PKS dengan Penyelenggara lainnya</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="pks" id="pks" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Kontak Informasi Layanan Prajual dan Purnajual</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="kontak_informasi" id="kontak-informasi" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>	                                
                        </div>  
                        <div class="mb-5">
                            <h2>Dokumen SOP (Standar Operasional Prosedur)</h2>
                            <span class="text-primary font-italic">Seluruh Dokumen dalam format PDF dan maksimal 5 MB</span>
                        </div>								
                        <div class="form-body">									
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Monitoring Jaringan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="monitoring_jaringan" id="monitoring-jaringan" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Penanganan Gangguan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="penanganan_gangguan" id="penanganan-gangguan" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Billing dan Penagihan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="billing_penagihan" id="billing-penagihan" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Aktivasi dan Deaktivasi Pelanggan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="aktivasi_deaktivasi" id="aktivasi-deaktivasi" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Pelayanan pengguna/pelanggan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="pelayanan_pengguna" id="pelayanan-pengguna" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->							
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_pemenuhan_persyaratan_tab_pane_pernyataan" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12">
                        <div class="mb-5">
                            <h2>Dokumen Pernyataan</h2>
                            <span class="text-primary text-italic">Seluruh Dokumen dalam format PDF dan maksimal 5 MB</span>
                        </div>								
                        <div class="form-body">									
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Pernyataan Kesanggupan Melaksanakan Ketentuan Penyelenggaraan</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="kesanggupan" id="kesanggupan" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Pernyataan Menyampaikan Data yang Valid dan Benar</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="data_valid" id="data-valid" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Pernyataan Tidak Memiliki Kewajiban PNBP Terhutang</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="kewajiban_pnbp" id="kewajiban-pnbp" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Konfirmasi Status Wajib Pajak</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="status_pajak" id="status-pajak" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>
                            <div class="fv-row mb-10 fv-plugins-icon-container form-group">
                                    <label class="required fs-6 fw-bold form-label mb-2">Dokumen Daftar Susunan Pengurus Tidak Termasuk Dalam Daftar Hitam</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control form-control-solid" name="daftar_hitam" id="daftar-hitam" accept="application/pdf">	                                         	                                                                               
                                    </div>
                            </div>	                                
                        </div>
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->	
        
                <!--begin::Actions-->					        							        
                <div class="d-flex align-items-end flex-column">		            		            
                    <button type="button" id="simpan-persyaratan" class="btn btn-outline btn-outline-success">
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
        $("#simpan-persyaratan").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'proses-persyaratan',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_persyaratan")),
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