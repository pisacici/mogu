$('[data-toggle="collapse"]').click(function() {
	if($(this).attr('aria-expanded')=='true'){
		$(this).find('.arrow').html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
	}
	else{
		$(this).find('.arrow').html('<i class="fa fa-angle-down" aria-hidden="true"></i>');
	}
});