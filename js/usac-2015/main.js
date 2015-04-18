var candidates, keys;
document.addEventListener("DOMContentLoaded", function(event) {
	$(".in-the-news").hide();  // TODO: REMOVE THIS BEFORE PRODUCTION!
	$.getJSON("../js/usac-2015/candidates.json", function(data) {
		candidates = data;
		keys = _.keys(candidates[0]);
		var template = _.template($("script.template").html());
		$(".content").append(template(candidates));
	});
});
