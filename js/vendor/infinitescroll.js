jQuery(document).ready(function($) {
	var data = {
		action: 'infinite_scroll',
		counter: 12      // We pass php values differently!
	};
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
	jQuery.post(ajax_object.ajax_url, data, function(response) {
		alert('Got this from the server: ' + response);
	});
});
