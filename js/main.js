
$('#image-modal').modal('hide');
$('section.contentsection').addClass('popin');
$('ul.main-menu li a').removeClass('active');
$('ul.main-menu li a#work').addClass('active');

$(document).ready(function() {

	setTimeout(function() {
      	$('.wrapper').css('display','block');
		$('#pre-loader').hide();   
		$('.sub-menu .web').trigger('click'); 
	}, 1000);	


	window.onscroll = function(){
		if(window.pageYOffset > 2) {
			$('.header-row').addClass('fixedheader');
		} else {
			$('.header-row').removeClass('fixedheader');
		}
	}
	$(document).on('click', 'a.info', function(e){
		e.preventDefault();
		var $this = $(e.currentTarget);
		$('a.info').removeClass('active-modal-content');
		$this.addClass('active-modal-content');
		$('#image-modal').modal('show');
		console.log($this.prev('.inner-content'));
		$('#image-modal').find('.modal-body #modal-body-content').html($this.prev().prev().clone());
		$('#image-modal').find('.modal-title').html($this.parent().find('h2').clone());

		var sectionWidth = $('section#web').width();		
		//console.log(sectionWidth);
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

	$(document).on('click', 'div#left-arrow', loadPrev);

	$(document).on('click', 'div#right-arrow', loadNext);

	$(document).on('click', 'div#modal-arrow-left',loadPrevElem );

	$(document).on('click', 'div#modal-arrow-right', loadNextElem);

	$(document).on('swiperight', 'div.wrapper', loadPrev);
	$(document).on('swipeleft', 'div.wrapper', loadNext);

	
	var slideCount = $('.inner-slider ul li').length;
	var slideWidth = $('.inner-slider ul li').width();
	var slideHeight = $('.inner-slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	//$('.inner-slider').css({ width: slideWidth, height: slideHeight });
	
	//$('.inner-slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    //$('.inner-slider ul li:last-child').prependTo('.inner-slider ul');

    function moveLeft($this) {
        $this.next().next().animate({
            left: + slideWidth
        }, 200, function () {
            $this.parents('.view').find('.inner-slider ul li:last-child').prependTo('.inner-slider ul');
            $this.parents('.view').find('.inner-slider ul').css('left', '');
        });
    };

    function moveRight($this) {
        $this.next().animate({
            left: - slideWidth
        }, 200, function () {
            $this.parents('.view').find('.inner-slider ul li:first-child').appendTo('.inner-slider ul');
            $this.parents('.view').find('.inner-slider ul').css('left', '');
        });
    };

    $('.left').click(function () {
        moveLeft($(this));
    });

    $('.right').click(function () {
        moveRight($(this));
    });

	function loadPrev(e){
		e.preventDefault();
		var prevElement = $('.sub-menu li a.sub-menu-active').parent().prev();
		if(prevElement){
			prevElement.find('a').trigger('click');
		}	
	}

	function loadNext(e){
		e.preventDefault();
		var nextElement = $('.sub-menu li a.sub-menu-active').parent().next();
		if(nextElement){
			nextElement.find('a').trigger('click');
		}
	}

	function loadPrevElem(e){
		e.preventDefault();
		var $currentElem = $('a.info.active-modal-content');
		if($currentElem.parents('.col-md-3').prev().length > 0) {
			$currentElem.parents('.col-md-3').prev().find('a.info').trigger('click');
		} else if($currentElem.parents('.row').prev()){
			console.log($currentElem.parents('.row').prev().find('div:last-child a.info'));
			$currentElem.parents('.row').prev().find('div:last-child a.info').trigger('click');
		}
	}

	function loadNextElem(e){
		e.preventDefault();
		var $currentElem = $('a.info.active-modal-content');
		if($currentElem.parents('.col-md-3').next().length > 0) {
			$currentElem.parents('.col-md-3').next().find('a.info').trigger('click');
		} else if($currentElem.parents('.row').next()){
			console.log($currentElem.parents('.row').next().find('div:first-child a.info').eq(0));
			$currentElem.parents('.row').next().find('div:first-child a.info').eq(0).trigger('click');
		}
	}
});

