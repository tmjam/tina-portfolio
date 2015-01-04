
$('#image-modal').modal('hide');
$(document).ready(function() {

	setTimeout(function() {
      	$('.wrapper').css('display','block');
		$('#pre-loader').hide();    
	}, 1000);	

	$(document).on('click', 'a.info', function(e){
		e.preventDefault();
		var $this = $(e.currentTarget);
		$('#image-modal').modal('show');
		$('#image-modal').find('.modal-body').html($this.parent().prev().clone());
		$('#image-modal').find('.modal-title').html($this.prev().prev().clone());

		var sectionWidth = $('section#current').width();
		//$('section#current').hide('slow');
		console.log(sectionWidth);
	});
});

