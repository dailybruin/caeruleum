<?php get_header(); ?>

<div class="row" id="single-post">
	<div class="span8" id="post">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->
	
	<aside class="span4" id="sidebar" role="complementary">
		<?php get_sidebar(); ?>
	</aside><!-- end aside#sidebar -->


</div><!-- end div#single-post -->      


<?php get_footer(); ?>