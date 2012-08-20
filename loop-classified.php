<?php /* Start loop */ ?>
<div class="row">
	<div class="span2" id="classified-categories">
		<h3>More ads</h3>
		<?php wp_list_categories(array(
				'taxonomy' => 'classification',
				'hierarchical' => false,
				'title_li' => ''
			)); ?>
	</div><!-- end div#classified-categories -->

	<div class="span6" id="classified-ads">
	
		<?php // FRONT PAGE ?>
		<?php if (!is_tax()) : ?>
		<div class="page-header">
			<h1>Daily Bruin Classified Ads</h1>
		</div>	
			<?php
			$args = array(
				'post_type' => 'db_classified',
				'featured' => 'Featured',
				'post_status' => 'publish'
			);
			$featuredAds = get_posts( $args );
			foreach( $featuredAds as $post ) :	setup_postdata($post);						
			$classification = array_shift(get_the_terms($post->ID, 'classification')); ?>
		    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<p><?php echo get_the_content(); ?> &bull; <a href="<?php echo get_term_link($classification); ?>"><?php echo $classification->name; ?></a></p>
			</article>
			<?php endforeach; ?>

		
		<?php // CATEGORIES ?>
		<?php else : ?>
		<div class="page-header">
			<h2><a href="http://dailybruin.com/db_classified/">Daily Bruin Classified Ads</a></h2>
			<h3><?php wp_title(''); ?></h3>
		</div>


		<?php while (have_posts()) : the_post(); ?>
		    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		    	<?php $customFields = get_post_custom(); ?>
				<div class="row entry-content">
					<div class="span6 post-content">
						<?php the_content(); ?>
					</div><!-- end div.post-content -->
		
				</div><!-- end div.entry-content -->
		    </article>
		<?php endwhile; /* End loop */ ?>
		<?php endif; ?>
		
	</div><!-- end div#classified-ads -->
</div><!-- end div.row -->