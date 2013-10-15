$(window).load(function() {	
	var offset_inc = 1;
	var num_posts_to_load = 8;
	var loadcounter = num_posts_to_load;
	$(window).scroll(function() { 
		var scrolltop = $(this).scrollTop();
		var botbound = $("#banner-bottom").offset().top;
		var data = {
			action: 'infinite_scroll',
			offset: 4*(offset_inc),
			numberposts: num_posts_to_load,
		};
		if (botbound - scrolltop < 1500 && loadcounter == num_posts_to_load){
			loadcounter = 0;
			$.post(ajax_object.ajax_url, data, function(response) {
				image_urls = JSON.parse(response);
				var container = $("#howewo-container");
			    var column = $(".howewo-column");
			    var wrapcounter = $(".howewo-img-wrap").length + 1;
				$.each( image_urls, function(key, value) {
					var image = $('<img/>', {
						"class": 'attachment-db-category-full wp-post-image',
						"src": value[0],
					}).load(function() {
						var smallest = column[0].offsetHeight;
						var small_i = 0;
						for (var p = 1; p < column.length; p++){
							if (smallest > column[p].offsetHeight){
								smallest = column[p].offsetHeight;
								small_i = p;
							}
						}
						var wrap = $('<div/>', {
						    "class": 'howewo-img-wrap',
						    "id": 'wrap-' + wrapcounter++,
						}).append(
							image, 
							$('<a/>',{
								"href": value[0],
								"data-desc": value[1],}).append(
								$('<div/>',{"width": "100%", }).append(
									$('<p/>',{ "text": value[3], }))));
						wrap.appendTo(column[small_i]);
						loadcounter++;
					});
				});
			});
		}
	});
});