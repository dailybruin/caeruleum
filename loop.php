<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) { ?>
  <div class="medium-8 columns">
    <h3><?php _e('Sorry, no results were found.', 'roots'); ?></h3>
  </div>
<?php } ?>

<?php /* Start loop */ ?>

<?php 
    $categoryTitle = single_cat_title('',false);
    $multSection = false;
    $hasSidebar = true;

    $news_cat = get_category_by_slug('news')->term_id;
    $ae_cat = get_category_by_slug('arts-entertainment')->term_id;
    $sports_cat = get_category_by_slug('sports')->term_id;
    $opinion_cat = get_category_by_slug('opinion')->term_id;
    $video_cat = get_category_by_slug('video')->term_id;
    $radio_cat = get_category_by_slug('radio')->term_id;
    $photo_cat = get_category_by_slug('spectrum')->term_id;
    $spotlight_cat = get_category_by_slug('spotlight')->term_id;
    $twocents_cat = get_category_by_slug('two-cents')->term_id;

    switch ($categoryTitle)
    {
      case "Quad":
        $sectionTag = "db-story-quad";
        $section_cat = $news_cat;
        $first_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('campus-spectrum')->term_id) );
        $second_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('campus-spectrum')->term_id) );
        $third_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('campus-spectrum')->term_id) );
        $fourth_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('campus-spectrum')->term_id) );
        $side_names = array("Campus", "Humans of Westwood", "Sports", "Westwood/LA");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side);
        break;
      case "News":
        $sectionTag = "db-story-ns";
        $section_cat = $news_cat;
        $first_side = array( 'numberposts' => 2, 'cat' => $section_cat, 'tag' => 'breaking' );
        $second_side = array( 'numberposts' => 2, 'category__and' => array($section_cat, $video_cat) );
        $third_side = array( 'numberposts' => 1, 'tag' => 'long-story-short' );
        $fourth_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('campus-spectrum')->term_id) );
        $side_names = array("Breaking News", "News in Video", "Radio Show: Long Story Short", "News in Photo");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side);
        break;
      case "Sports":
        $sectionTag = "db-story-sp";
        $section_cat = $sports_cat;
        $first_side = array( 'numberposts' => 2, 'cat' => $section_cat, 'tag' => 'breaking' );
        $second_side = array( 'numberposts' => 2, 'category__and' => array($section_cat, $video_cat) );
        $third_side = array( 'numberposts' => 2, 'tag' => 'out-of-bounds' );
        $fourth_side = array( 'numberposts' => 2, 'category__and' => array($photo_cat, get_category_by_slug('sports-spectrum')->term_id) );
        $side_names = array("Breaking Sports", "Sports in Video", "Radio Show: Out of Bounds", "Sports in Photo");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side);
        break;
      case "Opinion":
        $sectionTag = "db-story-op";
        $section_cat = $opinion_cat;
        $first_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('two-cents')->term_id );
        $second_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('editorial-cartoons')->term_id  );
        $third_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('editorials')->term_id  );
        $fourth_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('community')->term_id  );
        $side_names = array("Our Two Cents", "Latest Editorial Cartoons", "From the Editorial Board", "From the Community");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side);
        break;
      case "A&amp;E":
        $sectionTag = "db-story-ae";
        $section_cat = $ae_cat;
        $first_side = array( 'numberposts' => 2, 'cat' => $spotlight_cat);
        $second_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('ae-columns')->term_id  );
        $third_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('music')->term_id  );
        $fourth_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('film-tv')->term_id  );
        $side_names = array("In the Spotlight", "From the Columnists", "Latest in Music", "Latest in Film/TV");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side);
        break;
      case "Spotlight":
        $section_cat = $spotlight_cat;
        $first_side = array( 'numberposts' => 2, 'category__and' => array($spotlight_cat, get_category_by_slug('music')->term_id) );
        $second_side = array( 'numberposts' => 2, 'category__and' => array($spotlight_cat, get_category_by_slug('film-tv')->term_id) );
        $third_side = array( 'numberposts' => 2, 'category__and' => array($spotlight_cat, get_category_by_slug('theater-arts')->term_id) );
        $side_names = array("Spotlight on Music", "Spotlight on Film/TV", "Spotlight on Theater/Arts");
        $side_args = array($first_side,$second_side,$third_side);
        break;
      case "Two Cents":
        $section_cat = $twocents_cat;
        $first_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('two-cents-video')->term_id );
        $second_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('social-commentary')->term_id );
        $third_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('political-commentary')->term_id );
        $fourth_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('idle-thoughts')->term_id );
        $fifth_side = array( 'numberposts' => 2, 'cat' => get_category_by_slug('sports-two-cents')->term_id );
        $side_names = array("Bruins on the Street", "Political Commentary", "Social Commentary", "Idle Thoughts", "Sports");
        $name_flare = array("cornflowerblue","purple","green","cadetblue","orange");
        $side_args = array($first_side,$second_side,$third_side,$fourth_side,$fifth_side);
        break;
      default:
        $hasSidebar = false;
        break;
    }
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
<?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>

