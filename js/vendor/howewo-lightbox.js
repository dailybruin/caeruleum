$(document).ready(function() {
	$(document).on("click", ".howewo-img-wrap a", function(e){
		e.preventDefault();
		var img_src = $(this).attr("href");
		if ($('#howewo-lightbox').length > 0) { 
	        $('#lightbox-container').html('<img src="' + img_src + '" />');
	        $('#howewo-lightbox').show();
	    }
	    else {
	        var lightbox =
	        '<div id="howewo-lightbox">' +
	            '<div id="lightbox-container">' + 
	                '<img src="' + img_src +'" />' +
	            '</div>' +
	        '</div>';
	        $('body').append(lightbox);
	        $(document).keyup(function(e) {
			    if (e.keyCode == 27 && $('#howewo-lightbox').length > 0) 
			  		$('#howewo-lightbox').hide();
			});
	    }
	});

	$(document).on('click', '#howewo-lightbox', function(){
		$(this).hide();
	});
});

