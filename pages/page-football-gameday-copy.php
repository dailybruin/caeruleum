<?php/*
Template Name: Football Gameday Copy
*/ ?>
<?php get_header(); ?>
<?php 

$banner_image = get_field('banner_image');
$stories_tag = get_field('gameday_story');
$feature_tag = get_field('featured_story_tag'); 
$gallery = get_field('gallery');
$graphic_of_the_week = get_field('graphic_of_the_week');
$comparing_stats_graphic = get_field('comparing_stats_graphic');
global $nggdb;
$gallery1 = $nggdb->get_gallery($gallery, 'sortorder', 'ASC', true, 0, 0);

?>
<!--Links for data charts-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- 1. Link to jQuery (1.8 or later), -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
<!-- 2. Add images to <div class="fotorama"></div>. -->
<script type="text/javascript">
	google.load("visualization", "1.1", {packages:["bar"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['', 'Offense', 'Defense'],
			['RZ Scoring %', 37, 89],
			['3D Conversion %', 50, 50],
			['4D Conversion %', 81, 41],
			]);

		var options = {
			chart: {
				title: 'Overall Statistics',
				subtitle: 'Some sort of subheader',
			},
          bars: 'horizontal', // Required for Material Bar Charts.
          colors: ['#3284BF', '#FFE800']
      };

      var chart = new google.charts.Bar(document.getElementById('barchart_material'));

      chart.draw(data, options);
  }
</script>

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

	.card{
		width:374px;
		height: 390px;
		margin-top: inherit;
		margin-bottom: auto;
		display: inline-block;
		float: left;
		margin-left: 5px;
	}

	.ctop{
		background-color: rgb(50, 132, 191);
	}

	.cbot{
		background-color: #384E77;
	}

	.titlecard{
		height:60px;
		background-color: #40BCD8;
	}
	.title{
		font-family: 'Roboto Slab', serif;
		font-size: 1.2em;
		color: white; 
		margin-left: 10px;
		padding-top: 10px;
		margin-right: 10px;
		font-weight: bolder;
	}

	#cardimg{
		/*background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYEO0740.jpg") no-repeat fixed;*/
		height: 240px;
		width: auto;
		overflow: hidden;
		border-left: solid 5px #2E86AB;
		border-right: solid 5px #2E86AB;
	}

	.aft_game{
		display:;
	}

	.cont{
		margin-right: 10px; 
		margin-left: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
		font-family: 'Roboto Slab';
		font-size: 1em;
		color: white;
		text-align: justify;
		font-weight: 400;
		
	}
	.link{
		color: white !important;
		border-bottom: none;
	}

	.link:hover{

	}

	#gamedaystats{
		float: right;
		max-width: 380px;
		max-height: 600px;
		min-width: 380px;
		min-height: 600px;
	}

	#gamedaychart{
		background: white;
		border: black 1px solid;
		padding: 3px;
		max-height: 600px;
		overflow: scroll;
		overflow-x: hidden;
		padding:20px;
	}

	#statsTitle {
		font-size: 25px;
		color: white;
		background-color: black;
		padding: 10px;
		margin: -2px;
	}

	.sectionChart{
		width: 70%;
		max-width: 90%;
		margin-left: 20px;
		display: block;
	}

	.main{
		display: inline-block;
	}

</style>

<div class="container">
	<div class="row">
		<!--<img src=<?php echo $banner_image; ?> >-->
		<img src="http://dailybruin.com/images/2014/10/colorado-banner.jpg">
		<div class="large-12 columns">
			<img src=<?php echo $banner_image_url; ?> > 
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns main">
			<br>
			<div class="fotorama">
				<?php 
				foreach($gallery1 as $image) {
					echo "<img src='".$image->imageURL."'>";
				}?>
			</div>

			<div class="large-12 columns" id="feature-story">
				<?php 
				$args = array(
					'posts_per_page' => 4, 
					'tag' => $stories_tag);

				$posts = get_posts($args);
				foreach ($posts as $post) :
					setup_postdata($post);
				$categories = get_the_category($post->ID);
				?>

				<div class="card ctop">
					<div class="titlecard">
						<div class="title"><?php the_title(); ?></div>
					</div>
					<div id="cardimg">
						<?php echo the_post_thumbnail('large'); ?>
					</div>
					<p class="cont" >
						<?php $t = get_the_excerpt(); 
						echo  $t = substr($t, 0, strpos($t, '.'));?>...
						<a href="<?php the_permalink(); ?>" class = "link">More &#187;</a>
					</p>
				</div>
				<?php 
				endforeach; 
				?>
			</div>
		</div>

		<div class="large-4 columns">
			<br>
			<div id="gamedaystats">
				<div id="gamedaychart">
					<div id="barchart_material" style="width: 340px; height: 325px;"></div>
				</div>
			</div>
		</div>
	</div>









