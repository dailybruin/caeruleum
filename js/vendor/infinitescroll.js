$(window).load(function() {	
	offset_inc = 1;
	loaded = 0;
	$(window).scroll(function() { 
		var scrolltop = $(this).scrollTop();
		var botBound = $("#banner-bottom").offset().top;
		if (/*sbotBound - scrolltop > 600 &&*/ !loaded) {

			var data = {
				action: 'infinite_scroll',
				offset: 4*(offset_inc),
				numberposts: 8,
			};
			$.post(ajax_object.ajax_url, data, function(response) {
				var image_urls = JSON.parse(response);
				//alert(image_urls[0]);
				var container = $("#howewo-container");
			    column = $(".howewo-column");
			    images = new Array();
			    image_text = new Array();
				$.each( image_urls, function(key, value) {
					var image = document.createElement('img');
				    image.setAttribute('src',value[0]);
				    image.setAttribute('width','100%');
				    image.setAttribute('class','attachment-db-category-full wp-post-image');
				    images.push(image);
				    image_text.push(value[1]);
				});
				
			});
			loaded = 1;
		}
		else if (botBound - scrolltop < 1500 && loaded) {
			for (var i = 0; i < images.length; i++){
				var smallest = column[0].offsetHeight;
				var small_i = 0;
				for (var p = 1; p < column.length; p++){
					if (smallest > column[p].offsetHeight){
						smallest = column[p].offsetHeight;
						small_i = p;
					}
				}
				var j = $('<div/>', {
				    "class": 'howewo-img-wrap',
				}).append(images[i]);
				j.append($('<div/>', {
					text: image_text[i],
				}));
				j.appendTo(column[small_i]);
		    }	
		    loaded = 0;
		}
	});
});