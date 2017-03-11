<?php /*
Example template
Author: mitcho (Michael Yoshitaka Erlewine)
*/
?><?php if (have_posts()):?>
<div id="sidebar-similar" class="side-info">
	<div class="side-head">
		<h2><i class="ticon-rarrow"></i> Similar stories</h2>
	</div><!-- end div.side-head -->
		<ul>
			<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?><!-- (<?php the_score(); ?>)--></li>
			<?php endwhile; ?>
		</ul>
</div><!-- end div#sidebar-similar -->
<?php endif; ?>
