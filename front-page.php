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
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-category-full'); ?></a>
              <p class="db-image-caption text-left">
                <?php the_post_thumbnail_caption() ?>
              </p>
            </div>
            <span class="db-section-date">
              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
			$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>  
              <div class="db-story-e">
                <span class="db-section-date">
	              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
	              <h4>|</h4> 
	              <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <?php endforeach; ?>
            </div>
            <div class="large-4 columns db-story-breaking">
              <div>
                <h1 class="text-center">Breaking</h1>
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
                    <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4> 
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
      <div class="row">
         <div class="db-story-m large-9 medium-12 columns hide-for-small">
         <span>
         	<div class="left">
                <h1><i class="fa fa-youtube-play fa-fw fa-lg"></i>&nbsp;Multimedia</h1>
            </div>
            <div class="right" style="line-height:3rem">
            	<h4 style="margin-left:15px"><a href="/category/video">&nbsp;Video</a></h4>
            	<h4 style="margin-left:15px"><a href="/category/radio">&nbsp;Radio</a></h4>
            	<h4 style="margin-left:15px"><a href="/category/spectrum">&nbsp;Photo</a></h4>
            </div>
        </span>
            <hr>
	        <ul id="multSlider">
	        <?php
			$args = array( 'numberposts' => 4, 'tag' => 'db-story-m1' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(250,50) ); 
			$url = $thumb['0']; ?>
			  <li class="center" data-thumb="<?php echo $url; ?>">
			  	<!-- 705px x 390px for mult -->
			    <?php the_post_thumbnail('db-mult-full'); ?>
			    <div class="front-mult">
				    <h1><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h1>
				</div>
			  </li>
			 <?php endforeach; ?>
			</ul>
			<hr>
		</div>

		<div class="db-story-m large-9 medium-12 columns show-for-small">
         <span>
         	<div class="left" style="margin-bottom:10px">
                <h1><i class="fa fa-youtube-play fa-fw fa-lg"></i>&nbsp;Multimedia</h1>
            </div>
            <div class="right hide-for-small" style="line-height:3rem">
            	<h4 style="margin-left:15px"><a href="/category/video">&nbsp;Video</a></h4>
            	<h4 style="margin-left:15px"><a href="/category/radio">&nbsp;Radio</a></h4>
            	<h4 style="margin-left:15px"><a href="/category/spectrum">&nbsp;Photo</a></h4>
            </div>
         </span>
         	<?php
			$args = array( 'numberposts' => 2, 'tag' => 'db-story-m1' );
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ) :	setup_postdata($post); ?>
              <div class="db-story-ns row">
              	<div class="text-center" style="margin-top:20px;">
	              	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
	              </br>
	            </div>
	            <h3 class="text-center">
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                 </h3>
                <!-- <div class="small-6 columns"> -->
              </div>
              <hr>
            <?php endforeach; ?>
		</div>

        <div class="db-story">
            <div class="large-3 show-for-large-up columns db-classifieds">
           		<div class="db-classifieds-header">
                	<h1><i class="fa fa-comments-o fa-fw fa-lg"></i>&nbsp;Featured Classifieds</h1>
            	</div>
            	
            	  <ul>
				      <?php
				      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('test-sidebar') ) :
				      endif; ?>
				   </ul>
			</div>
		</div>
	</div>
    <div class="row db-divide"></div>

	<div class="row db-story" data-equalizer>
            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/news">&nbsp;News</a></h1>
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
                  	<?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                  </p>
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

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/news">&nbsp;Opinion</a></h1>
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
                  	<?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
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

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/arts-entertainment">&nbsp;A&amp;E</a></h1>
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
                  	<?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
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

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/sports">&nbsp;Sports</a></h1>
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
                  	<?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
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
				<div class="row" id="featuredProject">
					<div style="padding: 5px 20px;">
						 <h1>Wake of the Storm</h1>
						 <a href="/features/" class="right"><h4>More features</h4></a>
						 <span style="display:block;width:100%;clear:both;"></span>
						 <img src="http://dailybruin.com/images/features/THUMBS/yolanda_thumb.jpg" />
		                 <p>Read our feature series about recovery efforts in the Philippines, which was devastated by a super typhoon last November. UCLA student donations played a part in the relief missions of several aid agencies in the wake of the storm. The Daily Bruin spent 19 days in the Philippines talking to typhoon survivors and relief organizations. The reporting in the Philippines was made possible by the <a href="http://www.rememberingbridget.com/" target="_blank">Bridget O’Brien Scholarship Foundation</a>, which is in its seventh year of funding UCLA journalism with global reach and local impact.</p>
						 <a href="http://yolanda.dailybruin.com/" class="featuredlink">View the stories, videos, and graphics &nbsp;&raquo;</a>
						 <span style="display:block;width:100%;clear:both"></span>
					</div>
				</div><!-- end div#featuredProject -->
				<div class="row">
		            <div class="db-ad-banner hide-for-medium hide-for-small">
		                <?php get_template_part('ad','smallbanner'); ?>
		            </div>
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
              </div>
            </div>
				</div>
				<?php wp_reset_query(); ?>
	</div><!-- end div.container -->

<?php get_footer(); ?>