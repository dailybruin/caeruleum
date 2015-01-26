<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) { ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php } ?>

<?php /* Start loop */ ?>
<div class="row"></div>

<?php 
    $categoryTitle = single_cat_title('',false);
    $multSection = false;
    switch ($categoryTitle)
                  {
                    case "Video":
                      $multSection = true;
                      break;
                    case "Radio":
                      $multSection = true;
                      break;
                    default:
                      break;
                  }
  ?>

<div class="row db-divide"></div>
<!-- NORMAL CATEGORY STORY LIST -->
<?php if(!($multSection)): ?>
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

<!-- MULTIMEDIA CATEGORY STORY LIST -->
<?php else: ?>
  <div class="row">
    <?php $storycount = 0?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="small-4 columns">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if(has_post_thumbnail()): ?>
              <div class="row">
                <a href="<?php the_permalink(); ?>">
                  <style scoped>
                      img {
                        border-radius:5px;-moz-border-radius: 5px;
                      }
                  </style>
                    <?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?>
                </a>
              </div>
              <div class="row" style="padding-left:0">
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
            </div>
            </div>
          <?php endif; ?>
          </article>
          </div>
        <?php if(++$i > 2): 
          $i=0;?>
          </div>
          <div class="row">
        <?php endif; ?>
      <!-- <hr> -->
    <?php endwhile; /* End loop */ ?>
  </div>
<?php endif; ?>


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
