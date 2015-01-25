(function(){

	// Document ready function
	$(function(){
		//$('#module-container').animatescroll();
		$('.bxslider').bxSlider({ 
			mode: 'horizontal',
			nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			nextText: '<i class="glyphicon glyphicon-chevron-right"></i>',
  			prevText: '<i class="glyphicon glyphicon-chevron-left"></i>'
		});
	

		$('#profile-logo').on('click', function(){
			$('ul#navigation li').removeClass('menu-active');
			$('.content-section').removeClass('active');
			$('#about').addClass('active');
		});
		$('#profile-logo').trigger('click');
		$(document).on('click','#more-designs', function(e){
			e.preventDefault();
			$('ul#navigation li[data-section=work]').trigger('click');
		});
		$(document).on('click', 'ul#navigation li', function(){			
			$('#'+$(this).attr('data-section')).animatescroll(
				{
					onScrollStart:function(){},
					onScrollEnd:function(){},
					easing:'easeInOutBack',
					padding: 20,
					element:'#module-container',
					scrollSpeed:2000
				}
			);
			$('ul#navigation li').removeClass('menu-active');
			$(this).addClass('menu-active');
			$('.content-section').removeClass('active popout');
			$('#'+$(this).attr('data-section')).addClass('active');			
		});		

		$('.scrollable').scrollable({
		   direction: 'vertical',
		   my: "bottom",
		   offset: { top: '-20%' },
           in: function ( e, ui ) {
           		console.log(e, ui.element[0].id);
           		$('ul#navigation li').removeClass('menu-active');
           		$('ul#navigation li[data-section='+ui.element[0].id+']').addClass('menu-active');
           }
        });
		/* initialize shuffle plugin */
        var $grid = $('#grid');
     	
        $grid.shuffle({
            itemSelector: '.item', // the selector for the items in the grid
            sequentialFadeDelay: 250,
            speed: 450
        });

        $(document).on('click','#filter a', function (e) {
            e.preventDefault();	                 
            // set active class
            $('#filter a').removeClass('active');
            $(this).addClass('active');
                 
            // get group name from clicked item
            var groupName = $(this).attr('data-group');
                 
            // reshuffle grid
            $grid.shuffle('shuffle', groupName );
        });
        
        $(document).on('click', '.item', function(){
        	$('#image-modal').modal();
        	var $modalDetail = $(this).find('.modal-details');
        	$('#image-modal #modal-body-content').html($modalDetail.html());

        	$('.modal .modal-bxslider').bxSlider({ 
				mode: 'horizontal',
				nextSelector: '#modal-arrow-right',
				prevSelector: '#modal-arrow-left',
				nextText: '<i class="glyphicon glyphicon-chevron-right"></i>',
	  			prevText: '<i class="glyphicon glyphicon-chevron-left"></i>'
			});
        });
	});
})();