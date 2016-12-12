$(document).ready(function(){
	

	if ($('.radio-private')).is(":checked") {
		$('.select-private').css('display', 'block');
		$('.select-company').css('display','none');
	} 
	else if ($('.radio-company')).is(":checked") {
		$('.select-private').css('display', 'none');
		$('.select-company').css('display','block');
	}


	if ($('.select-private').val() == 'Beställning') {
		$('.order-private').css('display', 'block');
		$('.offert-private').css('display', 'none');
	} 
	else if ($('.select-private').val() == 'Offertförfrågan') {
		$('.offert-private').css('display', 'block');
		$('.order-private').css('display', 'none');
	}

	if ($('.select-company').val() == 'Beställning') {
		$('.order-company').css('display', 'block');
		$('.offert-company').css('display', 'none');
	} 
	else if ($('.select-company').val() == 'Offertförfrågan') {
		$('.offert-company').css('display', 'block');
		$('.order-company').css('display', 'none');
	}

});

/*
STEG 1: Privat eller företag
STEG 2: Offert eller beställning för privat eller företag
STEG 3: Formulär offert eller beställning för privat eller företag
*/