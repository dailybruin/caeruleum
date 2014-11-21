<?php/*
Template Name: USC Football Rivalry 2014
*/ ?>
<?php get_header(); ?>

<?php 
	//Hardcode values
	$banner_image_url = get_field('banner_image');
	$stories_tag = "football-gameday-story-2014-usc";
	$feature_tag = "football-gameday-feature-2014-usc"; 
	$graphic_of_the_week = get_field('graphic_of_the_week');
?>

<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>

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
		margin-top: 10px;
		color: black;
		font-size: 1.5em;
	}

	.thumbnail {
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
	}

	.box {
		padding-left: 45px;
		padding-right: 45px;
		padding-top: 80px;
		margin-top:20px;
		background-color:#E7E8E7;
	}
	.image {
		-webkit-box-shadow: 1px 1px 1px 1px #ccc;  
    	-moz-box-shadow: 1px 1px 1px 1px #ccc;  
    	box-shadow: 1px 1px 1px 1px #ccc; 
    	border: 5px solid #fff; 

    	width: 600px;
    	height: 400px;
	}


	.slick-prev:before { 
  	  color:gold !important;
	}
	.slick-next:before { 
  	  color:blue !important;
	}

	.box-caption {
		margin: 0 auto;

		background-color: rgba(105,105,105,0.8);  
    	position: relative;  
    	color: white;  
    	z-index: 100;  
    	-webkit-transition: all 300ms ease-out;  
    	-moz-transition: all 300ms ease-out;  
    	-o-transition: all 300ms ease-out;  
    	-ms-transition: all 300ms ease-out;  
    	transition: all 300ms ease-out;  
    	
    	padding-top: 5px;

    	height: 70px;  
    	width: 100%;  
    	display: block;  
    	bottom: 80px;  
    	line-height: 25pt;  
    	text-align: center;
    	border-left: 5px solid #fff; 
    	border-bottom: 5px solid #fff;
    	border-right: 5px solid #fff;
    	opacity: 0.8;
	}

	.box-caption:hover {  
    	opacity: 1;  
    	/*cursor: pointer;*/
	}  
	/*.versus {
		position: absolute;
		margin-top: 320px;
		z-index:200;
		left: 50%;
    	margin-right: -50%;
    	transform: translate(-50%, -50%) }
	}*/
	
	
</style>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
		<img src="http://placehold.it/1300x150">
		<!-- <img src=<?php echo $banner_image_url; ?> >  -->
		</div>
	</div>
	<!-- <div class="versus">
		<img src="http://placehold.it/200x200">
	</div> -->
	<div class="slick-slideshow">
		<div class="box">
			<img class="image" src="http://placekitten.com/512/512">
			<span class="box-caption">
				<h4>asdfasdkl;fjals;dasdffdfjl;asdf</h4>
				<p>asdfa;sdf</p>
			</span>
		</div>
		<div class="box">
			<img class="image" src="http://placekitten.com/512/512">
			<span class="box-caption">
				<h4>asdfasdkl;fjals;dasdffdfjl;asdf</h4>
				<p>asdfa;sdf</p>
			</span>
		</div>
		<div class="box">
			<img class="image" src="http://placekitten.com/512/512">
			<span class="box-caption">
				<h4>asdfasdkl;fjals;dasdffdfjl;asdf</h4>
				<p>asdfa;sdf</p>
			</span>
		</div>
		<div class="box">
			<img class="image" src="http://placekitten.com/512/512">
			<span class="box-caption">
				<h4>asdfasdkl;fjals;dasdffdfjl;asdf</h4>
				<p>asdfa;sdf</p>
			</span>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<div class="span12" id="feature-story">
	            <?php 
					$args = array(
						'posts_per_page' => 1, 
						'tag' => $feature_tag);

					$posts = get_posts($args);

					foreach ($posts as $post) :
						setup_postdata($post);
						$categories = get_the_category($post->ID);
						echo the_post_thumbnail('large');

				?>
				<div class="feature-content">
					<h4>
					<span class="feature-author">
							By <?php the_author(); ?>
					</span>
					</h4>
					<div class="feature-title">
					<h2>
					<a class="heading" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
					</h2>

					</div>
				</div>
				<hr style="clear:both;"/>
				<?php
					endforeach; 
				?>
			</div>

			<div class="span12" id="nonfeature-stories">
	            <?php 
					$args = array(
						'tag' => $stories_tag);

					$posts = get_posts($args);

					foreach ($posts as $post) :
						setup_postdata($post);
						$categories = get_the_category($post->ID);

				?>
				<div class="nonfeature-stories">
					<div class="content">

					<?php if ( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>">
						<div class="thumbnail">
						<?php 
							echo the_post_thumbnail('medium');
						?>
						</div>
						</a>
					<?php endif; ?>
						<div class="nonfeature-stories-content">
							<a class="nonfeature-stories-title" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<div class="nonfeature-stories-author">
								By <?php the_author(); ?>
						</div>
						<div class="nonfeature-stories-description">
							<p><?php echo get_the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">More &#187;</a>
							</p>
						</div>
					</div>
				</div>
				<hr style="clear:both;" >
				<?php
					endforeach; 
				?>
			</div>
		</div>
		<div class="span4" id="vertical-graphic">
			<!--  ............  -->
		</div>
	</div>
</div>

<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.slick-slideshow').slick({
			arrows: true,
			// dots: true,
			infinite: true,
			speed: 500,
			slidesToShow: 2,
			slidesToScroll: 2
		});
	});
</script>
<?php get_footer(); ?>