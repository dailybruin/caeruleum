jQuery(document).ready(function($) {
	var data = {
		action: 'infinite_scroll',
		counter: 8      // Need to set this dynamically
	};
	$.post(ajax_object.ajax_url, data, function(response) {
		var derp = JSON.parse(response);
		$.each( derp, function( key, value ) {
	      	var container = $("#howewo-container");
	      	var columns = $(".howewo-column");
	      	/*
			column = container.children('div');

			for (var n = 0; n < images.length; n++){
				var smallest = column[0].offsetHeight;
				var small_i = 0;
				for (var p = 1; p < column.length; p++){
					if (smallest > column[p].offsetHeight){
						smallest = column[p].offsetHeight;
						small_i = p;
					}
				}

				column[small_i].appendChild(images[n]);
			}*/
			
	    });
	});

});