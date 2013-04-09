<?php/*
Template Name: USAC Elections 2013
*/ ?>
<?php get_header(); ?>

<script type="text/javascript">

jQuery(document).ready(function() {
    unresponsivize();
}); 

</script>

<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
display: block;
}

body {
line-height: 1;
}

#container {
	width: 100%;
	height: 100%;
}

#banner {
	position: absolute;
	background-color:silver;
	float:left;
	width:65%;
	height:305px;
}

#page_tab {
	position:relative;
	top: 305px;
	overflow: hidden;
	background-color:plum;
	width:100%;
	height: 300px;
}

#candidate {
	float:left;
	width: 33%;
	height: 300px;
	border-style:solid;
	border-width:2px;
}

#info {
	float: left;
	width:33%;
	height:300px;
	border-style:solid:
	border-width:2px;
}
#opinion {
	float: left;
	width:33%;
	height:300px;
	border-style:solid;	
	border-width:2px;

}

#campaign_violation {
	position:relative;
	top:305px;
	float:left;
	width: 75%;
	height:400px;
	background-color:peru;

}

#calendar {
	position:relative;
	float:left;
	top:305px;
	width:25%;
	height:300px;
	background-color:gray;

}

#article {
	position:relative;
	float:left;
	top:305px;
	width:75%;
	height:300px;
	background-color:orchid;

}

#social_media {
	position:relative;
	float:left;
	top:200px;
	width:25%;
	height:400px;
	background-color:khaki;

}
</style>

<div id="usac page">
<!DOCTYPE html>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>USAC Elections | Daily Bruin</title>
        <link rel="stylesheet" type="text/css" href="usac.css" />
        </head>
        <body>
        <div id="container">
        <div id="banner">BANNER</div>
        <div id="page_tab">
        <div id="candidate">CANDIDATE</div>
        <div id="info">INFO</div>
        <div id="opinion">OPINION</div>
        </div>
        <div id="campaign_violation">CAMPAIGN VIOLATION</div>
        <div id="calendar">CALENDAR</div>
        <div id="article">ARTICLE</div>
        <div id="social_media">SOCIAL MEDIA</div>
        </div>
        </body>

    <!-- Assuming we don't need regular DB sidebar -->

    <!-- TODO: What ads do we have to display? This one? <?php get_template_part('ad','smallbanner'); ?>--> 

	<?php get_template_part('ad','side'); ?>

    
	
</div><!-- end div#usac page -->      


<?php get_footer(); ?>
