/*$(document).ready(function() {
	$(document).on("click", ".howewo-img-wrap a", function(e){
		e.preventDefault();
		var img_src = $(this).attr("href");
		var img_desc = $(this).attr("title");
		if (!$('#howewo-lightbox').is(":visible")) { 
	        $('#lightbox-container').html('<img src="' + img_src + '" />' + '<div><p>' + img_desc + '</p></div>');
	        $('#howewo-lightbox').show();
	        if ($('#lightbox-container div').width() < $('#lightbox-container img').width())
	        	$('#lightbox-container div').width($('#lightbox-container img').width());
	    }
	    else {
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
});*/
$(function() {
	var lightbox = function(lb) {
		this.$lightbox = lb;
		this.$container = this.$lightbox.find('#lightbox-container');
		this.$img_container = this.$lightbox.find('#lightbox-container img');
		this.$desc_container = this.$lightbox.find('#lightbox-container div');
		this.$current_img = null;
		this.init();
	};
	lightbox.prototype = {
		init: function() {
			$('body').on("click", ".howewo-img-wrap a", { lb: this }, this.show);
			this.$lightbox.click($.proxy(this.close,this));
		},
		show: function(event) {
			event.preventDefault();
			var lb = event.data.lb;
			lb.$current_img = $(this);
			lb.$img_container.attr("src", $(this).attr("href"));
			lb.$desc_container.html("<p>" + $(this).attr("title") + "</p>");
			lb.$lightbox.show();
			if (lb.$desc_container.width() < lb.$img_container.width())  
				lb.$desc_container.width(lb.$img_container.width());
			$('body').css('overflow','hidden');
		},
		close: function(e) {
			if ($(e.target).attr('id') == this.$container.attr('id')){
				this.$lightbox.hide();
				$('body').css('overflow','auto');
			}
		},
		update: function() {
			//this.$container.html('<img src="' + this.img + '" />' + '<div><p>' + this.desc + '</p></div>');
			//if (this.$container..width() < $('#lightbox-container img').width())
	       // 	$('#lightbox-container div').width($('#lightbox-container img').width());
		},
		next: function() {

		},
		prev: function() {

		},
	}
	document.getElementById('howewo-lightbox') && new lightbox($('#howewo-lightbox'));
});