<?php if(!$multSection): ?>
  <!-- NORMAL CATEGORY FRONT PAGE -->
  <?php if($paged == 1): ?>
  <?php if ($hasSidebar): ?>
  <div class="medium-8 columns section-left">
  <?php else: ?>
  <div class="small-12 columns section-left">
  <?php endif; ?>
    <?php
      if ($sectionTag != "") :
      $args = array( 'numberposts' => 1, 'tag' => $sectionTag );
      $lastposts = get_posts( $args );

      foreach( $lastposts as $post ) :  
        setup_postdata($post); 
        $excludePostId = get_the_ID(); ?>
      <div class="db-story-c1">
        <span class="db-section-date">
          <h4><?php the_category(', ');?></h4> 
          <h4>|</h4> 
          <h5><?php the_time('F j, g:i a');?> </h5>
        </span>
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
        </h2>
        <?php if(has_post_thumbnail()): ?>
        <div class="db-image db-section-cp text-center">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-category-full'); ?></a>
          <p class="db-image-caption text-left">
            <?php the_post_thumbnail_caption() ?>
          </p>
        </div>
        <?php endif; ?>
        <?php the_byline_front(); ?>
        <p>
          <?php echo get_the_excerpt();  ?>
        </p>
      </div>
      <hr style="border-top: medium double lightgrey;">
    <?php endforeach; ?>   
  <?php endif; ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php if ($post->ID !== $excludePostId): ?>
      <div class="row db-list">
          <?php if(has_post_thumbnail()): ?>
            <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
            </div>
            <div class="medium-8 small-12 columns" style="padding-left:0">
          <?php endif; ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <span class="db-section-date">
                      <h4><?php the_category(', ');?></h4> 
                      <h4>|</h4> 
                      <h5><?php the_time('F j, g:i a');?> </h5>
                      </span>
            	<h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
          
          <div class="entry-content">
          	<?php the_audio(); ?>
    		    <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
        </div>
        <?php if(has_post_thumbnail()): ?>
        </div>
          <div class="medium-4 columns hide-for-small">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
          </div>
        <?php endif; ?>
        </article>
      </div>
      <hr>
    <?php endif; ?>
    <?php endwhile; /* End loop */ ?>
    </div> 
    <?php if ($hasSidebar): ?>
    <div class="medium-4 columns db-section-side hide-for-small">
      
      <?php
      foreach( $side_args as $index => $args ) : ?>
      <?php if($name_flare){
        $color = $name_flare[$index];
      } else {
        $color = 'black';
      }?>

      <h4 style="color:<?php echo $name_flare[$index] ?>!important"><?php echo $side_names[$index] ?></h4>
      <?php
      $lastposts = get_posts( $args );
      foreach( $lastposts as $indexP => $post ) :  
        setup_postdata($post); 
      if ($indexP != 0) : ?>
      <hr>
    <?php endif ?>
      <?php if(has_post_thumbnail()): ?>
          <div class="row">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?>
            </a>
          </div>
        <?php endif; ?>
        <div class="row" style="padding-left:0">
            <span class="db-section-date">
                    <h5><?php the_time('F j, g:i a');?> </h5>
            </span>
            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
        </div>
      <?php endforeach; ?>
      <hr style="border-top: medium double lightgrey;">
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <?php else: ?>
  <!-- LIST -->

    <?php while (have_posts()) : the_post(); ?>
    <?php if ($post->ID !== $excludePostId): ?>
      <div class="db-list row">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if(has_post_thumbnail()): ?>
            <div class="hide-for-large hide-for-medium show-for-small text-center">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
            </div>
            <div class="medium-8 small-12 columns" style="padding-left:0">
          <?php endif; ?>
          
              <span class="db-section-date">
                      <h4><?php the_category(', ');?></h4> 
                      <h4>|</h4> 
                      <h5><?php the_time('F j, g:i a');?> </h5>
                      </span>
              <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
          
          <div class="entry-content">
            <?php the_audio(); ?>
        <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>

        <?php if(has_post_thumbnail() && has_post_thumbnail_caption()): ?>
        <p class="db-image-caption">Photo: <?php the_post_thumbnail_caption() ?>
                          </p>
          <?php endif; ?>  
          <?php if(has_post_thumbnail()): ?>
          </div>
            </div>
            <div class="medium-4 columns hide-for-small">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
            </div>
          <?php endif; ?>
        
        </article>
      </div>
      <hr>
    <?php endif; ?>
    <?php endwhile; /* End loop */ ?>
  <?php endif; ?>

