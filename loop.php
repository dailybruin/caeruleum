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
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<?php if($firstArticle): ?>
	        <?php if(has_post_thumbnail()): ?>
	      		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-full' ); ?></a>
	      	<?php endif; ?>
    		<?php $firstArticle = false; ?>
    	<?php endif; ?>

      <?php if(has_post_thumbnail()): ?>
        <div class="small-4 columns">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
        </div>
        <div class="small-8 columns" style="padding-left:0">
      <?php endif; ?>
      
          <span class="db-section-date">
                  <h4><?php the_category(', ');?></h4> 
                  <h4>|</h4> 
                  <h5><?php the_time('F j, g:i a');?> </h5>
                  </span>
        	<!-- <span class="story-info"><span class="story-info-category"><?php the_category(', ');?></span> | <?php the_time('F j, Y'); ?></span> -->
          <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
      </div>
      <div class="entry-content">
      	<?php the_audio(); ?>
		<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>

    <?php if(has_post_thumbnail()): ?>
    <p class="db-image-caption">Photo: <?php the_post_thumbnail_caption() ?>
                      </p>
    <?php endif; ?>
    </article>
  </div>
<?php endwhile; /* End loop */ ?>

<?php        
$total_pages = $wp_query->max_num_pages;  
if ($total_pages > 1) {  
  $current_page = max(1, get_query_var('paged'));  ?>
  <div class="pager"> 
  <?php echo paginate_links(array(  
      'base' => get_pagenum_link(1) . '%_%',  
      'format' => '/page/%#%',  
      'current' => $current_page,  
      'total' => $total_pages,  
      'prev_text' => '&larr; Prev',  
      'next_text' => 'Next &rarr;'  
    ));  ?>
  </div><!-- end div.pager -->
<?php
} 
?>
