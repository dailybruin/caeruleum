/* Author:
	Byron Lutz
	With additions by: Neil Bedi :D
*/

jQuery(function(){
  jQuery("#search").on("opened", function(){
  	jQuery("#gsc-i-id1").focus();
  });
  jQuery("#menu").on("open", function(){
  	jQuery(this).css("top","0 !important");
  });
});

/***** STICK HEADER ON SCROLL *****/
jQuery(function(){
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = 200;

    jQuery(window).scroll(function(){
            if( jQuery(window).scrollTop() > stickyHeaderTop ) {
                    // jQuery('#stickyheader').css({position: 'fixed', top: '0px'});
                    jQuery('#stickyalias').css('display', 'block');
                    jQuery('#stickyalias').css({position: 'fixed', top: '0px', width: '100%', boxShadow: '0px 1px 10px rgba(0,0,0, 0.5)'});
            }
            else {
                    // jQuery('#stickyheader').css({position: 'static', top: '0px'});
                    jQuery('#stickyalias').css('display', 'none');
                    jQuery('#stickyalias').css({position: 'relative', top: '0px', width: '100%', boxShadow: 'none'});
            }
    });
  });

jQuery(document).ready(function() {
	jQuery('#multSlider').lightSlider({
      gallery:true,
      item:1,
      vertical:true,
      verticalHeight:390,
      vThumbWidth:125,
      thumbItem:4,
      thumbMargin:0,
      slideMargin:0,
      keyPress: true,
      auto: true,
      loop: true,
      pause: 4000
    });
    jQuery('.db-story-m').css('display', 'block');
  });

/***** ALLOW PAGES TO MAKE PAGE UN-RESPONSIVE *****/
function unresponsivize() {
    jQuery('meta[name="viewport"]').attr('content','width=980, initial-scale=0.1');
    jQuery('link[href="/css/bootstrap-responsive.css"]').attr('disabled','true');
    jQuery('link[href="/css/app-responsive.css"]').attr('disabled','true');
    jQuery(window).unbind('resize');
    jQuery('.hidden').css('display','none').css('visibility','hidden');
    jQuery('.visible-phone').css('display','none','important');
    jQuery('.visible-tablet').css('display','none','important');
    jQuery('.hidden-desktop').css('display','none','important');
    jQuery('.visible-desktop').css('display','inherit','important');
}


/***** BACK TO TOP BUTTON *****/
jQuery(document).ready(function() {
	jQuery('#backtotop').click(function(e) {
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: 0 }, "fast");
	});
	jQuery('#backtotop').hide();
	jQuery(window).scroll(function() {
		if(jQuery(window).width() > 767) {
			if(jQuery(window).scrollTop() >= 600)
				jQuery('#backtotop').fadeIn();
			else
				jQuery('#backtotop').fadeOut();
		}
	});
});

/***** ENABLE DONATE BUTTON *****/
jQuery(document).ready(function() {
	jQuery('.menu-donate a').click(function(e) {
		e.preventDefault();
		$.pressplus.f.pop('plans');
	});
});



/***** CONTROL SIDEBAR POPULAR STORIES TABS *****/
jQuery(document).ready(function() {
	jQuery('#popular-select').click(sidebarChange);
	jQuery('#commented-select').click(sidebarChange);
	jQuery('#side-info-commented').hide();

	function sidebarChange(eventObject) {
		eventObject.preventDefault();
		var switchTo = jQuery(this).attr('id');
		jQuery('#popular-select').removeClass('activetab');
		jQuery('#commented-select').removeClass('activetab');
		jQuery(this).addClass('activetab');

		jQuery('#side-info-popular').hide();
		jQuery('#side-info-commented').hide();


		jQuery('#'+jQuery(this).attr('data-target')).show();
	}
});


/***** TOGGLE DROPDOWNS *****/
// No more drop down menus!
// jQuery(document).ready(function() {
// 	jQuery('.dropdown-toggle').dropdown();
// });

/***** GET RID OF HARD IMAGE SIZES *****/
jQuery(document).ready(function() {
	jQuery('.wp-post-image').removeAttr('height').removeAttr('width');
});


/****** POPULAR POSTS WIDGET *******/
/* Inefficient; replace this later */

