<!--begin::Formulir Komitmen Pembangunan 5 Tahun Fiber Optik SKKL-->
<div class="card card-flush me-5 mb-10">
        <div id="kplt-jartup-skkl" class="card-body pt-5 px-20">
            <h3>Formulir Komitmen Pembangunan 5 Tahun</h3>
            <h5 class="mb-10">Penyelenggaraan Jaringan Tetap Tertutup - Fiber Optik SKKL</h5>	
            <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	    	
            <table class="table table-row-bordered form-table">
            <thead>
                <tr class="fw-bolder fs-6 text-center text-gray-800">
                    <th>Periode</th>
                    <th>Jumlah Cable Landing Station (unit)</th>
                    <th>Lokasi Cable Landing Station (Kabupaten/Kota)</th>
                    <th>Rute Jaringan Sistem Komunikasi Kabel Laut</th>				            
                    <th>Jumlah  Kabel  Fiber Optik (core) </th>
                    <th>Kapasitas Bandwidth (Gbps) </th>				            
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            
            <tbody id="body-kplt-jartup-skkl">
                <tr>
                    <td><input type="text" name="periode[]" class="form-control" placeholder="xxx"/></td>
                    <td><input type="text" name="jumlah_unit[]" class="form-control" placeholder="xxx"/></td>
                    <td><input type="text" name="lokasi_landing_station[]" class="form-control" placeholder="xxx"/></td>
                    <td><input type="text" name="rute[]" class="form-control" placeholder="xxx"/></td>
                    <td><input type="text" name="jumlah_kabel[]" class="form-control" placeholder="xxx"/></td>
                    <td><input type="text" name="kapasitas_bw[]" class="form-control" placeholder="xxx"/></td>
                    <td class="items-align-center text-end">
                    <button class="btn btn-icon btn-secondary w-30px h-30px" disabled>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>				        		       
            </tbody>
        </table>	
        <!--begin::Actions-->					        							        
        <div class="d-flex flex-stack pt-10">
            <!--begin::Wrapper-->
            <div class="me-2">
                <button type="button" id="tambah-kplt-jartup-skkl" class="btn btn-outline btn-outline-primary">
                    TAMBAH DATA
                </button>
            </div>
            <!--end::Wrapper-->							
            <!--begin::Wrapper-->
            <div>
                <button type="button" id="simpan-kplt-jartup-skkl" class="btn btn-outline btn-outline-success">
                    SIMPAN DATA
                </button>									                
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->		
    </div>										
</div>
<!--end::Formulir Komitmen Pembangunan 5 Tahun Fiber Optik SKKL-->

@once
    @push('scripts')        
    <script src="{{asset('theme')}}/js/kominfo/persyaratan/form-kplt-jartup-skkl.js" type="text/javascript"></script>    
    @endpush
@endonce