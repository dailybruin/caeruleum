<?php/*
Template Name: Stonewall
*/ ?>
<?php get_header(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Stonewall</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<style>
.accordion .accordion-navigation > a {
	background: none;
	color: #222222 !important;
	display: block;
	font-family: "Roboto Slab", serif;
	font-size: 1.5rem;
}

.accordion .accordion-navigation.active > a {
	background: none;
}

.accordion .accordion-navigation {
	margin-bottom: 1rem !important;
}

#title h2 {
	font-size: 6rem;
	text-align: center;
	font-weight: 400;
	color: #333 !important;
	/*text-transform: uppercase;*/
}
#title h3 {
	text-align: center;
	font-weight: 400;
	color: #555 !important;
	line-height: 2;
	/*text-transform: uppercase;*/
}

#stonewall-wrap ul {
	list-style-type: none;
	margin-right: 1.1rem;
	font-size: 1rem;
}

.stone-title {
	font-size: 1.5rem;
}

#blurb {
	text-indent: 70px;
    background: #EEE;
    width: 100%;
    
    margin-bottom: 2px;
}
#blurb p {
	padding-left: 15px;
	padding: 10px;
	font-size: 1rem;
}

.stone {
	margin-bottom: 1rem;
	background-size: 50%;
}

.s1 {
	background-image: url('http://dailybruin.com/images/2015/02/stonewall.jpg');
	background-position: top;
}

.s2 {
	background-image: url('http://dailybruin.com/images/2015/02/stonewall.jpg');
	background-position: bottom;
}

.s3 {
		background-image: url('http://dailybruin.com/images/2015/02/stonewall.jpg');
	background-position: center;
}

#stonewall-wrap {

	font-family: 'Roboto Slab', serif;
	margin-top: 2rem;
	max-width: 1170px;
	margin-left: auto;
	margin-right: auto;
}



</style>
</head> 

<body>
	<div id="stonewall-wrap">
		<div id="title"><h2>Stonewall</h2><h3>From the Daily Bruin</h3></div>
		<div id="blurb"><p>For 96 years, the Daily Bruin has strived to hold UCLA accountable to the community it serves. We take that responsibility seriously. And when the Bruin is unjustly thwarted in its efforts to inform students, we believe you have a right to know. Each time our reporters are stonewalled in their attempts to inform readers, we will record that here, stone by stone. No stonewalling that week, no new stone. Below, you can click each stone to read about why it's there.  </p></div>
		<ul id="stonewall" class="accordion" data-accordion></ul> 
	</div>
</body>
</html>

<script type="text/javascript"> 
$(document).ready(function() {	

var position = ["top","center","bottom"];
//source file is https://docs.google.com/spreadsheet/ccc?key=0Ak0qDiMLT3XddHlNempadUs1djdkQ0tFLWF6ci1rUUE	

$(function showstones() {	
$.getJSON( "https://spreadsheets.google.com/feeds/list/10_sZS7Y5ljL8NTY2f6RRRQQUK1Ty6PqyGgkqMf4W7h4/od6/public/values?alt=json",

	function (data) {	
		//$('div#stonewall').append('<div class="stone"></div>');
		$.each(data.feed.entry.reverse(), function(i,entry) {	
		if (entry.gsx$date.$t && entry.gsx$copystatus.$t)
		{
			var append = '<li class="accordion-navigation stone s'+(i%3+1)+'">';
			append += '<a href="#panel'+i+'a" class="stone-title" id="t'+i+'"></a>';
			append += '<div id="panel'+i+'a" class="content stone-desc" id="desc'+i+'"></div>';
			append += '</li>';
			$('ul#stonewall').append(append);
			var title = '<b>' + entry.gsx$date.$t + ':</b> ' + entry.gsx$reason.$t;
			var desc = entry.gsx$description.$t;
			$('#t'+i+'').append(title);
			$('#panel'+i+'a').append(desc);
		}
			});
		});
  
	});
	

});
</script>

<?php get_footer(); ?>



