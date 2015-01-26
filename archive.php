<?php get_header(); ?>
<div class="row db-story">
    <div class="large-8 columns db-story-post">
        <div class="page-header">
          <h1>
            <?php
              $sectionPage = false;
              $mainSection = false;
              $multSection = false;
              $sectionTag = "";
              $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
              $categoryTitle = single_cat_title('',false);
              if ($term) {
                echo $term->name;
              } elseif (is_post_type_archive()) { 
                echo get_queried_object()->labels->name;
              } elseif (is_day()) {
                printf(__('Daily Archives: %s', 'roots'), get_the_date());
              } elseif (is_month()) {
                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
              } elseif (is_year()) {
                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
              } elseif (is_author()) {
                printf(__('Author Archives: %s', 'roots'), get_the_author());
              } else {
                $sectionPage = true;
                switch ($categoryTitle)
                {
                	case "Bruin Sights":
                		the_blog_banner('bruinsights');
                		break;
                	case "Spotlight":
                		the_blog_banner('spotlight');
                		break;
                	case "Timestamp":
                		the_blog_banner('timestamp');
                		break;
                  case "Idle Thoughts":
                    the_blog_banner('two-cents-idle-thoughts');
                    break;
                  case "Political Commentary":
                    the_blog_banner('two-cents-political-commentary');
                    break;
                  case "Social Commentary":
                    the_blog_banner('two-cents-social-commentary');
                    break;
                	default:
                		echo $categoryTitle;
                }
                switch ($categoryTitle)
                {
                  case "News":
                    $sectionTag = "db-story-ns";
                    $mainSection = true;
                    break;
                  case "Sports":
                    $sectionTag = "db-story-sp";
                    $mainSection = true;
                    break;
                  case "Opinion":
                    $sectionTag = "db-story-op";
                    $mainSection = true;
                    break;
                  case "A&amp;E":
                    $sectionTag = "db-story-ae";
                    $mainSection = true;
                    break;
                  default:
                    break;
                }
                switch ($categoryTitle)
                {
                  case "Video":
                    $sectionTag = "db-story-m2";
                    $multSection = true;
                    break;
                  case "Radio":
                    $sectionTag = "db-story-m3";
                    $multSection = true;
                    break;
                  default:
                    break;
                }
                // Separate case for sports as its name is the same as several other categories
                $cat = get_category(get_query_var('cat'));
                if ($cat->slug == 'sports-two-cents')
                {
                  the_blog_banner('two-cents-sports');
                }
              }
            ?>
          </h1>
          <?php
          if($sectionPage):
                $categoryID = get_query_var('cat');
  	    		$cat_args = array(
					'child_of' => $categoryID,
					'orderby' => 'name',
					'hide_empty' => 1,
					'title_li' => ''
				);
				$categories = get_categories($cat_args);
				if(!empty($categories)): ?>
					<dl class="sub-nav">
					<?php wp_list_categories($cat_args); ?>
					</dl>
				<?php endif;
			endif; ?>
          
          <?php if(is_author()): ?>
			<p><?php the_author_meta('description'); ?></p>
			<?php if(!get_the_author_meta('graduated')) : ?>					
				<?php if(get_the_author_meta('twitter_handle')) : ?>
				<a href="https://twitter.com/<?php echo substr(get_the_author_meta('twitter_handle'),1); ?>" class="twitter-follow-button" data-show-count="false">Follow <?php the_author_meta('twitter_handle'); ?></a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<?php endif; ?>
				<a class="author-email-inside" href="mailto:<?php the_author_meta('user_email'); ?>"><i class="ticon-email"></i>Email</a>
			<?php endif; ?>
          
          
              
          <?php endif; ?>

<!-- Main writing section centerpiece -->
    <?php
          if($mainSection): ?>
<?php $firstArticle = true; ?>
<?php
        $args = array( 'tag' => $sectionTag );
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
<?php endif; ?>

<!-- Multimedia section centerpiece -->
<?php if($multSection): ?>
<?php
        $args = array( 'tag' => $sectionTag );
        $i=0;
        $lastposts = get_posts( $args );
        foreach( $lastposts as $post ) :  setup_postdata($post); 
        if(++$i > 1) break;?>
      <div class="db-story-m medium-10 columns">
      <h1>
        <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
      </h1>
        <div class="db-story-m1">
          <span class="db-section-date">
            <h4><?php the_category(', ');?></h4> 
            <h4>|</h4> 
            <h5><?php the_time('F j, g:i a');?> </h5>
          </span>
            <?php the_content(); ?>
        </div>
      </div>
      <?php $firstArticle = false; ?>
<?php endforeach; ?>
<?php endif; ?>


        </div><!-- end div.page-header -->
        <?php get_template_part('loop', 'category'); ?>
      </div><!-- end div#post-listing -->
      
      
      
<?php get_template_part('sidebar'); ?>      
      
    </div><!-- end div#archive-content -->
<?php get_footer(); ?>