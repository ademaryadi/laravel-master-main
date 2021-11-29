<div class="card card-flush me-5 mb-10">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">		
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder" id="kt_telsus_all">
                <li class="nav-item">
                    <a class="nav-link text-active-primary active" data-kt-countup-tabs="true" data-bs-toggle="tab" id="toggle-fo" href="#kt_telsus_fo">Kawat/Serat Optik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="toggle-radio-konv" href="#kt_telsus_radio_konv">Radio Konvensional</a>
                </li>				
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="toggle-radio-trunking" href="#kt_telsus_radio_trunking">Radio Trunking</a>
                </li>				
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="toggle-radio-data" href="#kt_telsus_radio_data">Sistem Komunikasi Data</a>
                </li>				
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="toggle-satelit" href="#kt_telsus_satelit">Satelit</a>
                </li>				
            </ul>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-7 px-20">
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                <div class="tab-pane fade active show" id="kt_telsus_fo" role="tabpanel">				
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="form-body">
                            <form class="form w-100" id="form_telsus_fo" action="#" method="post">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
                                <table class="table table-row-bordered form-table">
                                    <tr class="fw-bolder fs-6 text-center text-gray-800">
                                        <th>Tahun</th>
                                        <th>Rute</th>
                                        <th>Panjang Rute (Km)</th>
                                        <th>Kapasitas (Core)</th>
                                        <th>Cakupan Wilayah Layanan</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                    
                                    <tbody id="body_telsus_fo">
                                        <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                                        <td><input type="text" name="rute[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="number" name="panjang_rute[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="kapasitas[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                                        <td class="items-align-center text-end">
                                        <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                                            <span class="svg-icon svg-icon-light svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                        </td>
                                    </tbody>
                                </table>	
                                <!--begin::Actions-->					        							        
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="tambah_telsus_fo" class="btn btn-outline btn-outline-primary">
                                            TAMBAH DATA
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->							
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" id="simpan_telsus_fo" class="btn btn-outline btn-outline-success">
                                            SIMPAN DATA
                                        </button>									                
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->	
                            </form>	
                        </div>										
                    </div>
                    <!--end::Container-->							
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_telsus_radio_konv" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="form-body">
                            <form class="form w-100" id="form_telsus_radio_konv" action="#" method="post">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
                                <table class="table table-row-bordered form-table">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-center text-gray-800">
                                            <th>Tahun</th>
                                            <th>Lokasi Perangkat (Kabupaten/Kota)</th>
                                            <th>Jenis Perangkat </th>
                                            <th>Jumlah Perangkat </th>
                                            <th>Cakupan Wilayah Layanan</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="body_telsus_radio_konv">
                                        <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                                        <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="number" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                                        <td class="items-align-center text-end">
                                        <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                                            <span class="svg-icon svg-icon-light svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                        </td>
                                    </tbody>
                                </table>	
                                <!--begin::Actions-->					        							        
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="tambah_telsus_radio_konv" class="btn btn-outline btn-outline-primary">
                                            TAMBAH DATA
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->							
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" id="simpan_telsus_radio_konv" class="btn btn-outline btn-outline-success">
                                            SIMPAN DATA
                                        </button>									                
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->		
                            </form>
                        </div>										
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->			
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_telsus_radio_trunking" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="form-body">
                            <form class="form w-100" id="form_telsus_radio_trunking" action="#" method="post">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
                                <table class="table table-row-bordered form-table">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-center text-gray-800">
                                            <th>Tahun</th>
                                            <th>Lokasi Perangkat (Kabupaten/Kota)</th>
                                            <th>Jenis Perangkat </th>
                                            <th>Jumlah Perangkat </th>
                                            <th>Cakupan Wilayah Layanan</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="body_telsus_radio_trunking">
                                        <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                                        <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="number" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                                        <td class="items-align-center text-end">
                                        <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                                            <span class="svg-icon svg-icon-light svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                        </td>
                                    </tbody>
                                </table>	
                                <!--begin::Actions-->					        							        
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="tambah_telsus_radio_trunking" class="btn btn-outline btn-outline-primary">
                                            TAMBAH DATA
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->							
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" id="simpan_telsus_radio_trunking" class="btn btn-outline btn-outline-success">
                                            SIMPAN DATA
                                        </button>									                
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->		
                            </form>
                        </div>										
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_telsus_radio_data" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="form-body">
                            <form class="form w-100" id="form_telsus_radio_data" action="#" method="post">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
                                <table class="table table-row-bordered form-table">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-center text-gray-800">
                                            <th>Tahun</th>
                                            <th>Lokasi Perangkat (Kabupaten/Kota)</th>
                                            <th>Jenis Perangkat </th>
                                            <th>Jumlah Perangkat </th>
                                            <th>Cakupan Wilayah Layanan</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="body_telsus_radio_data">
                                        <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                                        <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="number" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                                        <td class="items-align-center text-end">
                                        <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                                            <span class="svg-icon svg-icon-light svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                        </td>
                                    </tbody>
                                </table>	
                                <!--begin::Actions-->					        							        
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="tambah_telsus_radio_data" class="btn btn-outline btn-outline-primary">
                                            TAMBAH DATA
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->							
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" id="simpan_telsus_radio_data" class="btn btn-outline btn-outline-success">
                                            SIMPAN DATA
                                        </button>									                
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->		
                            </form>
                        </div>										
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_telsus_satelit" role="tabpanel">
                    <!--begin::Container-->
                    <div class="col-12 p-5">
                        <div class="form-body">
                            <form class="form w-100" id="form_telsus_satelit" action="#" method="post">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
                                <table class="table table-row-bordered form-table">
                                    <tr class="fw-bolder fs-6 text-center text-gray-800">
                                        <th>Jumlah Transponder dan Band Frekuensi yang Digunakan</th>
                                        <th>Kapasitas Transponder</th>
                                        <th>Jumlah Hub</th>
                                        <th>Lokasi Hub</th>
                                        <th>Cakupan Wilayah Layanan(Kota/Kab dan Kota/Kab Seluruh Indonesia)</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                    
                                    <tbody id="body_telsus_satelit">
                                        <td><input type="number" name="jumlah_transponder[]" required class="form-control" placeholder=""/></td>				            				            
                                        <td><input type="text" name="kapasitas_transponder[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="number" name="jumlah_hub[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="lokasi_hub[]" required class="form-control" placeholder=""/></td>
                                        <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                                        <td class="items-align-center text-end">
                                        <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                                            <span class="svg-icon svg-icon-light svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                        </td>
                                    </tbody>
                                </table>	
                                <!--begin::Actions-->					        							        
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="tambah_telsus_satelit" class="btn btn-outline btn-outline-primary">
                                            TAMBAH DATA
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->							
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" id="simpan_telsus_satelit" class="btn btn-outline btn-outline-success">
                                            SIMPAN DATA
                                        </button>									                
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->	
                            </form>	
                        </div>										
                    </div>
                    <!--end::Container-->				
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
    </div>
    <!--end::Body-->
</div>

@once
    @push('scripts')
        <script src="{{asset('theme')}}/js/kominfo/persyaratan/form-telsus.js" type="text/javascript"></script>    
    @endpush
@endonce
