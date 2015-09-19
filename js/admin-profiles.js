$(document).foundation();
var doc = document.documentElement;
var contentopen = false;
var currentmug = null;
doc.setAttribute('data-useragent', navigator.userAgent);

$(document).ready(function() {
	$(".db-next.hide-for-small").remove();
 
  $(".content .person").hide();
  
	//$(".mugs li").hover(function() { $(this).fadeTo("fast", 0.7); }, function() { $(this).fadeTo("fast", 1.0); });

	$(".mugs li").click(function() {
		var name = $(this).attr("id");
		
		if (contentopen) {
			$(currentmug).fadeTo("slow", 1.0);
			var curname = $(currentmug).attr("id");
			$(".content #" + curname).slideUp();
			
			if (currentmug == this) {
				contentopen = false;
				currentmug = null;
				return;
			}
		}

		contentopen = true;
		$(this).fadeTo("slow", 0.4);
		currentmug = this;
		$(".content #" + name).slideDown();
	});


	var div = $('.mug-container');
 console.log(div);
    var width = 1.17*div.width();
    
    div.css('height', width);  
});

function mugClick(obj) {

};