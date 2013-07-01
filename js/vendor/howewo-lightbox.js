$(document).ready(function() {
	$(document).on("click", ".howewo-img-wrap a", function(e){
		e.preventDefault();
		var img_src = $(this).attr("href");
		var img_desc = $(this).attr("title");
		if ($('#howewo-lightbox').length > 0) { 
	        $('#lightbox-container').html('<img src="' + img_src + '" />' + '<div><p>' + img_desc + '</p></div>');
	        $('#howewo-lightbox').show();
	        if ($('#lightbox-container div').width() < $('#lightbox-container img').width())
	        	$('#lightbox-container div').width($('#lightbox-container img').width());
	    }
	    else {
	        var lightbox = 
	        '<div id="howewo-lightbox">' +
	            '<div id="lightbox-container">' + 
	                '<img src="' + img_src +'" />' +
	                '<div><p>' + img_desc + '</p></div>' +
	            '</div>' +
	        '</div>';

	        $('body').append(lightbox);
	        //Make the text div bigger to match a large horizontal image
	        if ($('#lightbox-container div').width() < $('#lightbox-container img').width())
	        	$('#lightbox-container div').width($('#lightbox-container img').width());

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

