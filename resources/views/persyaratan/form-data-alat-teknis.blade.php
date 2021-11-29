<div class="card card-flush me-5 mb-10">			
    <div class="card-body pt-5 px-20">    
        <form id="form_data_alat_teknis"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="perizinan_id" id="perizinan_id" value="{{ $perizinan['id'] }}">	
            <div class="table-responsive">
                <h3 class="mb-10">Formulir Data Alat/Teknis</h3>			    	
                <table class="table table-row-bordered form-table">
                    <thead>
                        <tr class="fw-bolder fs-6 text-center text-gray-800">
                            <th>No</th>
                            <th colspan="5">Data</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>    	
                        <tbody id="body-dat">
                            <tr>
                                <td>1</td>
                                <td>
                                    Lokasi: <textarea name="lokasi[]" class="form-control form-control-sm" id="" cols="30" rows="4"></textarea>
                                    Jenis: <input type="text" name="jenis[]" class="form-control form-control-sm" placeholder=""/>
                                </td>
                                <td>
                                    Merk: <input type="text" name="merk[]" class="form-control form-control-sm" placeholder=""/>
                                    Buatan: <input type="text" name="buatan[]" class="form-control form-control-sm" placeholder=""/>
                                    Type: <input type="text" name="type[]" class="form-control form-control-sm" placeholder=""/>
                                </td>
                                <td>
                                    Serial Number: <input type="text" name="serial_number[]" class="form-control form-control-sm" placeholder=""/>
                                    No Sertifikat: <input type="text" name="nomor_sertifikat[]" class="form-control form-control-sm" placeholder=""/>
                                    File Sertifikat: <input type="file" name="foto_sertifikat[]" class="form-control form-control-sm foto_sertifikat" accept="application/pdf"/>
                                    
                                </td>
                                <td>
                                    Foto Perangkat: <input type="file" name="foto_perangkat[]" class="form-control form-control-sm" accept="application/pdf"/>
                                    Foto Serial Number: <input type="file" name="foto_sn[]" class="form-control form-control-sm" accept="application/pdf">
                                    Bukti Kepemilikan Perangkat: <input type="file" name="foto_bukti_kepemilikan[]" class="form-control form-control-sm" accept="application/pdf"/>
                                </td>			            
                                <td class="items-align-center">
                                <button id="dat-delete-1" class="btn btn-icon btn-danger remove w-30px h-30px" disabled>
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
            </div>
            <!--begin::Actions-->					        							        
            <div class="d-flex flex-stack pt-10">
                <!--begin::Wrapper-->
                <div class="me-2">
                    <button type="button" id="tambah-dat" class="btn btn-outline btn-outline-primary">
                        TAMBAH DATA
                    </button>
                </div>
                <!--end::Wrapper-->							
                <!--begin::Wrapper-->
                <div>
                    <button type="button" id="simpan-dat" class="btn btn-outline btn-outline-success">
                        SIMPAN DATA
                    </button>									                
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Actions-->	
        </form>	
    </div>										
</div>

@once
    @push('scripts')        
    <script src="{{asset('theme')}}/js/kominfo/persyaratan/form-dat.js" type="text/javascript"></script>    
    @endpush
@endonce