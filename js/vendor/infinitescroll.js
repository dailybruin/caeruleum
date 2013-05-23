$(window).load(function (){
	var data = {
		action: 'infinite_scroll',
		counter: 8      // Need to set this dynamically
	};
	$.post(ajax_object.ajax_url, data, function(response) {
		var image_urls = JSON.parse(response);
		var container = $("#howewo-container");
	    var column = $(".howewo-column");
		$.each( image_urls, function( key, value ) {
			var smallest = column[0].offsetHeight;
			var small_i = 0;
			for (var p = 1; p < column.length; p++){
				if (smallest > column[p].offsetHeight){
					smallest = column[p].offsetHeight;
					small_i = p;
				}
			}
			alert(column[0].offsetHeight + "-" + column[1].offsetHeight 
				+ "-" + column[2].offsetHeight + "-" + column[3].offsetHeight);
			/*var image = $('<img>')
			    .attr({ src : value } )
		        .addClass("text");*/
		    var image = document.createElement('img');
		    image.setAttribute('src',value);
		    column[small_i].appendChild(image);
			//column[small_i].append(image);
	    });
	});

});