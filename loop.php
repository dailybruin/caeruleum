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
<?php
        $args = array( 'tag' => 'db-story-sp' );
        $i=0;
        $lastposts = get_posts( $args );
        foreach( $lastposts as $post ) :  setup_postdata($post); 
        if(++$i > 3) break;?>
    <?php if ($firstArticle): ?>
      <div class="db-story-m medium-8 columns">
        <div class="db-story-m1">
          <span class="db-section-date">
            <h4><?php the_category(', ');?></h4> 
            <h4>|</h4> 
            <h5><?php the_time('F j, g:i a');?> </h5>
          </span>
          <div class="db-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-rotator'); ?></a>
                <p class="db-image-caption"><?php the_post_thumbnail_caption() ?>
                      </p>
          </div>
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
          </h2>
          <p>
            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
          </p>
        </div>
      </div>
      <?php $firstArticle = false; ?>
    <?php else :?>
      <div class="db-story-m medium-4 columns">
        <div class="row">
          <div class="db-story-m2 medium-12 small-6 columns">
            <span class="db-section-date">
              <h4><?php the_category(', ');?></h4> 
              <h4>|</h4> 
              <h5><?php the_time('F j, g:i a');?> </h5>
            </span>
            <div class="db-image">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-rotator'); ?></a>
            </div>
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
            </h3>
          </div>
        </div>
      </div>
    <?php endif; ?>

<?php endforeach; ?>
<div class="row">


</div>
<hr>
<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
        	<h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
      
      <div class="entry-content">
      	<?php the_audio(); ?>
		<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>

    <?php if(has_post_thumbnail()): ?>
    <p class="db-image-caption">Photo: <?php the_post_thumbnail_caption() ?>
                      </p>
    <?php endif; ?>
    </div>
    </article>
  </div>
  <hr>
<?php endwhile; /* End loop */ ?>
</br>
<?php        
$total_pages = $wp_query->max_num_pages;  
if ($total_pages > 1) {  
  $current_page = max(1, get_query_var('paged'));  ?>
<div class="pagination-centered"> 
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
