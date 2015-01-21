(function(){

	// Document ready function
	$(function(){
		$('#profile-logo').on('click', function(){
			$('ul#navigation li').removeClass('menu-active');
			$('.content-section').removeClass('active');
			$('#home').addClass('active');
		});
		$('#profile-logo').trigger('click');
		$(document).on('click','#more-designs', function(e){
			e.preventDefault();
			$('ul#navigation li[data-section=work]').trigger('click');
		});
		$(document).on('click', 'ul#navigation li', function(){
			$('ul#navigation li').removeClass('menu-active');
			$(this).addClass('menu-active');
			$('.content-section').removeClass('active popout');
			$('#'+$(this).attr('data-section')).addClass('active popout');

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
	        
		});		
	});
})();