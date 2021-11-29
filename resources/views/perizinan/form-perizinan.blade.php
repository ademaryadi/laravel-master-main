
<div class="modal fade" id="kt_modal_izin_jartel" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color: #600A88;">
                <!--begin::Modal title-->
                <h3 class="card-title text-white ls-2">Permohonan Perizinan Baru Jaringan/Jasa Telekomunikasi</h3>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                    </svg>
                </span>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">

            <!--begin::Stepper-->
            <div class="stepper stepper-pills" id="kt_stepper_izin_jartel">
                <!--begin::Nav-->
                <div hidden=true class="stepper-nav">
                    <!--begin::Step 1-->
                    <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                        <!--begin::Label-->
                    </div>
                    <!--end::Step 1-->
            
                    <!--begin::Step 2-->
                    <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                    </div>
                    <!--end::Step 2-->
            
                    <!--begin::Step 3-->
                    <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Step 4-->
                    <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                    </div>
                    <!--end::Step 4-->
                </div>
                <!--end::Nav-->
                <!--begin::Form-->
                <form class="form" id="kt_stepper_form_jartel" th:method="post">
                    <!--begin::Group-->

                    <!--begin::Step 1-->
                    <div class="flex-column current" data-kt-stepper-element="content">
                        <h3 id="formTitle">Pilih KBL, Jenis Layanan & Media Transmisi</h3>
                        <div class="form-group row">
                        <label  class="col-3 col-form-label">Nama Perusahaan</label>
                        <div class="col-9">
                        <span>:</span>
                        {{-- <label class="col-form-label fw-bold mb-2" 
                            id= "namaPerusahaanText" value="${applicantData.namaPerusahaan}"
                            text="${applicantData.namaPerusahaan}">
                        </label> --}}
                        <label class="col-form-label fw-bold mb-2" 
                            id= "namaPerusahaanText" value="{{ $perusahaan['nama'] }}"
                            text="{{ $perusahaan['nama'] }}">{{ $perusahaan['nama'] }}
                        </label>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label  class="col-3 col-form-label">Nomor NIB</label>
                        <div class="col-9">
                        <span>:</span>										    
                        {{-- <label class="col-form-label fw-bold" 
                            id= "nomorNIBText" value="${applicantData.nomorNIB}"
                            text="${applicantData.nomorNIB}"></label> --}}
                        <label class="col-form-label fw-bold" 
                            id= "nomorNIBText" value="{{ auth()->user()->nib }}"
                            text="{{ auth()->user()->nib }}">{{ auth()->user()->nib }}</label>
                        </div>
                        </div>									   
                        <div class="form-group row">
                        <label  class="col-3 col-form-label">Pemohon</label>
                        <div class="col-9">
                        <span>:</span>
                        {{-- <label  class="col-form-label fw-bold"
                            id="pemohonText" value="${applicantData.pemohon}"
                            text="${applicantData.pemohon}"></label> --}}
                        <label  class="col-form-label fw-bold"
                            id="pemohonText" value="{{ $pemohon['nama'] }}"
                            text="{{ $pemohon['nama'] }}">{{ $pemohon['nama'] }}</label>
                        </div>
                        </div>									   
                        <div class="form-group row">
                        <label  class="col-3 col-form-label">Jabatan</label>
                        <div class="col-9">
                        <span>:</span>
                        <label  class="col-form-label fw-bold"
                            id="jabatanText" value="{{ $pemohon['jabatan'] }}"
                            text="{{ $pemohon['jabatan'] }}">{{ $pemohon['jabatan'] }}</label>
                        </div>
                        </div>	
                        <div class="separator border-3 my-5"></div>

                        <div class="form-group fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label">Tanggal Pengajuan</label>
                            <!--end::Label-->							
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" disabled
                                id="tanggalPengajuanInput"
                                name="tanggalPengajuan" placeholder="" 
                                value="{{$tanggalPengajuan}}"/>
                            <!--end::Input-->
                        </div>
                        <div class="form-group fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Jenis Perizinan</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-placeholder="Pilih Izin Jaringan/Jasa" 
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                id="jenisPerizinanInput"
                                name="jenisPerizinan">
                                    <option value="">Pilih Izin...</option>
                                    @foreach ($jenisPerizinan as $jenisIzin)
                                    <option value="{{$jenisIzin['id']}}">
                                    {{$jenisIzin['deskripsi']}}
                                    </option>
                                    @endforeach
                                            
                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="form-group fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">KBLI</label>
                            <!--end::Label-->							
                            <!--begin::Input-->
                            {{-- <input type="text" class="form-control form-control-solid" disabled
                                id="kbliInput"
                                name="kbli" placeholder="" value=""/> --}}
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                data-placeholder="KBLI" 
                                id="kbliInput" name="kbli">
                                            <option value="">Pilih KBLI...</option>
                                            <option th:each="kodeIzin : ${kodeIzinBaruList}"
                                                    text="${kodeIzin}"
                                                    value="${kodeIzin}">
                                            </option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <div class="form-group fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Kode Izin Baru</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                data-placeholder="Kode Izin Baru" 
                                id="kodeIzinBaruInput" name="kodeIzinBaru">
                                            <option value="">Pilih Kode Izin...</option>
                                            <option th:each="kodeIzin : ${kodeIzinBaruList}"
                                                    text="${kodeIzin}"
                                                    value="${kodeIzin}">
                                            </option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="form-group fv-row mb-3">
                            <!--begin::Label-->
                            {{-- <label class="form-label required">Jenis Penyelenggaraan</label> --}}
                            <!--end::Label-->							
                            <!--begin::Input-->
                            <input type="hidden" class="form-control form-control-solid" disabled
                                id="jenisPenyelenggaraanInput"
                                name="jenisPenyelenggaraan" placeholder="" value=""/>
                            <!--end::Input-->
                        </div>	
                        <div class="form-group fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Media Transmisi</label>
                            <!--end::Label-->							
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" disabled
                                id="mediaTransmisiInput"
                                name="mediaTransmisi" placeholder="" value=""/>
                            <!--end::Input-->
                        </div>							                							                
                        
                    </div>
                    <!--end::Step 1-->     

                    <!--begin::Step 2 JASTELDAS-->
                    <div class="flex-column" data-kt-stepper-element="content">
                        <h3>Permohonan Izin JASTELDAS</h3>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Nama Perusahaan</label>
                            <div class="col-9">
                                <span>:</span>
                                <label class="col-form-label fw-bold mb-2" 
                                    id= "namaPerusahaanText2" value="${applicantData.namaPerusahaan}" 										   		
                                    text="${applicantData.namaPerusahaan}">
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Nomor NIB</label>
                            <div class="col-9">
                            <span>:</span>
                            <label class="col-form-label fw-bold" 
                                id= "nomorNIBText2" value="${applicantData.nomorNIB}"
                                text="${applicantData.nomorNIB}"></label>
                            </div>
                        </div>									   
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Pemohon</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="pemohonText2" value="${applicantData.pemohon}"
                                text="${applicantData.pemohon}"></label>
                            </div>
                        </div>									   
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jabatan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jabatanText2" value="${applicantData.jabatan}"
                                text="${applicantData.jabatan}"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Tanggal Pengajuan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="tanggalPengajuanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jenis Perizinan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jenisPerizinanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Kode Izin Baru</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="kodeIzinBaruText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">KBLI</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="kbliText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jenis Penyelenggaraan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jenisPenyelenggaraanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Media Transmisi</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="mediaTransmisiText2"></label>
                            </div>
                        </div>
                        <div class="separator border-3 my-5"></div>

                        <!-- Jenis Izin Jaringan -->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Jenis Izin Jaringan Aktif</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-placeholder="Pilih Jenis Izin Jaringan Aktif" 
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                id="jenisIzinJaringanJasteldasInput"
                                name="jenisIzinJaringanJasteldas">																
                                <option value=""></option>                                
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--Jenis Izin Jaringan -->

                        <!-- Nomor Izin Jaringan -->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Nomor Izin Jaringan Aktif</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-placeholder="Pilih Nomor Izin Jaringan Aktif" 
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                id="nomorIzinJaringanJasteldasInput"
                                name="nomorIzinJaringanJasteldas">																
                                <option value=""></option>                                
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--Nomor Izin Jaringan -->                                            
                    </div>
                    <!--end::Step 2 JASTELDAS-->                                                                

                    <!--begin::Step 3 NAP-->
                    <div class="flex-column" data-kt-stepper-element="content">
                        <h3>Permohonan Izin NAP</h3>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Nama Perusahaan</label>
                            <div class="col-9">
                                <span>:</span>
                                <label class="col-form-label fw-bold mb-2" 
                                    id= "namaPerusahaanText2" value="${applicantData.namaPerusahaan}" 										   		
                                    text="${applicantData.namaPerusahaan}">
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Nomor NIB</label>
                            <div class="col-9">
                            <span>:</span>
                            <label class="col-form-label fw-bold" 
                                id= "nomorNIBText2" value="${applicantData.nomorNIB}"
                                text="${applicantData.nomorNIB}"></label>
                            </div>
                        </div>									   
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Pemohon</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="pemohonText2" value="${applicantData.pemohon}"
                                text="${applicantData.pemohon}"></label>
                            </div>
                        </div>									   
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jabatan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jabatanText2" value="${applicantData.jabatan}"
                                text="${applicantData.jabatan}"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Tanggal Pengajuan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="tanggalPengajuanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jenis Perizinan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jenisPerizinanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Kode Izin Baru</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="kodeIzinBaruText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">KBLI</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="kbliText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Jenis Penyelenggaraan</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="jenisPenyelenggaraanText2"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-3 col-form-label">Media Transmisi</label>
                            <div class="col-9">
                            <span>:</span>
                            <label  class="col-form-label fw-bold"
                                id="mediaTransmisiText2"></label>
                            </div>
                        </div>
                        <div class="separator border-3 my-5"></div>
                                                        
                        <!-- Jenis Izin Jaringan -->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Jenis Izin Jaringan Tertutup Aktif</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-placeholder="Pilih Jenis Izin Jaringan Tertutup Aktif" 
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                id="jenisIzinJaringanNapInput"
                                name="jenisIzinJaringanNap">																
                                <option value=""></option>                                
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--Jenis Izin Jaringan -->

                        <!-- Nomor Izin Jaringan -->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required">Nomor Izin Jaringan Tertutup Aktif</label>
                            <!--end::Label-->							
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" 
                                data-control="select2"
                                data-placeholder="Pilih Nomor Izin Jaringan Tertutup Aktif" 
                                data-dropdown-parent="#kt_modal_izin_jartel"
                                id="nomorIzinJaringanNapInput"
                                name="nomorIzinJaringanNap">																
                                <option value=""></option>                                
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--Nomor Izin Jaringan -->   
                    </div>
                    <!--end::Step 3 NAP-->                                                                

                    <!--begin::Step 4-->
                    <div class="flex-column" data-kt-stepper-element="content">
                            <div class="m-0">
                                <!--begin::Text-->
                                <div class="fw-bold fs-5 text-center text-dark-600 text-dark my-4">
                                    Dengan ini saya menyatakan bahwa seluruh data yang disampaikan adalah BENAR.
                                    Jika dikemudian hari data yang disampaikan terbukti tidak benar, maka kami siap
                                    menerima akibat hukum sesuai dengan ketentuan perundang-undangan.
                                </div>
                            </div>									
                            
                            <!--begin::Input row-->
                            <div class="d-flex flex-column fv-row">            
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="checkboxAgreementSetuju" type="checkbox" value="1" id="checkboxAgreementSetuju" />
                                    <!--end::Input-->
                    
                                    <!--begin::Label-->
                                    <label class="form-check-label w-25" for="checkboxAgreementSetuju">
                                        <div class="fw-bolder text-dark">YA, SAYA SETUJU</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Input row-->
                        
                        <div class="separator border-3 my-5"></div>                                    
                        <!--end::Body-->
                    </div>
                    <!--end::Step 4-->

                    <!--begin::Actions-->					        							        
                    <div class="d-flex flex-stack pt-10">
                        <!--begin::Wrapper-->
                        <div class="me-2">
                            <button type="button" id="previousStep" class="btn btn-light btn-secondary" data-kt-stepper-action="previous">
                                KEMBALI
                            </button>
                        </div>
                        <!--end::Wrapper-->							
                        <!--begin::Wrapper-->
                        <div>
                            <button id="submitPermohonan" type="submit" class="btn btn-purple" 
                                data-kt-stepper-action="submit">
                                <span class="indicator-label">SUBMIT</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>							                	
                            </button>							
                            <button type="button" id="nextStep" class="btn btn-purple" data-kt-stepper-action="next">
                                LANJUT
                            </button>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Stepper-->
            </div>

        </div>
    </div>
</div>
