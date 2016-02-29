<aside class="span3" id="sidebar" role="complementary">
	<div id="sidebar-inside">
<!--       	<?php get_template_part('ad','side'); ?>
 -->      	<div id="sidebar-reference"> </div>
		<!-- <div class="sidebar-menu hidden-phone"> -->
			<!-- <hr> -->
	        <!-- <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?> -->
	        <img id="spectrum-logo" src="https://files.slack.com/files-pri/T04FG3WDC-F0NVDRWB0/spectrum_logo.png"/>
	        <div id="spectrum-all" class="row sidebar-spectrum">
				<a class="sidebar-category small-3 columns" onclick="filterPhotos('')">All Stories</a>
				<a class="sidebar-category small-3 columns" onclick="filterPhotos('.ae-spectrum')">A&E</a>
		        <a class="sidebar-category small-3 columns" onclick="filterPhotos('.news-spectrum')">News</a>
		        <a class="sidebar-category small-3 columns" onclick="filterPhotos('.sports-spectrum')">Sports</a>
	        </div>
	        <div id="spectrum-single" class="row sidebar-spectrum">
				<a class="sidebar-category small-12 columns" href="/category/blog/spectrum/">Back to Home</a>
	        </div>
	        <!-- <hr /> -->
            <a class="sidebar-link" href="/category/photo-galleries">Archive</a> 
	        <a class="sidebar-link" href="/about-spectrum"> <?php _e( 'About Spectrum', 'gryphondor' ); ?></a>
     	 <!--</div>--><!--sidebar-menu-->

     	 <script>
     	 	if(window.location.pathname == "/category/blog/spectrum/" || window.location.pathname == "/category/blogs/spectrum/"){
     	 		$("#spectrum-single").remove();
     	 	}
     	 	else {
     	 		$("#spectrum-all").remove();
     	 	}
     	 </script>
  </div>
</aside>
