$(document).ready(function(){
	
	$('.radio-button').click(function(){
		if ($('.radio-private').is(":checked")) {
			$('.select-private').css('display', 'block');
			$('.select-company').css('display','none');
			$('.order-companye').css('display', 'none');
			$('.offert-company').css('display', 'none');
		} 
		else if ($('.radio-company').is(":checked")) {
			$('.select-private').css('display', 'none');
			$('.select-company').css('display','block');
			$('.order-private').css('display', 'none');
			$('.offert-private').css('display', 'none');
		}


		$('.select-private').on('change', function() {       
	        if($(this).val() == 'Beställning') {
	        	$('.order-private').css('display', 'block');
				$('.offert-private').css('display', 'none');
	        }
	        else if ($(this).val() == 'Offertförfrågan') {
	            $('.offert-private').css('display', 'block');
				$('.order-private').css('display', 'none');
	        }
	    });

	    $('.select-company').on('change', function() {       
	        if($(this).val() == 'Beställning') {
	        	$('.order-company').css('display', 'block');
				$('.offert-company').css('display', 'none');
	        }
	        else if ($(this).val() == 'Offertförfrågan') {
	            $('.offert-company').css('display', 'block');
				$('.order-company').css('display', 'none');
	        }
	    });
	});

	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	});
});

/*
STEG 1: Privat eller företag
STEG 2: Offert eller beställning för privat eller företag
STEG 3: Formulär offert eller beställning för privat eller företag
*/