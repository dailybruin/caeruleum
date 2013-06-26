$(document).ready(function() {
	$(".howewo-img-wrap a").live('click',function(e){
		e.preventDefault();
		var img_src = $(this).attr("href");
		if ($('#howewo-lightbox').length > 0) { 
	        $('#content').html('<img src="' + img_src + '" />');
	        $('#howewo-lightbox').show();
	    }
	    else { //#lightbox does not exist - create and insert (runs 1st time only)
	        //create HTML markup for lightbox window

	        var lightbox =
	        '<div id="howewo-lightbox">' +
	            '<p>Click to close</p>' +
	            '<div id="content">' + //insert clicked link's href into img src
	                '<img src="' + img_src +'" />' +
	            '</div>' +
	        '</div>';
	        //insert lightbox HTML into page
	        $('body').append(lightbox);
	        $(document).keyup(function(e) {
			    if (e.keyCode == 27 && $('#howewo-lightbox').length > 0) 
			  		$('#howewo-lightbox').hide();
			});
	    }
	});

	$('#howewo-lightbox').live('click', function(){
		$('#howewo-lightbox').hide();
	});
});

