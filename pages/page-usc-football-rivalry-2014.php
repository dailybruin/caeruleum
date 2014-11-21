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
		/*background-color:#E7E8E7;*/
	}

	.slick-slideshow {
		background-image: url("http://i.imgur.com/l7W8aUG.jpg");
	}

	.image {
		-webkit-box-shadow: 1px 1px 1px 1px #ccc;
    	-moz-box-shadow: 1px 1px 1px 1px #ccc;
    	box-shadow: 1px 1px 1px 1px #ccc;
    	border: 5px solid #fff;

    	width: 100%;
    	height: 400px;
	}


	.slick-prev:before, .slick-next:before {
  	  color:grey !important;
	}


	.storify {
		width: 100%;
		height: 1000px;
		overflow-y: scroll;
	}

	.box-caption {
		margin: 0 auto;

		background-color: rgba(30, 30, 30, 0.9);
    	position: relative;
    	color: white;
    	z-index: 110;
    	-webkit-transition: all 300ms ease-out;
    	-moz-transition: all 300ms ease-out;
    	-o-transition: all 300ms ease-out;
    	-ms-transition: all 300ms ease-out;
    	transition: all 300ms ease-out;

    	padding-top: 5px;

    	height: 100px;
    	width: 100%;
    	display: block;
    	bottom: 110px;
    	line-height: 25pt;
    	text-align: center;
    	border-left: 5px solid #fff;
    	border-bottom: 5px solid #fff;
    	border-right: 5px solid #fff;
    	opacity: 0.8;
	}

	.vertical-graphic {
		padding-top: 102px;
	}

	.box-caption:hover {
    	opacity: 1;
    	/*cursor: pointer;*/
	}
	.portrait {
		position:absolute;
		height:400px;
		z-index:105;
		bottom:115px;
		margin-left:215px;
	}



</style>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
		<img src= "http://dailybruin.com/images/2014/11/Web_banner-copy.jpg" style="padding-bottom: 15px">

		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<h1 style="padding-bottom: 15px">Scenes from Rivalry Week</h1>
			<div class="slick-slideshow">
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.uclastorefront.AYeo_.jpg">
					<span class="box-caption">
						<h4>1. UCLA Store Banner</h4>
						<p>During rivalry week, the UCLA Store hung a banner to promote the football game against USC at the Rose Bowl. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>) </p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/black-screene.jpg">
					<img class="portrait" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.shirts.AYEO_.jpg">
					<span class="box-caption">
						<h4>2. Beat UCLA Shirts</h4>
						<p>The Pertusati Bookstore at USC sold shirts with the words "BEAT UCLA" in anticipation of Saturday's game. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.hibernatebearAYeo.jpg">
					<span class="box-caption">
						<h4>3. Hibernating Bruin Bear</h4>
						<p>During rivalry week, the Bruin Bear "hibernates" in a black box, which wards off attempts at vandalizing the statue. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/black-screene.jpg">
					<img class="portrait" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.tommyjoe.AYEO_.jpg">
					<span class="box-caption">
						<h4>4. Tommy Trojan Duct Taped</h4>
						<p>Similar to how the Bruin Bear was covered in a black box to prevent vandalism, USC's Tommy Trojan was covered in duct tape to ward off would-be vandals. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.bears_.picA_.AYEO_.jpg">
					<span class="box-caption">
						<h4>5. Hanging Teddy Bears</h4>
						<p>The Pertusati Bookstore at USC was decorated with teddy bears dressed in UCLA T-shirts hung by their legs from the ceiling. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.uscballoon.AYeo_.jpg">
					<span class="box-caption">
						<h4>6. USC Balloons</h4>
						<p>The Ronald Tutor Campus Center at USC was decorated with cardinal and gold balloons during rivalry week. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.bears_.picB_.AYEO_.jpg">
					<span class="box-caption">
						<h4>7. More Hanging Teddy Bears</h4>
						<p>More teddy bears were hung from the Trojan-branded tailgating merchandise displays at the Pertusati Bookstore at USC. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/black-screene.jpg">
					<img class="portrait" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.sucshirt.AYEO_.jpg">
					<span class="box-caption">
						<h4>8. Trojans SUC</h4>
						<p>Fifth-year mechanical engineering student Derek Wun was interviewed by second-year undeclared student Ashley Gomez about selling 'Trojans SUC' shirts to raise funds for the UCLA Bruin Marching Band. (<em>Aubrey Yeo/Daily Bruin Senior Staff</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.football.pre_.FILE_.picB_.jpg">
					<span class="box-caption">
						<h4>9. UCLA - 2, USC - 0</h4>
						<p>The annual UCLA v. USC football game happens this Saturday. The Bruins are on a winning streak that started two years ago after a 38-28 victory over a Trojan team led by Matt Barkley (pictured). (<em>Daily Bruin File Photo</em>)</p>
					</span>
				</div>
				<div class="box">
					<img class="image" src="http://dailybruin.com/images/2014/11/web.sp_.11.21.2013bonfire.jpg">
					<span class="box-caption">
						<h4>10. Beat 'SC Bonfire</h4>
						<p>Despite the fact that the Beat 'SC Bonfire didn't happen this year due to protests, the annual event is an integral part of UCLA tradition. (<em>Daily Bruin File Photo</em>)</p>
					</span>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="vertical-graphic">
				<img src="http://dailybruin.com/images/2014/11/photofootball.png">
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
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
			<img src="http://dailybruin.com/images/2014/11/v3.11.21.sports.football.SCInsert.Pac12SouthScenarios.LOGOS_.web_.png">
		</div>
		<div class="span4" id="vertical-graphic">
			<div class="storify">
				<iframe src="//storify.com/dailybruin/name-the-usc-ucla-rivalry-game/embed?border=false"
					 frameborder="no" allowtransparency="true">
				</iframe>
				<script src="//storify.com/dailybruin/name-the-usc-ucla-rivalry-game.js?border=false">
				</script>
				<noscript>[<a href="//storify.com/dailybruin/name-the-usc-ucla-rivalry-game" target="_blank">View the story "Name the USC-UCLA Rivalry Game " on Storify</a>]</noscript>
			</div>
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
			slidesToShow: 1,
			slidesToScroll: 1
		});
	});
</script>
<?php get_footer(); ?>
