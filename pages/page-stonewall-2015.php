<?php/*
Template Name: Stonewall
*/ ?>
<?php get_header(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Stonewall</title>

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
#title {
	text-align: center;
}

#title h2 {
	font-size: 6rem;
	font-weight: 400;
	color: #333 !important;
	display: inline-block;
	/*text-transform: uppercase;*/
}
#title h3 {
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

.db-next {
	display: none !important;
}



</style>
</head>

<body>
	<div id="stonewall-wrap">
		<div id="title"><h2 class="animated fadeInDown">S</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 0.3s;-moz-animation-delay: 0.3s;-ms-animation-delay: 0.3s;">t</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 0.6s;-moz-animation-delay: 0.6s;-ms-animation-delay: 0.6s;">o</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 0.9s;-moz-animation-delay: 0.9s;-ms-animation-delay: 0.9s;">n</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 1.2s;-moz-animation-delay: 1.2s;-ms-animation-delay: 1.2s;">e</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 1.5s;-moz-animation-delay: 1.5s;-ms-animation-delay: 1.5s;">w</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 1.8s;-moz-animation-delay: 1.8s;-ms-animation-delay: 1.8s;">a</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 2.1s;-moz-animation-delay: 2.1s;-ms-animation-delay: 2.1s;">l</h2>
						<h2 class="animated fadeInDown" style="-webkit-animation-delay: 2.4s;-moz-animation-delay: 2.4s;-ms-animation-delay: 2.4s;">l</h2>
			<h3>From the Daily Bruin</h3></div>
		<div id="blurb"><p>For 100 years, the Daily Bruin has strived to hold UCLA accountable to the community it serves. We take that responsibility seriously. And when the Bruin is unjustly thwarted in its efforts to inform students, we believe you have a right to know. Each time our reporters are stonewalled in their attempts to inform readers, we will record that here, stone by stone. No stonewalling that week, no new stone. Below, you can click each stone to read about why it's there.  </p></div>
		<ul id="stonewall" class="accordion" data-accordion></ul>
	</div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {

var position = ["top","center","bottom"];
//source file is https://docs.google.com/spreadsheets/d/1e9Fi-WgpB-JVF0v7jepWvywZ1IW4gV9IS39n9JnqXO4/edit#gid=0
//owner is online@media.ucla.edu

jQuery(function showstones() {
jQuery.getJSON( "https://spreadsheets.google.com/feeds/list/1e9Fi-WgpB-JVF0v7jepWvywZ1IW4gV9IS39n9JnqXO4/od6/public/values?alt=json",

	function (data) {
		//jQuery('div#stonewall').append('<div class="stone"></div>');
		jQuery.each(data.feed.entry.reverse(), function(i,entry) {
		if (entry.gsx$date.$t && entry.gsx$copystatus.$t)
		{
			var append = '<li class="accordion-navigation stone s'+(i%3+1)+'">';
			append += '<a href="#panel'+i+'a" class="stone-title" id="t'+i+'"></a>';
			append += '<div id="panel'+i+'a" class="content stone-desc" id="desc'+i+'"></div>';
			append += '</li>';
			jQuery('ul#stonewall').append(append);
			var title = '<b>' + entry.gsx$date.$t + ':</b> ' + entry.gsx$reason.$t;
			var desc = entry.gsx$description.$t;
			jQuery('#t'+i+'').append(title);
			jQuery('#panel'+i+'a').append(desc);
		}
			});
		});

	});


});
</script>

<?php get_footer(); ?>
