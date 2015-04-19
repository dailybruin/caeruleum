var candidates, keys;
var positions = ["President", "IVP", "EVP", "Gen-Rep", "AAC", "CEC", "CSC", "CAC", "FAC", "FSC", "SWC", "TSR"];
document.addEventListener("DOMContentLoaded", function(event) {
	$(".in-the-news").hide();  // TODO: REMOVE THIS BEFORE PRODUCTION!
	$.getJSON("../js/usac-2015/candidates.json", function(data) {
		candidates = data;
		keys = _.keys(candidates[0]);
		var template = _.template($("script.template").html());
		for (var i = 0; i < positions.length; i ++) {
			c = _.where(candidates, {Position: positions[i]});
			$("#"+positions[i]).after(template({input: c}));
		}
	});
});
