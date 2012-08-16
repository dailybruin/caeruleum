<?php get_header(); ?>

<div class="row" id="single-post">
	<div class="span8" id="post">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->
	
	<aside class="span4" id="sidebar" role="complementary">
		<div id="sidebar-inside">
			<div class="hidden-tablet">
									<iframe id='a1b65622' name='a1b65622' src='http://www.oncampusweb.com/delivery/afr.php?zoneid=162&amp;cb=893274237927328048530' framespacing='0' frameborder='no' scrolling='no' width='300' height='250'><a href='http://www.oncampusweb.com/delivery/ck.php?n=a04df0d6&amp;cb=893274237927328048530' target='_blank'><img src='http://www.oncampusweb.com/delivery/avw.php?zoneid=162&amp;cb=893274237927328048530&amp;n=a04df0d6' border='0' alt='' /></a></iframe>
	<!-- 			<img class="ad visible-desktop" src="http://placehold.it/300x250&text=ADVERTISEMENT" /> -->
			</div>

			<div id="sidebar-similar">
				<div class="side-head">
					<h2><i class="ticon-rarrow"></i> Similar stories</h2>
				</div><!-- end div.side-head -->
			</div><!-- end div#sidebar-similar -->
		</div><!-- end div#sidebar-inside -->
		<?php //get_sidebar(); ?>
	</aside><!-- end aside#sidebar -->


</div><!-- end div#single-post -->      


<?php get_footer(); ?>