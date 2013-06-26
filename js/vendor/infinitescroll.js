$(window).load(function() {	
	var offset_inc = 1;
	$(window).scroll(function() { 
		var scrolltop = $(this).scrollTop();
		var botBound = $("#banner-bottom").offset().top;

		var data = {
			action: 'infinite_scroll',
			offset: 4*(offset_inc),
			numberposts: 8,
		};
		$.post(ajax_object.ajax_url, data, function(response) {
			//alert(response);
			var image_urls = JSON.parse(response);
			var container = $("#howewo-container");
		    var column = $(".howewo-column");
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
					}).append(image,$('<div/>').append($('<p/>', { "text": value[3], })));
					wrap.appendTo(column[small_i]);
				});
			});
		});
	});
});