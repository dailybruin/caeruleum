<?php get_header(); ?>

<?php
	// IMPORTANT: set these for your particular wordpress installation
	// This includes db-story-a, db-story-b, db-story-c1, db-story-c2,
	// db-story-c3, db-story-c4, db-story-m1, db-story-m2, db-story-d1,
	// db-story-d2, db-story-d3, db-story-ns, db-story-op, db-story-ae,
	// db-story-sp
	$frontPageTags = array('4847','4859','4850','4849','4851','4853','4855','4862','4863','4861','4854','4860','4856','4858','4857','4865');
		
	$news_cat = get_category_by_slug('news')->term_id;
	$ae_cat = get_category_by_slug('arts-entertainment')->term_id;
	$sports_cat = get_category_by_slug('sports')->term_id;
	$opinion_cat = get_category_by_slug('opinion')->term_id;
?>
						
	<div class="row db-story">
        <div class="large-6 medium-8 large-push-2 medium-push-4 columns db-story-center">
		<?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-c1' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
          <div class="db-story-c1">
            <div class="db-image text-center">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
              <p class="db-image-caption text-left">
                <?php the_post_thumbnail_caption() ?>
              </p>
            </div>
            <span class="db-section-date">
              <h4><?php the_category_text(get_the_category()); ?></h4> 
              <h4>|</h4> 
              <h5><?php the_time('F j, g:i a');?> </h5>
            </span>
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
            </h2>
            <?php the_byline_front(); ?>
            <p>
              <?php echo get_the_excerpt();  ?>
            </p>
          </div>
          <hr style="border-top: medium double lightgrey;">
        <?php endforeach; ?>
          <hr class="show-for-small-only">
          <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-c2' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
          <div class="row db-story-c2">
            <div class="db-image small-5 columns">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
            </div>
            <div class="small-7 columns">
              <span class="db-section-date">
	              <h4><?php the_category_text(get_the_category()); ?></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
              </span>
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
              </h2>
              <?php the_byline_front(); ?>
              <p>
                <?php echo get_the_excerpt();  ?>
              </p>
            </div>
          </div>
          <?php endforeach; ?>    
        </div>

            <hr class="show-for-small-only">
            <div class="large-2 medium-4 large-pull-6 medium-pull-8 columns db-story-side">
           	<?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-a' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div class="db-story-a">
                <span class="db-section-date">
	              <h4><?php the_category_text(get_the_category()); ?></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
                <?php the_byline_front(); ?>
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
              <hr>
            <?php endforeach; ?>
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-b' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-b">
                <span class="db-section-date">
	              <h4><?php the_category_text(get_the_category()); ?></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
                <?php the_byline_front(); ?>
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
              <hr>
            <?php endforeach; ?>
             <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-d1' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-d">
                <span class="db-section-date">
	              <h4><?php the_category_text(get_the_category()); ?></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
              <hr>
            <?php endforeach; ?>
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-d2' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-e">
                <span class="db-section-date">
	              <h4><?php the_category_text(get_the_category()); ?></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            </div>

            <?php endforeach; ?>

            <div class="large-4 columns db-story-breaking">
              <div>
                <h1>Breaking</h1>
              </div>
              <div class="row db-divide"></div>
             <div class="row">
              <?php // Breaking posts
				$args = array( 'tag' => 'breaking' );
				$i=0;
				$lastposts = get_posts( $args );
				foreach( $lastposts as $post ) : 	setup_postdata($post); 
				if(++$i > 4) break;?>
                <div class="db-story-breaking-1 large-12 medium-6 columns">
                  <span class="db-section-date">
                    <h4><?php the_category_text(get_the_category()); ?></h4> 
	              	<h4>|</h4> 
	              	<h5><?php the_time('F j, g:i a');?> </h5>
                  </span>
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                  <hr>
                </div>
				<?php endforeach; ?>
              </div>
              <div class="row db-divide hide-for-medium hide-for-small"></div>
              <div class="db-ad-rectangle hide-for-medium hide-for-small">
                <?php get_template_part('ad','side'); ?>
              </div>
            </div>
    </div>
    <div class="row db-divide"></div>
         <div class="row db-story">
            <div class="db-story-m large-5 medium-8 columns">
              <div>
                <h1><i class="fa fa-youtube-play fa-fw fa-lg"></i>&nbsp;Multimedia</h1>
              </div>
			<?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-m1' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div class="db-story-m1">
                <span class="db-section-date">
                    <h4><?php the_category_text(get_the_category()); ?></h4> 
	              	<h4>|</h4> 
	              	<h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <div class="db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </div>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <?php the_byline_front(); ?>
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
            <?php endforeach; ?>
            </div>
            <div class="db-story-m large-3 medium-4 columns">
              <div class="row">
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-m2' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                <div class="db-story-m2 medium-12 small-6 columns">
                <span class="db-section-date">
                    <h4><?php the_category_text(get_the_category()); ?></h4> 
	              	<h4>|</h4> 
	              	<h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <div class="db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </div>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <?php the_byline_front(); ?>
              <?php endforeach; ?>
              </div>
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-m3' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                <div class="db-story-m3 medium-12 small-6 columns">
                  <span class="db-section-date">
                    <h4><?php the_category_text(get_the_category()); ?></h4> 
	              	<h4>|</h4> 
	              	<h5><?php the_time('F j, g:i a');?> </h5>
                  </span>
                <div class="db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </div>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <?php the_byline_front(); ?>
            </div>
            <?php endforeach; ?>
              </div>
            </div>

            
            <div class="large-4 show-for-large-up columns db-classifieds">
           		<div class="db-classifieds-header">
                	<h1><i class="fa fa-comments-o fa-fw fa-lg"></i>&nbsp;Featured Classifieds</h1>
            		<div class="row db-divide"></div>
            	</div>
            	
            	  <ul>
				      <?php
				      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('test-sidebar') ) :
				      endif; ?>
				   </ul>
			</div>
	</div>
    <div class="row db-divide"></div>

	<div class="row db-story">
            <div class="large-3 medium-6 columns db-sum">
              <div>
                <h1><i class="fa fa-newspaper-o fa-fw fa-lg"></i>&nbsp;News</h1>
              </div>
			<?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-ns' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div class="db-story-ns row">
              	<div class="text-center">
	              	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
	            </div>
                <!-- <div class="small-6 columns"> -->
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h4>
                  <p>
                  	<?php echo get_the_excerpt();  ?>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->
                  
                <!-- </div> -->

              </div>
            <?php endforeach; ?>
            <hr>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h4>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum">
              <div>
                <h1><i class="fa fa-lightbulb-o fa-fw fa-lg"></i>&nbsp;Opinion</h1>
              </div>
              <div class="db-story-op row">
             <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-op' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<div class="text-center">
	              	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
	            </div>
                <!-- <div class="small-6 columns"> -->
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h4>
                  <p>
                  	<?php echo get_the_excerpt();  ?>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->
                  
                <!-- </div> -->
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $opinion_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h4>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum">
              <div>
                <h1><i class="fa fa-film fa-fw fa-lg"></i>&nbsp;A&amp;E</h1>
              </div>
              <div class="db-story-ae row">
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-ae' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<div class="text-center">
	              	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
	            </div>
                <!-- <div class="small-6 columns"> -->
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h4>
                  <p>
                  	<?php echo get_the_excerpt();  ?>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->
                  
                <!-- </div> -->
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $ae_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h4>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum">
              <div>
                <h1><i class="fa fa-soccer-ball-o fa-fw fa-lg"></i>&nbsp;Sports</h1>
              </div>
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-sp' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-sp row">
				<div class="text-center">
	              	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
	            </div>
                <!-- <div class="small-6 columns"> -->
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h4>
                  <p>
                  	<?php echo get_the_excerpt();  ?>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->
                  
                <!-- </div> -->
              </div>
            <?php endforeach; ?>  
            <hr>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $sports_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h4>
                <hr>
              </div>
            <?php endforeach; ?>
          </div>
      </div>

		<div class="row db-story">
			<div class="db-divide"></div>
            <div class="db-story-fe large-8 large-push-4 hide-for-small columns">
            <div class="row">
              <div class="db-ad-banner hide-for-medium hide-for-small">
                <?php get_template_part('ad','smallbanner'); ?>
              </div>
          </div>
              <div>
                <h1>Featured Stories</h1>
              </div>
              <div class="db-image db-story-fe1">
                <img src="http://placehold.it/1024x682">
                <h2>Featured stories slider here.</h2>
              </div>
            </div>
            </br>
            

            <div class="db-poll large-4 large-pull-8 columns db-poll">
              <div class="row">
                <div class="large-12 medium-6 columns">
                  <div>
                    <h1>Opinion Poll</h1>
                  </div>
                  <hr>
                  	<?php the_widget('WP_Widget_Polls'); ?>
                </div>

                <hr class="hide-for-medium">
                <div class="large-12 medium-6 columns text-center">
                  <img src="http://placehold.it/320x300">
                </div>
              </div>
            </div>
				</div>
				<?php wp_reset_query(); ?>
	</div><!-- end div.container -->

<?php get_footer(); ?>