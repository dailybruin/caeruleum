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
