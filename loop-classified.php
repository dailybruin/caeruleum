<?php /* Start loop */ ?>
<div class="row">
	<div class="span2" id="classified-categories">
		<h4>Ads by classification</h4>
		<?php wp_list_categories(array(
				'taxonomy' => 'classification',
				'hierarchical' => false,
				'title_li' => ''
			)); ?>
		<?php get_template_part('ad','tower'); ?>
	</div><!-- end div#classified-categories -->

	<div class="span6" id="classified-ads">
	
		<?php // FRONT PAGE ?>
		<?php if (!is_tax()) : ?>
		<div class="page-header">
			<h1>Daily Bruin Classified Ads</h1>
		</div>	
		<strong style="display:block;margin-bottom:10px;">Featured ads:</strong>
		
			<?php
			$args = array(
				'post_type' => 'classifieds',
				'featured' => 'Featured',
				'post_status' => 'publish',
				'numberposts' => -1,
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
			<h1><a href="/classifieds/">&laquo; Daily Bruin Classified Ads</a></h1>
			<h3><?php wp_title(''); ?></h3>
		</div>


		<?php while (have_posts()) : the_post(); ?>
		    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		    	<?php $customFields = get_post_custom(); ?>
				<div class="row entry-content">
					<div class="span6">
						<?php the_content(); ?>
					</div><!-- end div.span6 -->
		
				</div><!-- end div.entry-content -->
		    </article>
		<?php endwhile; /* End loop */ ?>
		<?php endif; ?>
		
	</div><!-- end div#classified-ads -->
</div><!-- end div.row -->