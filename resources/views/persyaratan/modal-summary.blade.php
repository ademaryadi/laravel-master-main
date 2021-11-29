<div class="modal fade" id="kt_modal_summary" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">							
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-5 pb-5">
                <div class="card">
                    <div class="d-flex flex-row">					   
                        <div class="d-flex flex-column flex-row-fluid">
                            <div class="d-flex flex-column-auto h-150px flex-center">	
                                <div class="d-flex flex-center">
                                    <!--begin::Image-->
                                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">		                                
                                        <img alt="KOMINFO" src="{{asset('theme')}}/media/kominfo/logo_kominfo.png" class="h-100px" />	                                    	                               
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <div class ="text-dark ">
                                            <h3 class="text-uppercase fw-bold">Kementerian Komunikasi dan Informatika RI </h3>
                                            <h3 class="text-uppercase fw-bold">Direktorat Jenderal Penyelenggaraan POS dan Informatika</h3>
                                            <br>
                                            <h5 class="fw-normal">Menuju Masyarakat Informasi Indonesia </h5>
                                            <p class="fw-light">Jalan Medan Merdeka Barat No. 9 Jakarta Pusat 10110 DKI Jakarta, Indonesia
                                            <br> Call Center 159 | 
                                            <a href="http://www.pelayananprimaditjenppi.go.id/" target="_blank"
                                                style="text-decoration: underline;">www.pelayananprimaditjenppi.go.id</a>
                                            </p>
                                        </div>									
                                    </div>
                                    <!--end::Text-->
                                </div>					            
                            </div>							        
                            <div class="d-flex flex-row flex-column-fluid">
                                <div class="d-flex flex-row-fluid flex-center">
                                    <div class="flex-grow-1 text-center pt-15">
                                        <h1>KONFIRMASI PEMENUHAN PERSYARATAN</h1>
                                        <h3><span id="jenisizintext" th:text="${applicationInfo.jenisPerizinan}">null</span></h3>
                                        <h3><span id="mediatransmisitext" th:text="${applicationInfo.mediaTransmisi}">null</span></h3>
                                        <h3>NOMOR : <span id="nomortext" th:text="${applicationInfo.nomorKIB}">BC112021003</span></h3>
                                        <br>
                                        <h1> PERIZINAN BERUSAHA:</h1>
                                        <h3>NAMA PERUSAHAAN : <span id="namatext" th:text="${applicationInfo.namaPerusahaan}">null</span></h3>
                                        <h3>NOMOR INDUK BERUSAHA : <span id="nib" th:text="${applicationInfo.nomorNIB}">null</span></h3>
                                        <h3>KBLI : <span id="kblitext" th:text="${applicationInfo.kbli}">null</span></h3>
                                        <h3>TANGGAL PENGAJUAN : <span id="tanggaltext" th:value="${#dates.format(applicationInfo.tanggalPengajuan, 'dd-MM-yyyy')}">23-11-2021</span></h3>
                                        <br><br>
                                        <p>Penyampaian dokumen Pemenuhan Persyaratan telah berhasil.<br>Hasil evaluasi akan disampaikan paling lambat ? hari kerja.</p>
                                    </div>
                                    <br><br>							            				                					                
                                </div>
                            </div>
                        </div>					    	    					    					    
                    </div>					
                </div>
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <a id="go-to-dashboard" type="reset" class="btn btn-purple" data-bs-dismiss="modal">OK</a>							
                </div>
                <!--end::Actions-->					
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>