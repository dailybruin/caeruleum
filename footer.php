
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" role="contentinfo">
    <?php roots_footer_inside(); ?>
    <!-- DB FOOTER -->
    <?php 
    	$news_cat = 14;
    	$ae_cat = 4;
    	$sports_cat = 29;
    	$opinion_cat = 21;
    	$blogs_cat = 10;
    	$prime_cat = 28;
    ?>
    		<div class="container">
			<img src="/img/nameplate-black.png" id="bottom-logo" />
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
					<h3>Media</h3>
					<ul>
						<li><a href="#">A closer look</a></li>
						<li><a href="#">Campus</a></li>
						<li><a href="#">Crime</a></li>
						<li><a href="#">Science &amp; Health</a></li>
						<li><a href="#">Student Government</a></li>
						<li><a href="#">Westwood</a></li>
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
					<h3>Share</h3>
					<?php wp_nav_menu(array('theme_location'=>'share_footer')); ?>
				</div>
				<div class="footer-links span2">
					<h3>About</h3>
					<?php wp_nav_menu(array('theme_location'=>'about_footer')); ?>
				</div>
				<div class="footer-links span2">
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