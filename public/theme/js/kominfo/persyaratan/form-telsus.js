
// Class definition
var form_telsus_fo = function () {
	// Elements		
	var number = 1;
	
	
	//method
	var initForm = () => {
		
		$("#simpan_telsus_fo").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'prosesTelsusFo',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_telsus_fo")),
				processData: false,
				contentType: false,
				success: function(data) {
					swal("Berhasil!", "Disimpan", "success");
				}
			});
            $("#toggle-radio-konv").removeAttr("data-bs-toggle");
            $("#toggle-radio-trunking").removeAttr("data-bs-toggle");
            $("#toggle-radio-data").removeAttr("data-bs-toggle");
            $("#toggle-satelit").removeAttr("data-bs-toggle");
            swal("Berhasil!", "Disimpan", "success");
		});

        $("#tambah_telsus_fo").click(function() {			
			$("#body_telsus_fo").append(foRow);
		});
		
		$("#body_telsus_fo").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
		var foRow = `
                <tr>
                    <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                    <td><input type="text" name="rute[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="panjang_rute[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="kapasitas[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>		            
                    <td class="items-align-center">
                    <button id="telsus_fo_delete-`+ (number) + `" class="btn btn-icon btn-danger remove w-30px h-30px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>`;
	
	
        return {
            // Public Functions
            init: function () {
                initForm();	
            }
        };
}();

var form_telsus_radio_konv = function () {
	// Elements		
	var number = 1;
	
	
	//method
	var initForm = () => {
		
		$("#simpan_telsus_radio_konv").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'prosesTelsusRadioKonv',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_telsus_radio_konv")),
				processData: false,
				contentType: false,
				success: function(data) {
					swal("Berhasil!", "Disimpan", "success");
				}
			});
            $("#toggle-fo").removeAttr("data-bs-toggle");
            $("#toggle-radio-trunking").removeAttr("data-bs-toggle");
            $("#toggle-radio-data").removeAttr("data-bs-toggle");
            $("#toggle-satelit").removeAttr("data-bs-toggle");
            swal("Berhasil!", "Disimpan", "success");
		});

        $("#tambah_telsus_radio_konv").click(function() {			
			$("#body_telsus_radio_konv").append(radio_konvRow);
		});
		
		$("#body_telsus_radio_konv").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
		var radio_konvRow = `<tr>
                    <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                    <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                    <td class="items-align-center text-end">
                    <button id="telsus_fadio_konv_delete-`+ (number) + `" class="btn btn-icon btn-danger remove w-30px h-30px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>`;
	
	
        return {
            // Public Functions
            init: function () {
                initForm();	
            }
        };
}();

var form_telsus_radio_trunking = function () {
	// Elements		
	var number = 1;
	
	
	//method
	var initForm = () => {
		
		$("#simpan_telsus_radio_trunking").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'prosesTelsusRadioTrunking',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_telsus_radio_trunking")),
				processData: false,
				contentType: false,
				success: function(data) {
					swal("Berhasil!", "Disimpan", "success");
				}
			});
            $("#toggle-fo").removeAttr("data-bs-toggle");
            $("#toggle-radio-konv").removeAttr("data-bs-toggle");
            $("#toggle-radio-data").removeAttr("data-bs-toggle");
            $("#toggle-satelit").removeAttr("data-bs-toggle");
            swal("Berhasil!", "Disimpan", "success");
		});

        $("#tambah_telsus_radio_trunking").click(function() {			
			$("#body_telsus_radio_trunking").append(radio_trunkingRow);
		});
		
		$("#body_telsus_radio_trunking").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
		var radio_trunkingRow = `<tr>
                    <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                    <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                    <td class="items-align-center text-end">
                    <button id="telsus_fadio_trunking_delete-`+ (number) + `" class="btn btn-icon btn-danger remove w-30px h-30px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>`;
	
	
        return {
            // Public Functions
            init: function () {
                initForm();	
            }
        };
}();

