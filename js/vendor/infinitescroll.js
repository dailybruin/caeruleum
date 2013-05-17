jQuery(document).ready(function($) {
	var data = {
		action: 'infinite_scroll',
		counter: 8      // Need to set this dynamically
	};
	jQuery.post(ajax_object.ajax_url, data, function(response) {
		alert('Got this from the server: ' + response);
	});
});
