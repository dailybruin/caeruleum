	<div class="container hidden-phone">
	<hr />
	<div class="row">
		<div class="span12 hidden-mobile" id="banner-bottom"
			><?php // make sure there is no whitespace here for the ad to display correctly ?></div><!-- end div#banner-bottom -->
	</div>
	<div class="row hidden-phone" id="paidadvertising">
		<div class="span12">
			<h4>Paid Advertising</h4>
			<ul class="paidadvertising-list">
				<?php wp_list_bookmarks(array(
					'title_li'			=>	__(''),
					'title_before'		=>	'',
					'title_after'		=>	'',
					'category_before'	=>	'',
					'category_after'	=> 	'',
					'categorize'		=>	0,
					'before'			=>	'<li class="span3">'
				)); ?>
				<br style="clear:both" />
			</ul>
		</div><!-- end div.span12 -->
	</div><!-- end div#paidadvertising -->
	</div><!-- end div.container -->



	</div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" role="contentinfo">
    <?php roots_footer_inside(); ?>
    <!-- DB FOOTER -->
    <?php 
    	$news_cat = get_category_by_slug('news')->term_id;
    	$ae_cat = get_category_by_slug('ae')->term_id;
    	$sports_cat = get_category_by_slug('sports')->term_id;
    	$opinion_cat = get_category_by_slug('opinion')->term_id;
    	$blogs_cat = get_category_by_slug('blogs')->term_id;
    	$prime_cat = get_category_by_slug('prime')->term_id;
    	$multimedia_cat = get_category_by_slug('multimedia')->term_id;
    ?>
    		<div class="container">
			<div class="row footer-nav">
				<div class="footer-links span2">
					<h3><a href="<?php echo get_category_link( $news_cat ); ?>"><?php echo get_the_category_by_ID( $news_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $news_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					</ul>
					<h3><a href="<?php echo get_category_link( $ae_cat ); ?>"><?php echo get_the_category_by_ID( $ae_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $ae_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					</ul>
				</div>
				<div class="footer-links span2">
					<h3><a href="<?php echo get_category_link( $sports_cat ); ?>"><?php echo get_the_category_by_ID( $sports_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $sports_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					</ul>
				</div>
				<div class="footer-links span2">
					<h3><a href="<?php echo get_category_link( $opinion_cat ); ?>"><?php echo get_the_category_by_ID( $opinion_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $opinion_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					</ul>
					<h3><a href="<?php echo get_category_link( $multimedia_cat ); ?>"><?php echo get_the_category_by_ID( $multimedia_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $multimedia_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					</ul>
				</div>
				<div class="footer-links span2">
					<h3><a href="<?php echo get_category_link( $prime_cat ); ?>"><?php echo get_the_category_by_ID( $prime_cat ); ?></a></h3>
					<h3><a href="<?php echo get_category_link( $blogs_cat ); ?>"><?php echo get_the_category_by_ID( $blogs_cat ); ?></a></h3>
					<ul>
					<?php $cat_args = array(
							'child_of' => $blogs_cat,
							'orderby' => 'name',
							'hide_empty' => 0,
							'title_li' => ''
						);
						wp_list_categories($cat_args);
					?>
					<li><a href="http://mojo.dailybruin.com">Mojo</a></li>
					</ul>
					<h3><a href="#">Classifieds</a></h3>					
				</div>
				<div class="footer-links span4 about">
					<h3>About</h3>
					<?php wp_nav_menu(array('theme_location'=>'about_footer')); ?>
					
					<br />
					
					<?php wp_nav_menu(array('theme_location'=>'share_footer')); ?>
					
					<?php dynamic_sidebar( 'Footer' ); ?>
				</div>
			</div>
			<span class="copyright">Content copyright &copy; <?php echo date('Y'); ?> the Daily Bruin</span>
		</div><!-- end div.container -->
    
    
    <!-- END DB FOOTER -->
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
	<span style="clear:both;display:block;"></span>

</body>
	<span style="clear:both;display:block;"></span>

</html>