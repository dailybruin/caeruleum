<?php /* Start loop */ ?>
<div class="row">
	<div class="small-3 columns" id="classified-categories">
		<h1>Ads by classification</h1>
		<?php wp_list_categories(array(
				'taxonomy' => 'classification',
				'hierarchical' => false,
				'title_li' => ''
			)); ?>
		
	</div><!-- end div#classified-categories -->

	<div class="small-9 columns" id="classified-ads">
	
		<?php // FRONT PAGE ?>
		<?php if (!is_tax()) : ?>
			<h1>Daily Bruin Classified Ads</h1>
			<hr>
		<h1 style="display:block;margin-top:20px;margin-bottom:10px;">Featured ads:</h1>
		
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
			<h1><?php wp_title(''); ?><a href="/classifieds/" class="right">&laquo; Daily Bruin Classified Ads</a></h1>
			<hr>
		</br>
		</div>

        <?php global $query_string; ?>
        <?php query_posts($query_string . '&posts_per_page=-1'); ?>
		<?php while (have_posts()) : the_post(); ?>
		    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		    	<?php $customFields = get_post_custom(); ?>
				<div class="row entry-content">
					<div class="small-12 columns">
						<?php the_content(); ?>
						<hr>
					</div><!-- end div.span6 -->
		
				</div><!-- end div.entry-content -->
		    </article>
		<?php endwhile; /* End loop */ ?>
		<?php endif; ?>
		
	</div><!-- end div#classified-ads -->
</div><!-- end div.row -->