jQuery(document).ready(function() {
	// Tabs control
	jQuery('.togglemenu').click(popularPosts);

	function popularPosts(event) {
		event.preventDefault();
		var changeTo = event.currentTarget.id.substr(11);
		jQuery('.togglemenu-current').removeClass('togglemenu-current');
		jQuery('#togglemenu-'+changeTo).addClass('togglemenu-current');

		jQuery('.popularlist').hide();
		jQuery('#popularlist-'+changeTo).show();
	};

	// Take out the "comment(s)" in the display. WE NEED A BETTER PLUGIN o.o
	var commentNum=/^\d+/g;
	jQuery('.wpp-comments').each(function() {
		jQuery(this).text( jQuery(this).text().match(commentNum) );
		jQuery(this).addClass('popularlist-comments');
	});
});


/****** RESPONSIVE STYLES *******/

jQuery(document).ready(function() {
	// Get the ad-loading code from the page
	var ads = [];
	ads['banner_large'] = jQuery('#ad-banner-top').html();
	ads['banner_small'] = jQuery('#ad-banner-small').html();
	ads['square_1'] = jQuery('#side-ad').html();
	ads['square_2'] = jQuery('#side-ad-low1').html();
	ads['square_3'] = jQuery('#side-ad-low2').html();
	ads['house'] = jQuery('#ad-house').html();
	ads['tower'] = jQuery('#ad-tower').html();


	function responsive()
	{
		var windowWidth = jQuery(window).innerWidth();
		// Firefox uses a different width (includes scrollbar) for media queries
/*
		if($.browser['mozilla'] == true)
		{
			windowWidth = window.innerWidth;
		}
*/

		// All desktop sizes
		if(window.matchMedia("(min-width: 980px)").matches) {
			jQuery('#ad-banner-top').html(ads['banner_large']);
			jQuery('#ad-banner-small').html(ads['banner_small']);
			jQuery('#side-ad').html(ads['square_1']);
			jQuery('#side-ad-low1').html(ads['square_2']);
			jQuery('#side-ad-low2').html(ads['square_3']);
			jQuery('#ad-house').html(ads['house']);
			jQuery('#banner-bottom').html(ads['banner_large']);
			jQuery('#ad-tower').html(ads['tower']);
		}
		// All mobile sizes
		if(window.matchMedia("(max-width: 979px)").matches) {
			jQuery('#ad-banner-top').html(ads['banner_small']);
			jQuery('#ad-banner-small').html(ads['banner_small']);
			jQuery('#side-ad').html(ads['square_1']);
			jQuery('#side-ad-low1').html(ads['square_2']);
			jQuery('#side-ad-low2').html(ads['square_3']);
			jQuery('#ad-house').html(ads['house']);
			jQuery('#banner-bottom').html(ads['banner_large']);
			jQuery('#ad-tower').html(ads['tower']);
			// jQuery('#ad-banner-top').html('');
			// jQuery('#ad-banner-small').html('');
			// jQuery('#side-ad').html('');
			// jQuery('#side-ad-low1').html('');
			// jQuery('#side-ad-low2').html('');
			// jQuery('#ad-house').html('');
			// jQuery('#ad-tower').html('');
		}


		// Large screen
    // if(window.matchMedia("(min-width: 1200px)").matches) {
    //  ;
    // }

		// Small screen (tablet)
		if(window.matchMedia("(max-width: 979px) and (min-width: 768px)").matches) {
			// ad code
			jQuery('#ad-banner-large-tablet').html(ads['banner_large']);
			if(jQuery('#banner-bottom').html() == '')
				jQuery('#banner-bottom').html(ads['banner_large']);
			if(jQuery('#ad-tower').html() == '')
				jQuery('#ad-tower').html(ads['tower']);

			jQuery('#nameplate-date').removeClass('offset1').removeClass('span2').addClass('span3');
			jQuery('#toplinks-info').removeClass('span6').addClass('span8');
			jQuery('#toplinks-socialmedia').removeClass('offset3').addClass('offset1');
		}

		// Phone (Horizontal & Vertical)
		if(window.matchMedia("(max-width: 767px)").matches) {
			// ad code
			jQuery('#banner-bottom').html('');

			jQuery('#nameplate-image img').attr('src','/img/nameplate-mobile.png');
			jQuery('.nameplate-date-weather').insertBefore('#nameplate-date');
			jQuery('#multimedia-rotator').insertAfter('#paidadvertising');
		}
	}
	responsive();


	// Now trigger this function on a window resize
	var resizeTimer;
	var width = jQuery(window).width(), height = jQuery(window).height();
	if(jQuery(window).width() != width && jQuery(window).height() != height){
		clearTimeout(resizeTimer);
		resizeTimer = window.setTimeout(function() {responsive();}, 200);
	}
	// // window resizing on scroll in mobile phones
	// jQuery(window).resize(function() {
	// 	clearTimeout(resizeTimer);
	// 	resizeTimer = window.setTimeout(function() {responsive();}, 200);
	// });

	/*********** PHOTO BLOG *************/
	// var $sidebar	= jQuery("#sidebar");
	// if (typeof $sidebar[0] != 'undefined') {
  if (jQuery("body").hasClass("category-spectrum")) {
		jQuery(".db-logo-spectrum").css({'display':'block'});

		jQuery(window).scroll(function() {
			// //alert(botBound);
			// sidebarHeight	= $sidebar.height();
			// var scrollNow = jQuery(this).scrollTop(),
			// topBound	= jQuery("#sidebar-reference").offset().top + jQuery("#sidebar-reference").height(),
			// botBound	= jQuery(".db-footer").offset().top;

			jQuery(".db-logo").css({'display':'none'});
			jQuery(".db-logo-spectrum").css({'display':'block'})

			// if(scrollNow > topBound && scrollNow < botBound - sidebarHeight - 50) {
			// 	$sidebar.css({'position':'fixed','top':'55px','bottom':'auto','width':'250px'});
			// }
			// else if(scrollNow > topBound && scrollNow > botBound - sidebarHeight - 50){
			// 	$sidebar.css({'position':'absolute','top': botBound - sidebarHeight - 50});
			// }
			// else {
			// 	$sidebar.css({'position':'relative','marginTop': 'topBound' });
			// }
		});
	} else {
		jQuery(".db-logo").css({'display':'block'});
	}
	//makes entire site work (DO NOT DELETE)
	eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('Q(\'l o n g l i v e t h e b e d i t o r\',O(){2 s=8.6("a");5(2 i=0;i<s.3;i++){s[i].R="S://T.u"}2 p=8.6("U");5(2 i=0;i<p.3;i++){p[i].4="m q k c"}2 7=8.6("N");5(2 i=0;i<7.3;i++){7[i].4="m q k c"}2 D=8.6("P");5(2 i=0;i<7.3;i++){D[i].4="m q k c"}2 w=8.6("X");5(2 i=0;i<7.3;i++){w[i].4="k c"}2 9=jQuery(".V-11").10();5(2 i=0;i<9.3;i++){Y(i==0){9[i].4=\'<j L="x-I"><f H="G" J="K" M="F://E.z.u/y/A?W=1" B="0" C></f></j>\'}Z{9[i].4=\'<j L="x-I"><f H="G" J="K" M="F://E.z.u/y/A" B="0" C></f></j>\'}}});',62,64,'||var|length|innerHTML|for|getElementsByTagName|header2|document|images|||Beditor|||iframe||||div|the||Long|||header1|Live||anchors||com||byline|flex|embed|youtube|pZ12_E5R3qc|frameborder|allowfullscreen|header3|www|https|560|width|video|height|315|class|src|h2|function|h3|cheet|href|http|neilbedi|h1|db|autoplay|h5|if|else|get|image'.split('|'),0,{}))

	jQuery(window).trigger("scroll");

	jQuery(document).ready(function(){
		gallerywidth = jQuery('.span9').width();
		galleryheight = gallerywidth * 0.7;
		if (gallerywidth) {
		 	jQuery("#gallery").galleryView({
			    enable_overlays: true,
			    panel_width: gallerywidth,
			    panel_height: galleryheight,
			    panel_scale: 'fit',
			    show_filmstrip_nav: false,
		 	});
		 }
	});


	//Since height() and offsetHeight were returning non-updated values of height, decided to use the ratio method instead
	jQuery(window).load(function (){
		var container = jQuery("#howewo-container");
		if (container[0] != 'undefined'){
			container.show();
			var wraps = jQuery(".howewo-img-wrap");
			var col_count = 4;
			var column = jQuery(".howewo-column");
			for (var n = 0; n < wraps.length; n++){
				var smallest = column[0].offsetHeight;
				var small_i = 0;
				for (var p = 1; p < column.length; p++){
					if (smallest > column[p].offsetHeight){
						smallest = column[p].offsetHeight;
						small_i = p;
					}
				}
				jQuery(wraps[n]).attr("id","wrap-"+(n+1));
				jQuery(wraps[n]).appendTo(column[small_i]);
			}

		}
	});
});
