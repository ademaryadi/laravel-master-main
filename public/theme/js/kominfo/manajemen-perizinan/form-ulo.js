
// Class definition
var FormUlo = function () {
	
	var submitButton
	
	//method
	var initForm = () => {		
		
	}				
	
    var handleCancelUlo = function () {
    	$("#cancel-ulo").on('click', function(e){
    		e.preventDefault();
    		$("#kt_modal_ulo").modal('hide')
    		KTTablePerizinanDalamProses.reload();
    	});
    }
    
    var handleSubmitUlo = function () {
    	$("#submit-ulo").on('click', function(e){
    		e.preventDefault();
    		$("#kt_modal_ulo").modal('hide')
    		console.log($("#perizinan-id-ulo").val());
    		KTTablePerizinanDalamProses.reload();    		
    	});
    }
    
	return {
		// Public Functions
		init: function () {			
			submitButton = document.querySelector('#submit-ulo');			
			cancelButton = document.querySelector('#cancel-ulo');
			initForm();
			handleCancelUlo();
			handleSubmitUlo();			
		}
	};
}();

//On document ready
KTUtil.onDOMContentLoaded(function() {
	FormUlo.init();
});