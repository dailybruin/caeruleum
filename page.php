<?php get_header(); ?>
<div class="row" id="single-post">
	<div class="span8" id="post">
        <?php get_template_part('loop', 'page'); ?>
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      


<?php get_footer(); ?>