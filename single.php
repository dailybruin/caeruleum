<?php get_header(); ?>

<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="row" id="single-post">
	<div class="span12" id="post">
		<?php the_post() ?>
		<div class="page-header">
	      <h1>
	        <span class="photoblog-header-dashes">-</span> <?php 
	            _e('Blink');
	          ?> <span class="photoblog-header-dashes">-</span>
	      </h1>
	      <h2><?php _e('GOTCHA') ?></h2>

	    </div><!-- end div.page-header -->
		<div id="pb-gallery-block">
			<div id="pb-gallery-image">
				<?php $gallery = get_post_meta($post->ID, 'gallery', true);
				echo do_shortcode('[nggallery id='.$gallery.' template="galleryview"]');
				?>
			</div>
			<div class="photoblog-text" id="pb-gallery-text">
				<?php
					$cats = get_the_category();
					//$the_cat = get_the_category()[0];
					if ($cats) {
						foreach($cats as $cat){
							if ($cat->name != "Photoblog"){
								$the_cat = $cat;
								/*
								echo $cat->name;
								echo (": "); 
								the_title();*/
							}
						}
					}
					?>
					<h1>
					<a href="/category/photoblog/<?php echo($the_cat->slug) ?>">
						<?php echo $the_cat->name;
						echo (": "); 
						the_title();
						?>
					</a></h1> 

				<?php the_content(); ?>
				<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>

				<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
			</div>
		</div> <!--photoblog-post-block-->

	</div><!-- end div#post -->
	
	<?php /*
	<aside class="span4" id="sidebar" role="complementary">
		
		<div id="sidebar-inside">
		<?php get_template_part('ad','side'); ?>

			
			
			
			<?php get_sidebar(); ?>

			
			
			<div id="sidebar-popular">
				<div class="side-head">
					<h2><a href="#" id="popular-select" class="activetab" data-target="side-info-popular"><i class="ticon-eye"></i>Popular</a> <a href="#" id="commented-select" data-target="side-info-commented"><i class="ticon-personchat"></i>Most commented</a><br style="display:block;float:left;clear:both" /></h2>
				</div><!-- end div.side-head -->
				<div class="side-info" id="side-info-popular">
					<?php wpp_get_mostpopular('limit=5&range="weekly"&pages=0&wpp_start="<ul class=\'side-popularlist\' id=\'side-popularlist-popular\'>"&wpp_end="</ul>"&order_by="views"&do_pattern=1&pattern_form="{image} {title} {stats} Comment(s)"&thumbnail_selection="usergenerated"'); ?>
				</div>
				<div class="side-info" id="side-info-commented">
					<ul id="side-commented">
						<?php
							// From http://stackoverflow.com/questions/3328560/how-to-sort-posts-by-views-comments-rating-etc-wordpress
						    global $wpdb;
							$most_commented = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts WHERE post_type='post' AND post_status = 'publish' ORDER BY comment_count DESC LIMIT 0 , 5");
							foreach ($most_commented as $post) : setup_postdata($post); ?>
						<li><a href="<?php echo  get_permalink($post->ID); ?>"><?php the_title(); ?></a> <?php comments_number('0 Comments','1 Comment','% Comments'); ?></li>
							<?php endforeach; ?>
					</ul>
				</div><!-- end div#side-info-commented -->

			</div><!-- end div#sidebar-popular -->

		</div><!-- end div#sidebar-inside -->
	</aside><!-- end aside#sidebar -->
	*/ ?>


</div><!-- end div#single-post -->      
 


<?php get_footer(); ?>