<!-- MULTIMEDIA CATEGORY STORY LIST -->
<?php else: ?>
  <? if ($categoryTitle == "Video"): ?>
  <div class="row">
    <?php $i=0; 
          $j=0;
    while (have_posts()) : the_post(); ?>
    <?php if ($j==0): ?>
        <div class="medium-12 columns">
        <h2 class="db-large-title">
          <a href="<?php the_permalink(); ?>"> <?php the_headline(); ?></a>
        </h2>
          <div class="db-story-m1">
            <span class="db-section-date">
              <h4><?php the_category(', ');?></h4> 
              <h4>|</h4> 
              <h5><?php the_time('F j, g:i a');?> </h5>
            </span>
              <?php the_content(); ?>
          </div>
        </div>
        <hr>
      <?php ++$j; ?>
    <?php else: ?>
      <?php if ($i==0): ?>
        <div class="row">
      <?php endif; ?>
        <div class="small-4 columns">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if(has_post_thumbnail()): ?>
                <div class="row">
                  <a href="<?php the_permalink(); ?>">
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
                <?php if(has_post_thumbnail()): ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
              <?php else: ?>
                <h2 class="db-large-title text-center" style="margin: 1rem 0;">
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <?php endif; ?>
                <div class="entry-content">
                  <?php the_audio(); ?>
                    <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
                </div>
            <?php if(has_post_thumbnail()): ?>
              </div>
            <?php endif; ?>
            </article>
            </div>
          <?php if(++$i > 2): 
            $i=0;?>
            </div>
          <?php endif; ?>
        <!-- <hr> -->
    <?php endif; ?>
    <?php endwhile; /* End loop */ ?>
  </div>
<? elseif ($categoryTitle == "Radio"): ?>
  <div class="row">
    <?php $i=0; 
          $j=0;
    while (have_posts()) : the_post(); ?>
    <?php if ($j==0): ?>
      <div class="db-story-c1">
        <span class="db-section-date">
          <h4><?php the_category(', ');?></h4> 
          <h4>|</h4> 
          <h5><?php the_time('F j, g:i a');?> </h5>
        </span>
        <h2 class="db-large-title">
          <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
        </h2>
        <div class="db-image db-section-cp text-center">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-mult-full'); ?></a>
          <p class="db-image-caption text-left">
            <?php the_post_thumbnail_caption() ?>
          </p>
        </div>
        <?php the_byline_front(); ?>
        <?php the_audio(); ?>
      </br>
        <p>
          <?php echo get_the_excerpt();  ?>
        </p>
      </div>
        <hr>
      <?php ++$j; ?>
    <?php else: ?>
      <?php if ($i==0): ?>
        <div class="row">
      <?php endif; ?>
        <div class="small-6 columns">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if(has_post_thumbnail()): ?>
                <div class="db-section-thumb row text-center">
                  <a href="<?php the_permalink(); ?>">
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
              <?php if(has_post_thumbnail()): ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
              <?php else: ?>
                <h2 class="db-large-title text-center" style="margin: 2rem 0;">
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <?php endif; ?>
                <div class="entry-content">
                  <?php the_audio(); ?>
                    <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
                </div>
            <?php if(has_post_thumbnail()): ?>
              </div>
            <?php endif; ?>
            </article>
            </div>
          <?php if(++$i > 1): 
            $i=0;?>
            </div>
          <?php endif; ?>
        <!-- <hr> -->
    <?php endif; ?>
    <?php endwhile; /* End loop */ ?>
  </div>
  <?php endif; ?>
<?php endif; ?>


</br>
<?php        
$total_pages = $wp_query->max_num_pages;  
if ($total_pages > 1) {  
  $current_page = max(1, get_query_var('paged'));  ?>

  <?php
$big = 999999999; // need an unlikely integer
   $pages = paginate_links(array(
      'posts_per_page' => 7,
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),  
      'format' => '/page/%#%',  
      'current' => $current_page,  
      'total' => $total_pages,  
      'prev_text' => '&laquo; Prev',  
      'next_text' => 'Next &raquo;'  
    )); ?>

 <?php if($paged == 1 && $hasSidebar ): ?>
<div class="large-8 columns db-pagination pagination-centered"> 
<?php else: ?>
  <div class="large-12 columns db-pagination pagination-centered"> 
  <?php endif; ?>
    <?php echo $pages; ?>
  </div><!-- end div.pager -->
<?php
} 
?>
