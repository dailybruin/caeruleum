var candidates, keys;
var positions = ["President", "IVP", "EVP", "Gen-Rep", "AAC", "CEC", "CSC", "CAC", "FAC", "FSC", "SWC", "TSR"];
var currentContainer;

document.addEventListener("DOMContentLoaded", function(event) {
	/*!
	 * LABELAUTY jQuery Plugin
	 *
	 * @file: jquery-labelauty.js
	 * @author: Francisco Neves (@fntneves)
	 * @site: www.francisconeves.com
	 * @license: MIT License
	 */
	(function(f){function k(b){var a=0;b=b.clone().attr("style","position: absolute !important; top: -1000 !important; ").appendTo("body");a=b.width(!0);b.remove();return a}function g(b,a){b&&window.console&&window.console.log&&window.console.log("jQuery-LABELAUTY: "+a)}function l(b,a,c){var e;null==a?e=a="":(e=a[0],a=null==a[1]?e:a[1]);return 1==c?'<label for="'+b+'"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked">'+e+'</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">'+
	a+"</span></label>":'<label for="'+b+'"><span class="labelauty-unchecked-image"></span><span class="labelauty-checked-image"></span></label>'}f.fn.labelauty=function(b){var a=f.extend({development:!1,"class":"labelauty",label:!0,separator:"|",checked_label:"Checked",unchecked_label:"Unchecked",force_random_id:!1,minimum_width:!1,same_width:!0},b);return this.each(function(){var c=f(this),e=!0,d,b;if(!1===c.is(":checkbox")&&!1===c.is(":radio"))return this;c.addClass(a["class"]);d=c.attr("data-labelauty");
	e=a.label;!0===e&&(null==d||0===d.length?(b=[],b[0]=a.unchecked_label,b[1]=a.checked_label):(b=d.split(a.separator),2<b.length?(e=!1,g(a.development,"There's more than two labels. LABELAUTY will not use labels.")):1===b.length&&g(a.development,"There's just one label. LABELAUTY will use this one for both cases.")));c.css({display:"none"});c.removeAttr("data-labelauty");d=c.attr("id");if(a.force_random_id||null==d||""===d.trim()){var h=1+Math.floor(1024E3*Math.random());for(d="labelauty-"+h;0!==f(d).length;)h++,
	d="labelauty-"+h,g(a.development,"Holy crap, between 1024 thousand numbers, one raised a conflict. Trying again.");c.attr("id",d)}c.after(l(d,b,e));!1!==a.minimum_width&&c.next("label[for="+d+"]").css({"min-width":a.minimum_width});0!=a.same_width&&1==a.label&&(c=c.next("label[for="+d+"]"),e=k(c.find("span.labelauty-unchecked")),b=k(c.find("span.labelauty-checked")),e>b?c.find("span.labelauty-checked").width(e):c.find("span.labelauty-unchecked").width(b))})}})(jQuery);
	
	$(".db-next.hide-for-small").remove();  // TODO: REMOVE THIS BEFORE PRODUCTION!

	// Show only the profiles
	$(".usac-section").hide();
	$(".profiles-container").show();
	currentContainer = ".profiles-container";

	setSidebar();
	$.getJSON("../js/usac-2015/candidates.json", function(data) {
		// $(".side-nav").stick_in_parent();
		$(":checkbox").labelauty();
		candidates = data;
		keys = _.keys(candidates[0]);
		var template = _.template($("script.template").html());
		for (var i = 0; i < positions.length; i ++) {
			c = _.where(candidates, {Position: positions[i]});
			$("#"+positions[i]).append(template({input: c}));
		}
	});
	
	$("input:checkbox").on("click", function() {
		$(".element").hide();
		$("input:checked").each(function() {
			$("." + $(this).attr("id")).show();
		});
	});

	$(window).scroll(scrollFunction);
	$("#scrollup").click(function(event){
		event.preventDefault();
		$("html, body").animate({scrollTop: 0}, 600);
		return false;
	});

	var url = "https://spreadsheets.google.com/feeds/list/1rVOosKq2pnkpFPfSkdrXmGEWIn19MQW24X-bPqqZiXI/od6/public/values?alt=json";
	$.getJSON(url, function(json) {
		var data = clean_google_sheet_json(json);
		compile_and_insert_html('#violations_main_template', '#violations-content', data);
		compile_and_insert_html('#violations_sidebar_template', '#violations-sidebar', data);
	});
});

function scrollFunction() {
	setSidebar();
	if ($(this).scrollTop() < 100) {
        $('#scrollup').hide();
    } else {
        $('#scrollup').show();  // TODO: this doesn't work
    }

	var currentScroll = $(this).scrollTop() + 100, currentSection;

	var content;
	if (currentContainer == ".profiles-container")
		content = ".candidates-content";
	else if (currentContainer == ".violations-container")
		content = ".element.violation";
	else
		console.log("scroll highlighting not ready")  // TODO: implement this
	$(content).each(function(){
		if ($(this).offset().top - 1 < currentScroll)
			currentSection = $(this);
	});
	if (!currentSection)
		return;
	var id = currentSection.attr('id');
		$(".side-nav .active").removeClass('active');
		$("[href=#"+id+"]").addClass('active');
}

function setSidebar() {
	$el = $("#scrollbar");
	if ($(this).scrollTop() > 200 && $el.css('position') != "fixed") {
		$el.css({"position": "fixed", "top": "80px"});
	}
	if ($(this).scrollTop() < 200 && $el.css('position') == "fixed") {
		$el.css({"position": "relative", "top": "0px"});
	}
}

function switchSection(sender) {
	$(currentContainer).hide();
	currentContainer = "." + sender.innerHTML.toLowerCase() + "-container";
	$(currentContainer).show();
	$(".top-bar-section>.right>li.active").removeClass('active');
	$(sender.parentElement).addClass('active');
}

// Takes in template id, compiles the template to html using data json object
// and then inserts it into given div id
function compile_and_insert_html(template_id, div_id, data) {
	var template = _.template($(template_id).html());
	var template_html = template({
		'rows': data
	});
	$(div_id).html(template_html);
}
 
 
// takes in JSON object from google sheets and turns into a json formatted 
// this way based on the original google Doc
// [
//  {
//      'column1': info1,
//      'column2': info2,
//  }
// ]
function clean_google_sheet_json(data){
	var formatted_json = [];
	var elem = {};
	var real_keyname = '';
	$.each(data.feed.entry, function(i, entry) {
		elem = {};
		$.each(entry, function(key, value){
			// fields that were in the spreadsheet start with gsx$
			if (key.indexOf("gsx$") == 0) 
			{
				// get everything after gsx$
				real_keyname = key.substring(4); 
				elem[real_keyname] = value['$t'];
			}
		});
		formatted_json.push(elem);
	});
	return formatted_json;
}
