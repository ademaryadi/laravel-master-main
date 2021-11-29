
// Class definition
var FormKpltJartapLbps = function () {
	var periode = [];
	var cakupan = [];
	var portFttx = [];	
	var kapasitasBw = [];
	var kapasitasPelanggan = [];
		
	
	
	//method
	var initForm = () => {
		
		$("#simpan-kplt-jartap-lbps").click(function() {			
			$("#body-kplt-jartap-lbps input[name=periode\\[\\]]").each(function() {
			   periode.push($(this).val());
			});
			$("#body-kplt-jartap-lbps input[name=cakupan-layanan\\[\\]]").each(function() {
				cakupan.push($(this).val());
			});		
			$("#body-kplt-jartap-lbps input[name=port-fttx\\[\\]]").each(function() {
				portFttx.push($(this).val());
			});		
			$("#body-kplt-jartap-lbps input[name=kapasitas-bw\\[\\]]").each(function() {
				kapasitasBw.push($(this).val());
			});		
			$("#body-kplt-jartap-lbps input[name=kapasitas-pelanggan\\[\\]]").each(function() {
				kapasitasPelanggan.push($(this).val());
			});
			// alert(periode.length);
			if(periode.length=="" || cakupan.length=="" || portFttx.length=="" || kapasitasBw.length=="" || kapasitasPelanggan.length==""){
				// event.preventDefault();
				swal("Peringatan!", "Harap isi data secara lengkap", "warning");	  
			}else{
				swal("Berhasil!", "Disimpan", "success");	  
			}
		});
		
		$("#tambah-kplt-jartap-lbps").click(function() {			
			$("#body-kplt-jartap-lbps").append(kpltRow);
		});
		
		$("#body-kplt-jartap-lbps").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
	var kpltRow = `
		<tr>
            <td><input type="text" name="periode[]" class="form-control" placeholder="xxx"/></td>				            				            
            <td><input type="text" name="cakupan-layanan[]" class="form-control" placeholder="xxx"/></td>
            <td><input type="text" name="port-fttx[]" class="form-control" placeholder="xxx"/></td>
            <td><input type="text" name="kapasitas-bw[]" class="form-control" placeholder="xxx"/></td>
            <td><input type="text" name="kapasitas-pelanggan[]" class="form-control" placeholder="xxx"/></td>
            <td class="items-align-center text-end">
            <button class="btn btn-icon btn-danger remove w-30px h-30px">
				<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
				<span class="svg-icon svg-icon-light svg-icon-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
					</svg>
				</span>
			</button>
			</td>
        </tr>		
				  `
	
	return {
		// Public Functions
		init: function () {
			initForm();	
		}
	};
}();

//On document ready
KTUtil.onDOMContentLoaded(function() {
	FormKpltJartapLbps.init();
});