<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
        <div class="page-header">
          <h1>
            <?php
              $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
              if ($term) {
                echo $term->name;
              } elseif (is_post_type_archive()) {
                echo get_queried_object()->labels->name;
              } elseif (is_day()) {
                printf(__('Daily Archives: %s', 'roots'), get_the_date());
              } elseif (is_month()) {
                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
              } elseif (is_year()) {
                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
              } elseif (is_author()) {
                global $post;
                $author_id = $post->post_author;
                printf(__('Author Archives: %s', 'roots'), get_the_author_meta('display_name', $author_id));
              } else {
                single_cat_title();
              }
            ?>
          </h1>
        </div><!-- end div.page-header -->
        <?php get_template_part('loop', 'category'); ?>
      </div><!-- end div#post-listing -->
      
      
      
	<aside class="span4" id="sidebar" role="complementary">
		<div id="sidebar-inside">
			<div class="visible-desktop" id="side-ad">
<!-- 									<iframe id='a1b65622' name='a1b65622' src='http://www.oncampusweb.com/delivery/afr.php?zoneid=162&amp;cb=893274237927328048530' framespacing='0' frameborder='no' scrolling='no' width='300' height='250'><a href='http://www.oncampusweb.com/delivery/ck.php?n=a04df0d6&amp;cb=893274237927328048530' target='_blank'><img src='http://www.oncampusweb.com/delivery/avw.php?zoneid=162&amp;cb=893274237927328048530&amp;n=a04df0d6' border='0' alt='' /></a></iframe> -->
				<img class="ad visible-desktop" src="http://placehold.it/300x250&text=ADVERTISEMENT" />
			</div>

						
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
      
      
    </div><!-- end div#archive-content -->
<?php get_footer(); ?>