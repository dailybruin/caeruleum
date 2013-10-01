<aside class="span3" id="sidebar" role="complementary">
	<div id="sidebar-inside">
      	<?php get_template_part('ad','side'); ?>
      	<div id="sidebar-reference"> </div>
		<div class="sidebar-menu hidden-phone">
			<hr />
	        <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?>
	        <hr /> 
	        <a id="sidebar-about-link" href="/spectrum-about"> <?php _e( 'About Spectrum', 'gryphondor' ); ?></a>
     	 </div><!--sidebar-menu-->
  </div>
</aside>
