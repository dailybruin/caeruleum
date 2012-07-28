/* Author: Byron Lutz 

*/



/****** RESPONSIVE STYLES *******/

// Large screen
if($(window).width() >= 1200) {
	$('#topcontent-rotator').removeClass('span8').addClass('span7');
	$('#topcontent-stories').removeClass('span4').addClass('span5');
}

// Small screen
if($(window).width() <= 979 && $(window).width() >= 768) {
	$('#nameplate-date').removeClass('offset1').removeClass('span2').addClass('span3');
	$('#toplinks-info').removeClass('span6').addClass('span8');
	$('#toplinks-socialmedia').removeClass('offset3').addClass('offset1');
}

// Phone (Horizontal & Vertical) 
if($(window).width() <= 767) {
	$('#nameplate-image img').attr('src','img/nameplate-mobile.png');
	$('.nameplate-date-weather').insertBefore('#nameplate-date');
	$('#multimedia-rotator').insertAfter('#paidadvertising');
}

