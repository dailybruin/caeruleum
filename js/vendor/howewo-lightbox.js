$(function() {
	var lightbox = function(lb) {
		this.$lightbox = lb;
		this.$container = this.$lightbox.find('#lightbox-container');
		this.$img_container = this.$lightbox.find('#lightbox-container img#lb-image');
		this.$desc_container = this.$lightbox.find('#lightbox-container div#lb-description');
		this.$current_wrap = null;
		this.$next = this.$lightbox.find('#lightbox-container div.nav.right');
		this.$prev = this.$lightbox.find('#lightbox-container div.nav.left');
		this.$close_btn = this.$lightbox.find('#lightbox-container div#lb-close');
		this.init();
	};
	lightbox.prototype = {
		init: function() {
			this.bind_key();
			this.bind_click();
		},
		show: function(event) {
			event.preventDefault();
			var lb = event.data.lb;
			lb.$current_wrap = $($(this).parent());
			lb.$lightbox.show();
			lb.update();
			$('body').css('overflow','hidden');
		},
		bind_key: function() {
			//$('body').keyup($.proxy(this.close,this));
			$('body').keyup($.proxy(function(e) {
				if (e.keyCode == 27)
					this.close();
				else if (e.keyCode == 37)
					this.prev();
				else if (e.keyCode == 39)
					this.next();
			},this));
		},
		bind_click: function(e) {
			$('body').on("click", ".howewo-img-wrap a", { lb: this }, this.show);
			this.$lightbox.click($.proxy(function(e) {
				if ($(e.target).attr('id') == this.$container.attr('id'))
					this.close();
			},this));
			this.$close_btn.click($.proxy(this.close,this));
			this.$next.click($.proxy(this.next,this));
			this.$prev.click($.proxy(this.prev,this));
		},
		close: function() {
			this.$lightbox.hide();
			$('body').css('overflow','auto');
		},
		update: function() {
			this.$img_container.attr("src", this.$current_wrap.children('a').attr("href"));
			this.$desc_container.html("<p>" + this.$current_wrap.children('a').attr("data-desc") + "</p>");
			//Make width grow with image if image is REALLY wide
			if (this.$desc_container.width() < this.$img_container.width())  
				this.$desc_container.width(this.$img_container.width());
			//Hide navs if the block is the first/last
			if($("#wrap-" + (this.$current_wrap.attr('id').replace('wrap-',"")*1-1)).length > 0)
				this.$prev.show();
			else
				this.$prev.hide();
			if($("#wrap-" + (this.$current_wrap.attr('id').replace('wrap-',"")*1+1)).length > 0)
				this.$next.show();
			else
				this.$next.hide();
		},
		next: function() {
			var wrapid = "#wrap-" + (this.$current_wrap.attr('id').replace('wrap-',"")*1+1);
			if ($(wrapid).length > 0){
				this.$current_wrap = $(wrapid);
				this.update();
			}
		},
		prev: function() {
			var wrapid = "#wrap-" + (this.$current_wrap.attr('id').replace('wrap-',"")*1-1);
			if ($(wrapid).length > 0){
				this.$current_wrap = $(wrapid);
				this.update();
			}
		},
	}
	document.getElementById('howewo-lightbox') && new lightbox($('#howewo-lightbox'));
});