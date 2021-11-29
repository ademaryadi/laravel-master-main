<div class="card card-flush me-5 mb-10">
    <div class="card-body pt-5 px-20">
        <form id="form_komitmen_kinerja"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="perizinan_id" value="{{ $perizinan['id'] }}">
            <h3 class="mb-10">Komitmen Kinerja Layanan</h3>			    	
            <table class="table table-row-bordered form-table">
                <thead>
                    <tr class="fw-bolder fs-6 text-center text-gray-800">
                        <th>Tahun</th>
                        <th>I</th>
                        <th>II</th>
                        <th>III</th>
                        <th>IV</th>
                        <th>V</th>
                    </tr>
                </thead>
                
                <tbody id="body-kkl">
                    <tr>
                        <td>Network Availabilty (%)</td>
                        <td><input type="text" name="network_availability1" class="form-control" placeholder="%"/></td>
                        <td><input type="text" name="network_availability2" class="form-control" placeholder="%"/></td>
                        <td><input type="text" name="network_availability3" class="form-control" placeholder="%"/></td>
                        <td><input type="text" name="network_availability4" class="form-control" placeholder="%"/></td>
                        <td><input type="text" name="network_availability5" class="form-control" placeholder="%"/></td>				            
                    </tr>	
                    <tr>
                        <td>Pencapaian Mean Time To Restore  (jam)</td>
                        <td><input type="text" name="jam1" class="form-control" placeholder="99"/></td>
                        <td><input type="text" name="jam2" class="form-control" placeholder="99"/></td>
                        <td><input type="text" name="jam3" class="form-control" placeholder="99"/></td>
                        <td><input type="text" name="jam4" class="form-control" placeholder="99"/></td>
                        <td><input type="text" name="jam5" class="form-control" placeholder="99"/></td>				            
                    </tr>			        		       
                </tbody>
            </table>	
            <!--begin::Actions-->					        							        
            <div class="d-flex align-items-end flex-column">		            		            
                <button type="button" id="simpan-kkl" class="btn btn-outline btn-outline-success">
                    SIMPAN DATA
                </button>									                		            
            </div>
            <!--end::Actions-->		
        </form>
    </div>										
</div>
@once
    @push('scripts')        
    {{-- <script src="{{asset('theme')}}/js/kominfo/persyaratan/form-komitmen-kinerja.js" type="text/javascript"></script>     --}}
    <script>
        $("#simpan-kkl").click(function() {
            $.ajax({
                type: "post",
                url: "prosesKomitmenKinerja",
                headers: {"X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")},
                data: $("#form_komitmen_kinerja").serialize(),
                success: function(data){
                    swal("Berhasil!", "Disimpan", "success");
                },
                error: function(data){
                        alert("Error")
                }
            });
		});
    </script>
    @endpush
@endonce
