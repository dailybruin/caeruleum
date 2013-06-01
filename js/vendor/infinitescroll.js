$(window).ready(function() {	
	offset_inc = 1;
	loaded = 0;
	$(window).scroll(function() { 
		var scrolltop = $(this).scrollTop();
		var botBound = $("#banner-bottom").offset().top;
		if (botBound - scrolltop < 400 && !loaded) {

			var data = {
				action: 'infinite_scroll',
				offset: 8*(offset_inc),
				numberposts: 4,
			};
			$.post(ajax_object.ajax_url, data, function(response) {
				var image_urls = JSON.parse(response);
				var container = $("#howewo-container");
			    column = $(".howewo-column");
			    images = new Array();
				$.each( image_urls, function(key, value) {
					var image = document.createElement('img');
				    image.setAttribute('src',value);
				    image.setAttribute('width','300');
				    images.push(image);
				});
				
			});
			loaded = 1;
		}
		else if (botBound - scrolltop < 400 && loaded) {
			for (var i = 0; i < images.length; i++){
				var smallest = column[0].offsetHeight;
				var small_i = 0;
				for (var p = 1; p < column.length; p++){
					if (smallest > column[p].offsetHeight){
						smallest = column[p].offsetHeight;
						small_i = p;
					}
				}
			    column[small_i].appendChild(images[i]);
		    }	
		    loaded = 0;
		}
	});
});