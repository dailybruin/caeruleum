<?php/*
Template Name: World Insight 2015
*/ ?>
<?php get_header(); ?>

<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		} // end while
	} // end if
?>



<style>
a {
  color: #0080c6;
}
.main-video {
  max-width: 50rem;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 2rem;
  margin-top: 2rem;
}

.main-video img {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.main-video h2{
  margin-bottom: 1rem;
}
.header-text {
  font-size: 1rem;
  font-family: arial;
  margin-left: 2rem;
  margin-right: 2rem;
}

.body {
  margin-top: 2rem;
  margin-bottom: 2rem;
  max-width: 65rem;
  margin-left: auto;
  margin-right: auto;
  padding-left: 2rem;
  padding-right: 2rem;
}

.db-off-canvas-wrap {
	background-color: #EBEBEB;
}

.body .where {
  border-top: 4px lightgrey dotted;
  margin-top: 2rem;
  padding-top: 1rem;
  max-width: 60rem;
  margin-left: auto;
  margin-right: auto;
}
.body h2 {
  font-size: 2rem;
  margin-bottom: 1.5rem;
}
.body h3 {
  font-size: 1.4rem;
  line-height: 1.5;
  font-family: 'Fjalla One', sans-serif;
  text-align: center;
}
.body .title {
  font-size: 2rem;
  text-align: center;
  margin-bottom:2rem;
  font-family: 'Fjalla One', sans-serif;
}
.body p {
  margin-bottom: 0.2rem;
  line-height: 1.7;
  font-size: 0.7rem;
  font-family: sans-serif;
  text-align: center;
}

.body section #major {
	font-size: 0.7rem;
}

.body section #role {
	font-style: italic; 
}

.body section #credits {
	margin-top: 0.5rem;
	font-size: 0.6rem;
	text-align: center;
	font-family: arial;
}

.body img {
  max-height: 150px;
  width: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 2rem;
}
.db-ad-leaderboard {
  display: none;
}
.below-header {
  display: none !important;
}
.where .row {
  margin-top: 3rem;
}

#hawaiidiv {
	margin-top: 0;
}

section audio {
	margin-top: 1rem;
	width: 100%;
}

.audio-section {
	background-color: #C2C2C2;
	padding: 0.9rem;
	word-wrap: break-word;
	border-radius: 1rem;
	margin-bottom: 2rem;
	height: 26rem;
  	-webkit-transition: all ease-in 0.3s;
    -moz-transition: all ease-in 0.3s;
    -o-transition: all ease-in 0.3s;
    transition: all ease-in 0.3s;
}

.audio-section:hover {
	background-color: #C2D6D6;
	-webkit-transition: all ease-in 0.3s;
    -moz-transition: all ease-in 0.3s;
    -o-transition: all ease-in 0.3s;
    transition: all ease-in 0.3s;
}
/*
section #hawaii-president {
	display: inline-block;
	width: 7.9rem;
	margin-left: 0.1rem;
}*/

#wis-logo-credit {
	font-size: 0.7rem;
	text-align: right;
	font-family: arial;
	padding-right: 1rem;
	color: gray;
}
</style>

<?php get_footer(); ?>