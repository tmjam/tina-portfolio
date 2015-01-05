
$('#image-modal').modal('hide');
$('section.contentsection').addClass('popin');
$('ul.main-menu li a').removeClass('active');
$('ul.main-menu li a#work').addClass('active');

$(document).ready(function() {

	setTimeout(function() {
      	$('.wrapper').css('display','block');
		$('#pre-loader').hide();   
		$('.sub-menu .print').trigger('click'); 
	}, 1000);	

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

	$(document).on('click', 'div#left-arrow', function(e){
		e.preventDefault();
		var prevElement = $('.sub-menu li a.sub-menu-active').parent().prev();
		if(prevElement){
			prevElement.find('a').trigger('click');
		}	
	});

	$(document).on('click', 'div#right-arrow', function(e){
		e.preventDefault();
		var nextElement = $('.sub-menu li a.sub-menu-active').parent().next();
		if(nextElement){
			nextElement.find('a').trigger('click');
		}
	});
});

