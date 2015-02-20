<?php/*
Template Name: Graphics
*/ ?>
<?php get_header(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Graphics</title>
<script src="/js/vendor/jquery.nested.js"></script>

<style>
#graphics-wrap a img:hover{
	opacity: 0.8;
}
#modal img,
#modal h2 {
	display: inline-block;
}

#graphics-wrap {
	max-width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 1rem;
}
#blurb p{
	text-align: center;
	font-size: 1rem;
	margin-bottom: 2rem;
}
#graphics-wrap #title {
	text-align: center;
	margin-bottom: 2rem;
}
#graphics-wrap #title h2 {
	font-size: 4rem;
	line-height: 1.2;
}
#graphics-wrap #title h3 {
	font-weight: 400;
	margin-left: 12rem;
}
.graphic {
	width: 33%;
	float: left;
	padding: 0.5rem;
}
</style>
</head> 

<body>
	<div id="graphics-wrap">
		<div id="title"><h2>Graphics</h2><h3>by the Daily Bruin</h3></div>
		<div id="blurb"><p>Below is a list of our favorite graphics made by Daily Bruin reporters. Feel free to click each graphics to see them full-size and read more info. </p></div>
		<div id="graphics-list"></div> 
	</div>
</body>
<script type="text/javascript">
$(document).ready(function() {	
//source file is https://docs.google.com/spreadsheet/ccc?key=0Ak0qDiMLT3XddHlNempadUs1djdkQ0tFLWF6ci1rUUE	
$(function showgraphics() {	
$.getJSON("https://spreadsheets.google.com/feeds/list/16YS2FEIazhZZQGmZvyGDWrgXXtcKRhs6hk647TZCfcc/od6/public/values?alt=json",
	function (data) {	
		$.each(data.feed.entry.reverse(), function(i,entry) {	
		if (entry.gsx$complete.$t){
			var append = '<a href="#" data-reveal-id="modal'+i+'"><div class="graphic">';
			
			// append += '<h2>test</h2>';
			append += '<img src="'+entry.gsx$image.$t+'" >';
			append += '</div></a>';
			append += '<div id="modal'+i+'" class="reveal-modal" data-reveal>';
			append += '<img src="'+entry.gsx$image.$t+'" >';
			append += '<h2>'+entry.gsx$title.$t+'</h2>'
			append += '</div>';
			$('#graphics-list').append(append);
		}
		});
	});

});

$('#graphics-list').nested({
  selector: '.graphic'
});
});



</script>

</html>
<?php get_footer(); ?>