jQuery(document).ready(function($) {
	var data = {
		action: 'infinite_scroll',
		counter: 8      // Need to set this dynamically
	};
	$.post(ajax_object.ajax_url, data, function(response) {
		alert('Got this from the server: ' + response);
		var derp = JSON.parse(response);
		$.each( derp, function( key, value ) {
	      	alert(key + " " + value);
	    });
	});

});