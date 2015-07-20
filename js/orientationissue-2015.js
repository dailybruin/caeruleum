
var currentContainer;

document.addEventListener("DOMContentLoaded", function(event) {

	
	$(".db-next.hide-for-small").remove();
	// Show only the profiles
	$(".usac-section").hide();
	$(".profiles-container").show();
	currentContainer = "profiles";

    $(window).hashchange(function(){
		var hash = location.hash;
		// is substring
		if (hash.indexOf("#endorsements") > -1)
			switchSection("endorsements");
		else if (hash.indexOf("#profiles") > -1)
			switchSection("profiles");
		else if (hash.indexOf("#results") > -1)
			switchSection("results");
		else if (hash.indexOf("#violations") > -1)
			switchSection("violations");
		else if (hash.indexOf("#news") > -1)
			switchSection("news");
    });


	$(window).hashchange();

});

    
});




function switchSection(section) {
	// section must be either profiles, violations, results, or endorsements
	$("." + currentContainer + "-container").hide();
	currentContainer = section;
	$("." + currentContainer + "-container").show();
 
	if (currentContainer === "endorsements") {
		$("#filter").hide();
	} else {
		$("#filter").show();
	}

    if(currentContainer === "results" || currentContainer === "news") {
        $("#PVE").hide();
    } else {
        $("#PVE").show();
    }
	$(".top-bar-section>.right>li.active").removeClass('active');
	$(".top-bar-section a[href='#" + currentContainer + "']").parent().addClass('active');
}