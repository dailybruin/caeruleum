<?php/*
Template Name: Football Gameday Copy
*/ ?>
<?php get_header(); ?>
<?php 

$banner_image = get_field('banner_image');
$stories_tag = get_field('gameday_story');
$feature_tag = get_field('featured_story_tag'); 
$graphic_of_the_week = get_field('graphic_of_the_week');
$comparing_stats_graphic = get_field('comparing_stats_graphic');
?>

<!-- 1. Link to jQuery (1.8 or later), -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->


<!-- 2. Add images to <div class="fotorama"></div>. -->


<style>
	#feature-story {
		margin-top: 10px;
		position: relative;
	}

	.feature-content {
		position: absolute;
		bottom: 20px;
		background-color: rgba(255,255,255,0.6);
		display: inline;
		padding: 5px 10px;

	}

	.feature-content a {
		color: black;
	}
	.feature-author {
		float: left;
		text-align: left;
	}

	.feature-title a {
		float: left;
		text-align: left;

	}

	#nonfeature-stories {
		margin: 10px;
		position: relative;
		margin-left: 0px;
	}

	.nonfeature-stories-author {
		margin: 5px 0px;
		font-weight: bold;
	}
	.nonfeature-stories-content {
	}
	.nonfeature-stories-title {
		color: black;
		font-size: 1.5em;
	}

	.thumbnail {
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
	}

	.lef{
		float: left;
		margin-left: -10px;
	}

	.righ{
		float: right;
		margin-right: -10px;
	}
	.card{
		width:374px;
		height: 360px;

		margin-top: 30px;

	}

	.ctop{
		background-color: #2E86AB;
	}

	.cbot{
		background-color: #384E77;

	}

	.titlecard{
		height:60px;
		background-color: #40BCD8;
	}

	#cardimg{
		background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYEO0740.jpg") no-repeat fixed;
		height: 240px;
	}

	#cardimg1{
		background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYU_0703.jpg") no-repeat fixed;
		height: 240px;
	}

	#cardimg2{
		background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYEO0755.jpg") no-repeat fixed;
		height: 240px;
	}

	#cardimg3{
		background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYU_1481.jpg") no-repeat fixed;
		height: 240px;
	}

	.aft_game{
		display:;
	}

</style>

<div class="container">
	<div class="row">

<!--h
		<img src=<?php echo $banner_image; ?> >-->
		<img src="http://dailybruin.com/images/2014/10/colorado-banner.jpg">
		<div class="large-12 columns">
			<img src=<?php echo $banner_image_url; ?> > 

		</div>
	</div>
	<div class="row">
		<div class="large-8 columns">

			<br>
			<div class="fotorama">
				<img src="http://s.fotorama.io/1.jpg">
				<img src="http://s.fotorama.io/2.jpg">
				<img src="http://s.fotorama.io/3.jpg">
			</div>
			<?php $args= array(
			'tag' => $stories_tag) ?>
			<div class="large-12 columns" id="feature-story">
				<div class="card ctop lef">
					<div class="titlecard">
					<?php the_title(); ?>
					</div>
					<div id="cardimg">
						
					</div>
				</div>
				<div class="card ctop righ ">
					<div class="titlecard">
					</div>
					<div id="cardimg1">
						
					</div>
				</div>
				<br><br>
				<div class="card cbot lef aft_game">
					<div class="titlecard">
					</div>
					<div id="cardimg2">
						
					</div>
				</div>
				<div class="card cbot righ aft_game">
					<div class="titlecard">
					</div>
					<div id="cardimg3">	
					</div>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>









