/* Author: 
	Byron Lutz
*/

/***** ALLOW PAGES TO MAKE PAGE UN-RESPONSIVE *****/
function unresponsivize() {
    $('meta[name="viewport"]').attr('content','width=980, initial-scale=0.1');
    $('link[href="/css/bootstrap-responsive.css"]').attr('disabled','true');
    $('link[href="/css/app-responsive.css"]').attr('disabled','true');
    $(window).unbind('resize');
}


/***** BACK TO TOP BUTTON *****/
$(document).ready(function() {
	$('#backtotop').click(function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "fast");
	});
	$('#backtotop').hide();
	$(window).scroll(function() {
		if($(window).width() > 767) {
			if($(window).scrollTop() >= 600)
				$('#backtotop').fadeIn();
			else
				$('#backtotop').fadeOut();
		}
	});
});

/***** ENABLE DONATE BUTTON *****/
$(document).ready(function() {
	$('.menu-donate a').click(function(e) {
		e.preventDefault();
		$.pressplus.f.pop('plans');
	});
});


/***** CONTROL SIDEBAR POPULAR STORIES TABS *****/
$(document).ready(function() {
	$('#popular-select').click(sidebarChange);
	$('#commented-select').click(sidebarChange);
	$('#side-info-commented').hide();
	
	function sidebarChange(eventObject) {
		eventObject.preventDefault();
		var switchTo = $(this).attr('id');
		$('#popular-select').removeClass('activetab');
		$('#commented-select').removeClass('activetab');
		$(this).addClass('activetab');
		
		$('#side-info-popular').hide();
		$('#side-info-commented').hide();
		
		
		$('#'+$(this).attr('data-target')).show();
	}
});


/***** TOGGLE DROPDOWNS *****/
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();
});

/***** GET RID OF HARD IMAGE SIZES *****/
$(document).ready(function() {
	$('.wp-post-image').removeAttr('height').removeAttr('width');
});


/****** POPULAR POSTS WIDGET *******/
/* Inefficient; replace this later */

$(document).ready(function() {
	// Tabs control
	$('.togglemenu').click(popularPosts);
	
	function popularPosts(event) {
		event.preventDefault();
		var changeTo = event.currentTarget.id.substr(11);
		$('.togglemenu-current').removeClass('togglemenu-current');
		$('#togglemenu-'+changeTo).addClass('togglemenu-current');
		
		$('.popularlist').hide();
		$('#popularlist-'+changeTo).show();
	};
	
	// Take out the "comment(s)" in the display. WE NEED A BETTER PLUGIN o.o
	var commentNum=/^\d+/g;
	$('.wpp-comments').each(function() {
		$(this).text( $(this).text().match(commentNum) );
		$(this).addClass('popularlist-comments');
	});
});



/****** ROTATOR *******/

$(document).ready(function() {
	var rotator = $('#topcontent-rotator');
	if(rotator.length > 0) {
		var rotator_index = 0;
		var rotator_stories = 4;
		
		function changeRotator(eventData) {
			eventData.preventDefault();
			var forward = eventData.data.forward; // direction of the rotator
			var changeToStory = eventData.data.changeToStory;
			
			if (!changeToStory && ((forward && (rotator_index+1 >= rotator_stories)) || (!forward && rotator_index == 0))) {
				return;
			}
			(forward) ? rotator_index++ : rotator_index--;
			
			if(changeToStory)
				rotator_index = changeToStory-1;
			
			// Change slug
			$('.rotate-current').removeClass('rotate-current');
			$('#rotate-label-'+(rotator_index+1)).addClass('rotate-current');
			
			// Set button enabled/disabled state
			$('.topcontent-rotator-control-back.disabled').removeClass('disabled'); // Set all enabled
			$('.topcontent-rotator-control-forward.disabled').removeClass('disabled'); // Set all enabled
			if(rotator_index == 0)
				$('.topcontent-rotator-control-back').addClass('disabled');
			else if(rotator_index == (rotator_stories -1))
				$('.topcontent-rotator-control-forward').addClass('disabled');						
			
			// Change story
			$('.topcontent-rotator-content').hide();
			$('#topcontent-rotator-content-'+(rotator_index+1)).show();
		}
		
		// Bind buttons
		$('.topcontent-rotator-control-back').on("click", {    forward: false }, changeRotator);
		$('.topcontent-rotator-control-forward').on("click", { forward: true }, changeRotator);
		// Bind top links
		$('#rotate-label-1 a').on("click", { changeToStory: 1 }, changeRotator).click();
		$('#rotate-label-2 a').on("click", { changeToStory: 2 }, changeRotator);
		$('#rotate-label-3 a').on("click", { changeToStory: 3 }, changeRotator);
		$('#rotate-label-4 a').on("click", { changeToStory: 4 }, changeRotator);
	}
});




