$(window).scroll(function() {	
	var scrolltop = $(this).scrollTop();
	var botBound = $("#banner-bottom").offset().top;
	if (botBound - scrolltop < 400) {
		var data = {
			action: 'infinite_scroll',
			counter: 8      // Need to set this dynamically
		};
		$.post(ajax_object.ajax_url, data, function(response) {
			var image_urls = JSON.parse(response);
			var container = $("#howewo-container");
		    var column = $(".howewo-column");
		    var images = new Array();
			$.each( image_urls, function(key, value) {
				var image = document.createElement('img');
			    image.setAttribute('src',value);
			    /*var image = $('<img />');
			    image.attr('src',value);*/
			    images.push(image);

			   	var imgs = $("#howewo-container img").css('width','300');
			   	/*.load(function() { 
		    		alert('derp'); });*/
			    container[0].appendChild(image);
			});
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
				
			    /*
				alert(column[0].offsetHeight + "-" + column[1].offsetHeight 
					+ "-" + column[2].offsetHeight + "-" + column[3].offsetHeight);*/
		    }
		});
	}
});