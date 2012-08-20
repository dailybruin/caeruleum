<?php get_header(); ?>

<div class="row" id="single-post">
	<div class="span8" id="post">
		<?php get_template_part('loop', 'classified'); ?>
	</div><!-- end div#post -->
	
	<aside class="span4" id="sidebar" role="complementary">
		<div id="sidebar-inside">
		
			<div id="place-ad">
				<div class="side-head">
					<h2>Place a Classified Ad</h2>
				</div><!-- end div.side-head -->
				<div class="side-info">
					<p>Daily Bruin classifieds are the best way to find qualified applicants for your job openings or rental vacancies. Your classified ad appears every day in the Daily Bruin and online and weekly in the Corsair, the campus newspaper at nearby Santa Monica City College.</p>
					<p>Deadline for placing an ad is 12 noon, one business day before publication. Payment must be received before deadline. In order to receive the flat rate, the ad must be 20 words or fewer. Anything with a space before and after is counted as one word. We reserve the right to edit ads.</p>
					<p>You can also order over the phone by calling <a href="tel:3108252221">310-825-2221</a>.</p>
					<p><a href="http://adpro.media.ucla.edu/online">Place a classified ad</a></p>


				</div><!-- end div.side-info -->
			</div><!-- end div#place-ad -->

		
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


</div><!-- end div#single-post -->      


<?php get_footer(); ?>