/****** RESPONSIVE STYLES *******/

$(document).ready(function() {
	// Get the ad-loading code from the page
	var ads = [];
	ads['banner_large'] = $('#ad-banner-top').text();
	ads['banner_small'] = $('#ad-banner-small').text();
	ads['square_1'] = $('#side-ad').text();
	ads['square_2'] = $('#side-ad-low1').text();
	ads['square_3'] = $('#side-ad-low2').text();
	ads['house'] = $('#ad-house').text();
	ads['tower'] = $('#ad-tower').text();


	function responsive()
	{
		var windowWidth = $(window).innerWidth();
		// Firefox uses a different width (includes scrollbar) for media queries
/*
		if($.browser['mozilla'] == true)
		{
			windowWidth = window.innerWidth;
		}
*/
	
		// All desktop sizes
		if(window.matchMedia("(min-width: 980px)").matches) {
			$('#ad-banner-top').html(ads['banner_large']);
			$('#ad-banner-small').html(ads['banner_small']);
			$('#side-ad').html(ads['square_1']);
			$('#side-ad-low1').html(ads['square_2']);
			$('#side-ad-low2').html(ads['square_3']);
			$('#ad-house').html(ads['house']);
			$('#banner-bottom').html(ads['banner_large']);
			$('#ad-tower').html(ads['tower']);
		}
		// All mobile sizes
		if(window.matchMedia("(max-width: 979px)").matches) {
			$('#ad-banner-top').html('');
			$('#ad-banner-small').html('');
			$('#side-ad').html('');
			$('#side-ad-low1').html('');
			$('#side-ad-low2').html('');
			$('#ad-house').html('');
			$('#ad-tower').html('');
		}
	
	
		// Large screen
    // if(window.matchMedia("(min-width: 1200px)").matches) {
    //  ;
    // }    
		
		// Small screen (tablet)
		if(window.matchMedia("(max-width: 979px) and (min-width: 768px)").matches) {
			// ad code
			$('#ad-banner-large-tablet').html(ads['banner_large']);
			if($('#banner-bottom').html() == '')
				$('#banner-bottom').html(ads['banner_large']);
			if($('#ad-tower').html() == '')
				$('#ad-tower').html(ads['tower']);
		
			$('#nameplate-date').removeClass('offset1').removeClass('span2').addClass('span3');
			$('#toplinks-info').removeClass('span6').addClass('span8');
			$('#toplinks-socialmedia').removeClass('offset3').addClass('offset1');
		}
		
		// Phone (Horizontal & Vertical) 
		if(window.matchMedia("(min-width: 767px)").matches) {
			// ad code
			$('#banner-bottom').html('');
			
			$('#nameplate-image img').attr('src','/img/nameplate-mobile.png');
			$('.nameplate-date-weather').insertBefore('#nameplate-date');
			$('#multimedia-rotator').insertAfter('#paidadvertising');
		}
	}
	responsive();
	
	
	// Now trigger this function on a window resize
	var resizeTimer;
	$(window).resize(function() {
		clearTimeout(resizeTimer);
		resizeTimer = window.setTimeout(function() {responsive();}, 200);
	});
	
	/*********** PHOTO BLOG *************/
	
	var $sidebar	= $(".sidebar-menu"); 
	if (typeof $sidebar[0] != 'undefined') {
	
		$(window).scroll(function() {
			//alert(botBound);
			sidebarHeight	= $sidebar.height();
			var scrollNow = $(this).scrollTop(),
			topBound	= $("#sidebar-reference").offset().top + $("#sidebar-reference").height(),
			botBound	= $("#banner-bottom").offset().top;
		
			if(scrollNow > topBound && scrollNow < botBound - sidebarHeight - 50) {
				$sidebar.css({'position':'fixed','top':'0','bottom':'auto','width':'250px'});
			}
			else if(scrollNow > topBound && scrollNow > botBound - sidebarHeight - 50){
				$sidebar.css({'position':'absolute','top': botBound - sidebarHeight - 50});
			}
			else {
				$sidebar.css({'position':'relative','marginTop': 'topBound' });
			}
		});
	}
	$(window).trigger("scroll");

	$(document).ready(function(){
		gallerywidth = $('.span9').width();
		galleryheight = gallerywidth * 0.7;
	 	$("#gallery").galleryView({
		    enable_overlays: true,
		    panel_width: gallerywidth,         
		    panel_height: galleryheight, 
		    panel_scale: 'fit',
		    show_filmstrip_nav: false,
	 	});
	});
});