var form_telsus_radio_data = function () {
	// Elements		
	var number = 1;
	
	
	//method
	var initForm = () => {
		
		$("#simpan_telsus_radio_data").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'prosesTelsusRadioData',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_telsus_radio_data")),
				processData: false,
				contentType: false,
				success: function(data) {
					swal("Berhasil!", "Disimpan", "success");
				}
			});
            $("#toggle-fo").removeAttr("data-bs-toggle");
            $("#toggle-radio-trunking").removeAttr("data-bs-toggle");
            $("#toggle-radio-konv").removeAttr("data-bs-toggle");
            $("#toggle-satelit").removeAttr("data-bs-toggle");
            swal("Berhasil!", "Disimpan", "success");
		});

        $("#tambah_telsus_radio_data").click(function() {			
			$("#body_telsus_radio_data").append(radio_dataRow);
		});
		
		$("#body_telsus_radio_data").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
		var radio_dataRow = `<tr>
                    <td><input type="number" maxlength="4" minlength="4" name="tahun[]" required class="form-control" placeholder=""/></td>				            				            
                    <td><input type="text" name="lokasi_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jenis_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="jumlah_perangkat[]" required class="form-control" placeholder=""/></td>
                    <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>
                    <td class="items-align-center text-end">
                    <button id="telsus_fadio_data_delete-`+ (number) + `" class="btn btn-icon btn-danger remove w-30px h-30px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>`;
	
	
        return {
            // Public Functions
            init: function () {
                initForm();	
            }
        };
}();

var form_telsus_satelit = function () {
	// Elements		
	var number = 1;
	
	
	//method
	var initForm = () => {
		
		$("#simpan_telsus_satelit").click(function() {	
			// event.preventDefault();
			$.ajax({
				url: 'prosesTelsusSatelit',
				type: 'post',
				dataType: 'json',
				// data: $('form#form_data_alat_teknis').serialize(),
				data: new FormData(document.getElementById("form_telsus_satelit")),
				processData: false,
				contentType: false,
				success: function(data) {
					swal("Berhasil!", "Disimpan", "success");
				}
			});
            $("#toggle-fo").removeAttr("data-bs-toggle");
            $("#toggle-radio-trunking").removeAttr("data-bs-toggle");
            $("#toggle-radio-data").removeAttr("data-bs-toggle");
            $("#toggle-radio-konv").removeAttr("data-bs-toggle");
            swal("Berhasil!", "Disimpan", "success");
		});

        $("#tambah_telsus_satelit").click(function() {			
			$("#body_telsus_satelit").append(satelitRow);
		});
		
		$("#body_telsus_satelit").on('click','.remove',function(){
	        $(this).parent().parent().remove();
	    });
		
	}
	
		var satelitRow = `
                <tr>
                <td><input type="number" name="jumlah_transponder[]" required class="form-control" placeholder=""/></td>				            				            
                <td><input type="text" name="kapasitas_transponder[]" required class="form-control" placeholder=""/></td>
                <td><input type="number" name="jumlah_hub[]" required class="form-control" placeholder=""/></td>
                <td><input type="text" name="lokasi_hub[]" required class="form-control" placeholder=""/></td>
                <td><input type="text" name="cakupan_wilayah[]" required class="form-control" placeholder=""/></td>            
                    <td class="items-align-center">
                    <button id="telsus_satelit_delete-`+ (number) + `" class="btn btn-icon btn-danger remove w-30px h-30px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                            </svg>
                        </span>
                    </button>
                    </td>
                </tr>`;
	
	
        return {
            // Public Functions
            init: function () {
                initForm();	
            }
        };
}();

//On document ready
KTUtil.onDOMContentLoaded(function() {
    form_telsus_fo.init();
    form_telsus_radio_konv.init();
    form_telsus_radio_trunking.init();
    form_telsus_radio_data.init();
    form_telsus_satelit.init();
});