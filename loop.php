<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) { ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php } ?>

<?php /* Start loop */ ?>
<?php $firstArticle = true; ?>
<?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<?php if($firstArticle): ?>
	        <?php if(has_post_thumbnail()): ?>
	      		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-full' ); ?></a>
	      	<?php endif; ?>
    		<?php $firstArticle = false; ?>
    	<?php else : ?>
	        <?php if(has_post_thumbnail()): ?>
	      		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
	      	<?php endif; ?>
    	<?php endif; ?>

      <div class="articlelist-head">
      	<span class="story-info"><span class="story-info-category"><?php the_category(', ');?></span> | <?php the_time('F n, Y'); ?></span>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div><!-- end div.article-head -->
      <div class="entry-content">
      	<?php the_audio(); ?>
		<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
    </article>
<?php endwhile; /* End loop */ ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php } ?>