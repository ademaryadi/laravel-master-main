"use strict";

// Class definition
var KTTablePerizinanDalamProses = function () {
    // Shared variables
    var table;
    var dt;
    var currentId;

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_permohonan_perizinan").DataTable({
        	serverFiltering: true,
            processing: true,
            serverSide: true,
            stateSave: true,
            bDestroy: true,
            ajax: {
                url: "/perizinan/dalam-proses",
                dataType: "json",
                contentType: "application/x-www-form-urlencoded"
            },
            columns: [
            	{ data: 'id'},
                { data: 'jenis_izin' },
                { data: 'tanggal_kib', ordering: true},
                { data: 'kbli' },
                { data: 'jenis_penyelenggaraan' },
                { data: 'sla' },
                { data: 'status', ordering:false },
                { data: null },
            ],
            bSort: false,
            columnDefs: [
            	{ orderable: false, targets: '_all' },
            	{targets: [0], visible: false},
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        if(data.status=="KBLI_VERIFIED" || data.status=="PERSYARATAN_VERIFIED" || data.status=="PENOMORAN_VERIFIED" || data.status=="ULO_VERIFIED"){
                            if(data.penomoran==1){
                                return `
                                    <div class="btn-group mr-2 group-action" role="group">
                                    <button class="btn btn-icon btn-danger w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-warning w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                                                <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                                                <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-secondary w-30px h-30px me-3" data-kt-docs-table-filter="next-step" 
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_next_step">
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                <path d="M12 22C11.4 22 11 21.6 11 21V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V21C13 21.6 12.6 22 12 22Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                `;
                            }else{
                                return `
                                    <div class="btn-group mr-2 group-action" role="group">
                                    <button class="btn btn-icon btn-danger w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-warning w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                                                <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                                                <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-secondary w-30px h-30px me-3" data-kt-docs-table-filter="next-step" 
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_next_step2">
                                        <span class="svg-icon svg-icon-light svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 13H3C2.4 13 2 12.6 2 12C2 11.4 2.4 11 3 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13Z" fill="black"/>
                                                <path d="M12 22C11.4 22 11 21.6 11 21V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V21C13 21.6 12.6 22 12 22Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                `;
                            }
                            
                        }else{
                            return '';
                        }
                        
                    },
                },
            ]
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            initToggleToolbar();
            toggleToolbars();
            handleDeleteRows();
            KTMenu.createInstances();
        });
    }    

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons
        const nextStepButtons = document.querySelectorAll('[data-kt-docs-table-filter="next-step"]');
        

        nextStepButtons.forEach(next => {
            // Delete button on click
        	next.addEventListener('click', function (e) {
                e.preventDefault();                
//                $("#perizinan-id").val(next.getAttribute("data-id"));

                var currentRow = $(this).closest("tr");

                var data = $('#kt_datatable_permohonan_perizinan').DataTable().row(currentRow).data();
                currentId = data.id;
                $.ajax({
                    url: "/application/on-process/" + data.id + "/next",
                    type: "get",
                    headers: {"X-CSRF-TOKEN": $("meta[name='_csrf']").attr("content")},                    
                    success: function (data) {
                        if(data == "penomoran") {
                        	// enablePenomoran();
                        	// disableUlo();
                        } else if(data=="ulo") {
                        	// enablePenomoran();
                        	// enableUlo();
                        } else {
                        	// enablePersyaratan();
                        	// disablePenomoran();
                        	// disableUlo();
                        }
                    },
                    error: function(error) {
                        // enablePersyaratan();
                        // enablePenomoran();
                        // enableUlo();
                    }
                });
            })
        });
    }
    
    var enablePenomoran = () => {
    	$("#penomoran-label").removeClass("btn-icon-info").addClass("btn-icon-success");
    	$("#penomoran-label").removeClass("btn-outline-info").addClass("btn-outline-success");
    	$("#penomoran-label").removeClass("btn-active-light-info").addClass("btn-active-light-success");
    	$("#penomoran-text").removeClass("text-info").addClass("text-success");
    	$("#next_form_penomoran").removeAttr("disabled");
    }
    
    var disablePenomoran = () => {
    	$("#penomoran-label").removeClass("btn-icon-success").addClass("btn-icon-info");
    	$("#penomoran-label").removeClass("btn-outline-success").addClass("btn-outline-info");
    	$("#penomoran-label").removeClass("btn-active-light-success").addClass("btn-active-light-info");
    	$("#penomoran-text").removeClass("text-success").addClass("text-info");
    	$("#next_form_penomoran").attr("disabled", "disabled");
    }
    
    var enableUlo = () => {
    	$("#ulo-label").removeClass("btn-icon-info").addClass("btn-icon-success");
    	$("#ulo-label").removeClass("btn-outline-info").addClass("btn-outline-success");
    	$("#ulo-label").removeClass("btn-active-light-info").addClass("btn-active-light-success");
    	$("#ulo-text").removeClass("text-info").addClass("text-success");
    	$("#next_form_ulo").removeAttr("disabled");
    }
    
    var disableUlo = () => {
    	$("#ulo-label").removeClass("btn-icon-success").addClass("btn-icon-info");
    	$("#ulo-label").removeClass("btn-outline-success").addClass("btn-outline-info");
    	$("#ulo-label").removeClass("btn-active-light-success").addClass("btn-active-light-info");
    	$("#ulo-text").removeClass("text-success").addClass("text-info");
    	$("#next_form_ulo").attr("disabled", "disabled");
    }
    
    var enablePersyaratan = () => {
    	$("#ulo-label").removeClass("btn-icon-info").addClass("btn-icon-success");
    	$("#ulo-label").removeClass("btn-outline-info").addClass("btn-outline-success");
    	$("#ulo-label").removeClass("btn-active-light-info").addClass("btn-active-light-success");
    	$("#ulo-text").removeClass("text-info").addClass("text-success");
    	$("#next_form_persyaratan").removeAttr("disabled");
    }

    // Reset Filter
    var handleResetForm = () => {        
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {        
    }

    // Toggle toolbars
    var toggleToolbars = function () {        
    }
    
    //Init Action
    var initNextStep = function () {
    	$("#submit-next-step").on('click', function(e){
    		e.preventDefault();
    		$("#kt_modal_next_step").modal('hide');
    		let nextFormSelected = $('input[name="next_form"]:checked').val();
    		let id = currentId;
    		if (nextFormSelected=='ulo') {
    			$("#kt_modal_ulo").modal('show');
    			$("#perizinan-id-ulo").val(id);
    			console.log(id);
    		} else{
                if(nextFormSelected=="penomoran"){
                    window.location.href= window.location.origin + "/" + "form-penomoran" + "/" + id;
                }else{
                    window.location.href= window.location.origin + "/" + nextFormSelected + "/" + id;
                }
    		}    		
    	});
    }    
       
    // Public methods
    return {
        init: function () {
            initDatatable();            
            initToggleToolbar();            
            handleDeleteRows();
            handleResetForm();
            initNextStep();
        },
        reload: function () {
        	dt.draw();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTTablePerizinanDalamProses.init();
});