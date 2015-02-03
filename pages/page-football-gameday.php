<?php/*
Template Name: Football Gameday
*/ ?>
<?php get_header(); ?>
<?php 
	$banner_image_url = get_field('banner_image');
	$stories_tag = get_field('gameday_stories_tag');
	$feature_tag = get_field('featured_story_tag'); 
	$graphic_of_the_week = get_field('graphic_of_the_week');
	$comparing_stats_graphic = get_field('comparing_stats_graphic');
?>

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


</style>

<div class="container">
	<div class="row">
		<div class="large-12 columns">
		<img src=<?php echo $banner_image_url; ?> > 
		</div>
	</div>
	<div class="row">
		<div class="large-8 columns">
			<div class="large-12 columns" id="feature-story">
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

			<div class="large-12 columns" id="nonfeature-stories">
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

		<div class="large-4 columns">
			<div class="row">
				<div class="large-12 columns">
					<h2>Graphic of the Week</h2>
					<img src=<?php echo $graphic_of_the_week; ?> > 
				</div>

				<div class="large-12 columns">
					<!-- <h2>Comparing Stats</h2> --> <!--
					<img src=<?php echo $comparing_stats_graphic; ?> > 

				</div>
			</div>
		</div>
-->
	<!-- <?php get_sidebar(); ?>-->
	</div>
</div>






<?php get_footer(); ?>

