(function(){

	// Document ready function
	$(function(){
		setTimeout(function() {
			$('#module-container').css({'opacity' : 1});
			$('#pre-loader').hide();   
			InitializeApp();
		}, 1000);	

		function InitializeApp() {

			$('.bxslider').bxSlider({ 
				mode: 'horizontal',
				nextSelector: '#slider-next',
				prevSelector: '#slider-prev',
				nextText: '<i class="glyphicon glyphicon-chevron-right"></i>',
	  			prevText: '<i class="glyphicon glyphicon-chevron-left"></i>'
			});

			 $('#parentHorizontalTab').easyResponsiveTabs({
	            type: 'default', //Types: default, vertical, accordion
	            width: 'auto', //auto or any width like 600px
	            fit: true, // 100% fit in a container
	            closed: 'accordion', // Start closed if in accordion view
	            tabidentify: 'hor_1', // The tab groups identifier
	            activate: function (event) { // Callback function if tab is switched
	                var $tab = $(this);
	                var $info = $('#nested-tabInfo');
	                var $name = $('span', $info);
	    
	                $name.text($tab.text());
	    
	                $info.show();
	            },
	            animation: 'fade',
	            activetab_bg: '#ac2b22', // background color for active tabs in this group
        		active_border_color: '#ac2b22 !important', // border color for active tabs heads in this group
        		active_content_border_color: '#ac2b22' // border color for active tabs contect in this group so that it matches the tab head border
	        });

			$('#profile-logo, .slideTop img').click(function() {
			        $('#module-container').animate({
			          scrollTop: 0
			        }, 1000);			    
			  });

			 $('.-accordion').asAccordion({
                 namespace: '-accordion',
                // accordion theme. WIP
                skin: null,

                // breakpoint for mobile devices. WIP
                mobile_breakpoint: 768,

                // initial index panel
                initialIndex: 0,

                // CSS3 easing effects.
                easing: 'ease-in-out',

                // animation speed.
                speed: 500,

                // vertical or horizontal
                direction: 'horizontal',

                // jQuery mouse events. click, mousehover, etc.
                event: 'click'
              });
			
			$(document).on('click','#say-hello-top, #say-hello-bottom, #hireme', function(e){
				e.preventDefault();
				$('#contact-modal').modal('show');
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

	        
				/* initialize shuffle plugin */
	        var $grid = $('#grid');
	     	
	        // $grid.shuffle({
	        //     itemSelector: '.item', // the selector for the items in the grid
	        //     sequentialFadeDelay: 250,
	        //     speed: 450
	        // });

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
	        	$('#image-modal #image-modal-label').html($(this).find('.modal-tt').html());
	        	$(".modal .modal-slider").PikaChoose({
	        		autoPlay: false, 
	        		showTooltips:false,
	        		IESafe:true
	        	});
	        });

	        //Check to see if the window is top if not then display button
			$('#module-container').scroll(function(){
				var scrollTop = $(this).scrollTop();

			    $('.scrollable').each(function() {

			        var topDistance = $(this).offset().top;
			        if ( (topDistance - 100) < 0 ) {
			            $('ul#navigation li').removeClass('menu-active');
	            		$('ul#navigation li[data-section='+$(this).attr("id")+']').addClass('menu-active');
			        }
			    });
				if ($(this).scrollTop() > 100) {
					$('.slideTop img').fadeIn();
				} else {
					$('.slideTop img').fadeOut();
				}
			});

			$('#contact-ajax-form').ajaxForm({
				url: 'email.php',
				type: 'POST',
				success: function(data){
					console.log(data);
					$.notify({
						// options
						message: 'Thank you for contacting me, I will get back to you as soon as I can spare sometime from the awesome work I do !',
						
					},{
						// settings
						position: null,
						delay: 5000,
						type: "success",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "center"
						},
						animate: {
							enter: 'animated bounceIn',
							exit: 'animated bounceOut'
						}
					});
					
				},
				error: function(){
					$.notify("Oops something went wrong please send a direct email to kfinlayson9@gmail.com");
				}
			});
    	}
	});
})();