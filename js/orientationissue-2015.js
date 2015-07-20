
var currentContainer;

document.addEventListener("DOMContentLoaded", function(event) {

	
	//$(".db-next.hide-for-small").remove();

	// Show only the profiles
	$(".main-section").hide();
	$(".news").show();
	currentContainer = "news";

    $(window).hashchange(function(){
		var hash = location.hash;
		// is substring
		if (hash.indexOf("#news") > -1)
			switchSection("news");
		else if (hash.indexOf("#opinion") > -1)
			switchSection("opinion");
		else if (hash.indexOf("#ae") > -1)
			switchSection("ae");
		else if (hash.indexOf("#sports") > -1)
			switchSection("sports");
		else if (hash.indexOf("#video") > -1)
			switchSection("video");
		else if (hash.indexOf("#radio") > -1)
			switchSection("radio");
    });


	$(window).hashchange();

    
});




function switchSection(section) {
	// section must be either profiles, violations, results, or endorsements
	$("." + currentContainer).hide();
	currentContainer = section;
	$("." + currentContainer).show();
 
	
	$(".top-bar-section>.right>li.active").removeClass('active');
	$(".top-bar-section a[href='#" + currentContainer + "']").parent().addClass('active');
}