
$('#image-modal').modal('hide');
$('section.contentsection').addClass('popin');
$(document).ready(function() {

	setTimeout(function() {
      	$('.wrapper').css('display','block');
		$('#pre-loader').hide();   
		$('.sub-menu .print').trigger('click'); 
	}, 1000);	
	$("#profile-name").fitText(1.2);

	$(document).on('click', 'a.info', function(e){
		e.preventDefault();
		var $this = $(e.currentTarget);
		$('#image-modal').modal('show');
		$('#image-modal').find('.modal-body').html($this.parent().prev().clone());
		$('#image-modal').find('.modal-title').html($this.prev().prev().clone());

		var sectionWidth = $('section#web').width();		
		console.log(sectionWidth);
	});


	$(document).on('click','.sub-menu .print', function(e){
		e.preventDefault();
		$('section.contentsection').addClass('popin');
		$('.sub-menu li a').removeClass('sub-menu-active');
		$(this).addClass('sub-menu-active');
		$('section#print').removeClass('popin');
	});
	$(document).on('click','.sub-menu .web', function(e){
		e.preventDefault();
		$('section.contentsection').addClass('popin');
		$('.sub-menu li a').removeClass('sub-menu-active');
		$(this).addClass('sub-menu-active');
		$('section#web').removeClass('popin');
	});
	$(document).on('click','.sub-menu .video', function(e){
		e.preventDefault();
		$('section.contentsection').addClass('popin');
		$('.sub-menu li a').removeClass('sub-menu-active');
		$(this).addClass('sub-menu-active');
		$('section#video').removeClass('popin');
	});
	$(document).on('click','.sub-menu .all', function(e){
		e.preventDefault();
		$('section.contentsection').removeClass('popin');
		$('.sub-menu li a').removeClass('sub-menu-active');
		$(this).addClass('sub-menu-active');
	});
});

