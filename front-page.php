<?php get_header(); ?>

<?php
	function the_post_thumbnail_caption() {
	  global $post;

	  $thumbnail_id    = get_post_thumbnail_id($post->ID);
	  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

	  if ($thumbnail_image && isset($thumbnail_image[0])) {
	    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
	  }
	}
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
              <p class="db-image-caption">
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
            <p>
              <?php echo get_the_excerpt();  ?>
            </p>
          </div>
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
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
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
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
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
                <h1><i class="fa fa-bolt fa-fw fa-lg"></i>&nbsp;Breaking</h1>
              </div>
              <hr>
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
                </div>
				<?php endforeach; ?>
              </div>
              <hr class="hide-for-medium hide-for-small">
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
              <?php endforeach; ?>
              </div>
              </div>
            </div>
            <?php the_widget('WP_Widget_Classifieds_widget'); ?>
            <div class="large-4 show-for-large-up columns db-classifieds">
              <div class="db-classifieds-header">
                <h1><i class="fa fa-comments-o fa-fw fa-lg"></i>&nbsp;Featured Classifieds</h1>
              </div>
              <hr>
              <div>
                <h6>
                  IVY LEAGUE ACHIEVERS Private in-home tutoring-all
                  subjects available! Browse through several tutors and
                  find the perfect candidate. Call us today 310-582-5931! •
                  Tutoring Offered
                </h6>
                <hr>
                <h6>
                  15k in Compensation We are a professional gay couple
                  looking for an educated egg donor between the ages of
                  20-30. You must be healthy, physically fit, attractive, and
                  a non-smoker. If you feel that you meet these requirements
                  and are interested please send pictures and a bio
                  to interestedeggdonor@gmail.com. All information to
                  remain confidential. • Sperm/Egg Donors
                </h6>
                <hr>
                <h6>
                  IVY LEAGUE ACHIEVERS Private in-home tutoring-all
                  subjects available! Browse through several tutors and
                  find the perfect candidate. Call us today 310-582-5931! •
                  Tutoring Offered
                </h6>
                <hr>
                <h6>
                  15k in Compensation We are a professional gay couple
                  looking for an educated egg donor between the ages of
                  20-30. You must be healthy, physically fit, attractive, and
                  a non-smoker. If you feel that you meet these requirements
                  and are interested please send pictures and a bio
                  to interestedeggdonor@gmail.com. All information to
                  remain confidential. • Sperm/Egg Donors
                </h6>
                <hr>
                <h6>
                  IVY LEAGUE ACHIEVERS Private in-home tutoring-all
                  subjects available! Browse through several tutors and
                  find the perfect candidate. Call us today 310-582-5931! •
                  Tutoring Offered
                </h6>
              </div>
            </div>
          </div>
    <div class="row db-divide"></div>

	<div class="row db-story">
            <div class="large-3 medium-6 columns">
              <div>
                <h1><i class="fa fa-newspaper-o fa-fw fa-lg"></i>&nbsp;News</h1>
              </div>
			<?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-ns' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div class="db-story-ns row">
                <div class="small-6 columns">
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <div class="small-6 columns db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?></a>
                </div>
              </div>
            <?php endforeach; ?>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns">
              <div>
                <h1><i class="fa fa-lightbulb-o fa-fw fa-lg"></i>&nbsp;Opinion</h1>
              </div>
              <div class="db-story-op row">
             <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-op' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                <div class="small-6 columns">
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <div class="small-6 columns db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?></a>
                </div>
              </div>
            <?php endforeach; ?>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns">
              <div>
                <h1><i class="fa fa-film fa-fw fa-lg"></i>&nbsp;A&amp;E</h1>
              </div>
              <div class="db-story-ae row">
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-ae' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                <div class="small-6 columns">
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <div class="small-6 columns db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?></a>
                </div>
              </div>
            <?php endforeach; ?>
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns">
              <div>
                <h1><i class="fa fa-soccer-ball-o fa-fw fa-lg"></i>&nbsp;Sports</h1>
              </div>
            <?php
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-sp' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-sp row">
                <div class="small-6 columns">
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <div class="small-6 columns db-image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?></a>
                </div>
              </div>
            <?php endforeach; ?>  
            <?php
			$args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <?php endforeach; ?>
          </div>

		<div class="row db-story">
            <div class="db-story-fe large-8 large-push-4 hide-for-small columns">
              <div class="db-ad-banner hide-for-medium hide-for-small">
                <?php get_template_part('ad','smallbanner'); ?>
              </div>
              <div>
                <h1></i>&nbsp;Featured Stories</h1>
              </div>
              <div class="db-image db-story-fe1">
                <img src="http://placehold.it/1024x682">
                <h2>Featured stories slider here.</h2>
              </div>
            </div>

            <div class="db-divide"></div>

            <div class="db-poll large-4 large-pull-8 columns">
              <div class="row">
                <div class="large-12 medium-6 columns">
                  <div>
                    <h1><i class="fa fa-question fa-fw fa-lg"></i>&nbsp;Opinion Poll</h1>
                  </div>
                  <hr>
                  <div class="db-poll-description">
                    <p>
                      In the wake of the deaths of both Michael Brown and
                      Eric Garner, many demonstrations and protests have
                      taken place in Berkeley and the surrounding areas.
                      Meanwhile, the UCLA community has not played a
                      significant role in these large scale protests. How do
                      you feel about this matter?
                    </p>
                  </div>
                  <div class="db-poll-options">
                    <ul>
                      <li>UCLA needs to amplify its student activism in order to
                        have a larger voice in national issues.
                      </li>
                      <li>While student activism can influence national issues, the
                        protests in Berkeley have yet to result in concrete change.
                      </li>
                      <li>Student activism has a limited impact on influencing
                        national issues and the UCLA community should focus on
                        tackling campus issues.
                      </li>
                      <li>I don't know how I feel about this matter.
                      </li>
                    </ul>
                  </div>
                </div>

                <hr class="hide-for-medium">
                <div class="large-12 medium-6 columns text-center">
                  <img src="http://placehold.it/320x300">
                </div>
              </div>
            </div>
				
				<?php wp_reset_query(); ?>
	</div><!-- end div.container -->

<?php get_footer(); ?>