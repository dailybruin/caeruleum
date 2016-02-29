<aside class="span3" id="sidebar" role="complementary">
	<div id="sidebar-inside">
<!--       	<?php get_template_part('ad','side'); ?>
 -->      	<div id="sidebar-reference"> </div>
		<!-- <div class="sidebar-menu hidden-phone"> -->
			<!-- <hr> -->
	        <!-- <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?> -->
	        <a href="/category/blogs/spectrum"><img id="spectrum-logo" src="https://files.slack.com/files-pri/T04FG3WDC-F0NVDRWB0/spectrum_logo.png"/></a>
	        <div class="row sidebar-spectrum">
						<a class="sidebar-category small-3 columns" onclick="filterPhotos('')">ALL</a>
						<a class="sidebar-category small-3 columns" onclick="filterPhotos('.ae-spectrum')">A&E</a>
		        <a class="sidebar-category small-3 columns" onclick="filterPhotos('.news-spectrum')">NEWS</a>
		        <a class="sidebar-category small-3 columns" onclick="filterPhotos('.sports-spectrum')">SPORTS</a>
		        <div>
            	<a class="sidebar-link" href="/category/photo-galleries">ARCHIVE</a> 
	        		<a class="sidebar-link" href="/about-spectrum"> <?php _e( 'ABOUT SPECTRUM', 'gryphondor' ); ?></a>
	        	</div>
	        </div>
	        <!-- <hr /> -->
     	 <!--</div>--><!--sidebar-menu-->
  </div>
</aside>