/* Author: 
	Byron Lutz
*/


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

/***** ADJUST SIDEBAR HEIGHT *****/
$(document).ready(function() {
	if($(window).width() >= 980) {
		var heightOfArticle = Math.max($('#sidebar').height(), $('article.post').height());
		if($('#post-listing').height())
			heightOfArticle = Math.max($('#post-listing').height()-10, heightOfArticle);
		$('#sidebar').attr('style','height:'+heightOfArticle+'px');
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
		$('#rotate-label-1 a').on("click", { changeToStory: 1 }, changeRotator);
		$('#rotate-label-2 a').on("click", { changeToStory: 2 }, changeRotator);
		$('#rotate-label-3 a').on("click", { changeToStory: 3 }, changeRotator);
		$('#rotate-label-4 a').on("click", { changeToStory: 4 }, changeRotator);
	}
});




/****** RESPONSIVE STYLES *******/

$(document).ready(function() {
	// Large screen
/*
	if($(window).width() >= 1200) {
	}
*/
	
	// Small screen
	if($(window).width() <= 979 && $(window).width() >= 768) {
		$('#nameplate-date').removeClass('offset1').removeClass('span2').addClass('span3');
		$('#toplinks-info').removeClass('span6').addClass('span8');
		$('#toplinks-socialmedia').removeClass('offset3').addClass('offset1');
	}
	
	// Phone (Horizontal & Vertical) 
	if($(window).width() <= 767) {
		$('#nameplate-image img').attr('src','/img/nameplate-mobile.png');
		$('.nameplate-date-weather').insertBefore('#nameplate-date');
		$('#multimedia-rotator').insertAfter('#paidadvertising');
	}
});