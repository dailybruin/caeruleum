var candidates, keys;
var positions = ["President", "IVP", "EVP", "Gen-Rep", "AAC", "CEC", "CSC", "CAC", "FAC", "FSC", "SWC", "TSR"];
document.addEventListener("DOMContentLoaded", function(event) {
	$(".db-next.hide-for-small").remove();  // TODO: REMOVE THIS BEFORE PRODUCTION!
	$.getJSON("../js/usac-2015/candidates.json", function(data) {
		// $(".side-nav").stick_in_parent();
		candidates = data;
		keys = _.keys(candidates[0]);
		var template = _.template($("script.template").html());
		for (var i = 0; i < positions.length; i ++) {
			c = _.where(candidates, {Position: positions[i]});
			$("#"+positions[i]).after(template({input: c}));
		}
	});
    $("input:checkbox").on("click", function() {
        $(".candidate").hide();
        $("input:checked").each(function() {
            $("." + $(this).attr("id").replace(/ /g, ".").replace("'", "\\'")).show();
        });
    });
    $(window).scroll(function() {
        $el = $("#scrollbar");
        if($(this).scrollTop() > 195 && $el.css('position') != "fixed") {
            $("#scrollbar").css({"position": "fixed", "top": "80px"});
        }
        if($(this).scrollTop() < 195 && $el.css('position') == "fixed") {
            $("#scrollbar").css({"position": "relative", "top": "30px"});
        }
    });
});
