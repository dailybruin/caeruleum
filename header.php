<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php if (current_theme_supports('bootstrap-responsive')) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0"><?php } ?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
  <link href='https://cdn.jsdelivr.net/animatecss/3.4.0/animate.min.css' rel='stylesheet'/>
  <!--<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>-->
  
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/img/favicons/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/img/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/img/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/img/favicons/favicon-16x16.png" sizes="16x16">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-TileImage" content="/img/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
	
	<link rel="apple-touch-icon" href="/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114-precomposed.png" />
  <script src="//cdn.rawgit.com/namuol/cheet.js/master/cheet.min.js"type="text/javascript"></script>

  <!--<script src="//monitor404.s3.amazonaws.com/monitor404.min.js"></script>
  <script>_404_SETTINGS = {exclude: '#wpadminbar a, .dropdown-toggle'}</script>-->

  <meta name="apple-itunes-app" content="app-id=548832108">

  <?php roots_head(); ?>
  <?php wp_head(); ?>
  
	<!-- Press Plus script -->  
	<script type="text/javascript" src="http://s.ppjol.net/pp.js">{
		'zone':"qnbBZ63hK_pL2086YoKj3J",
		'mode':"meter",
		'debug':0
	}</script>

  <!-- Wordpress Open Graph -->
  <?php if(has_post_thumbnail() && !(is_front_page())) :
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <meta property="og:image" content="<?php echo $url; ?>" />
  <?php else: ?>
    <meta property="og:image" content="http://dailybruin.com/images/2014/01/facebook_default.jpg" />
  <?php endif; ?>
  
  <?php if(get_the_excerpt()) :
  	$excerpt = get_the_excerpt(); ?>
  	<meta property="og:description" content="<?php echo $excerpt; ?>"/>
  <?php endif; ?>

</head>

<body <?php body_class(); ?>>

<!-- facebook like button code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=269701246422391";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php roots_header_before(); ?>
  <?php get_template_part('templates/header', 'default'); ?>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
  <!-- close these in footer -->

