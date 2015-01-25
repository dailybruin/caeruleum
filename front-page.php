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
                    <?php the_headline(); ?>
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
              <div class="db-story-m1">
                <span class="db-section-date">
                  <h4>Sports</h4>
                  <h4>|</h4>
                  <h5>Dec 8, 9:18PM</h5>
                </span>
                <div class="db-image">
                  <img class="db-image-no-margin" src="http://placehold.it/1024x768">
                </div>
                <h2>
                  UC announces plans to expand educational outreach at the White House
                </h2>
              </div>
            </div>
            <div class="db-story-m large-3 medium-4 columns">
              <div class="row">
                <div class="db-story-m2 medium-12 small-6 columns">
                  <span class="db-section-date">
                    <h4>Radio</h4>
                    <h4>|</h4>
                    <h5>Dec 8, 9:18PM</h5>
                  </span>
                  <div class="db-image">
                    <img class="db-image-no-margin" src="http://placehold.it/1024x768">
                  </div>
                  <h3>
                    Joe Bruin Rallies Support from Students for Mascot Challenge
                  </h3>
                </div>
                <div class="db-story-m3 medium-12 small-6 columns">
                  <span class="db-section-date">
                    <h4>Video</h4>
                    <h4>|</h4>
                    <h5>Dec 8, 9:18PM</h5>
                  </span>
                  <div class="db-image">
                    <img class="db-image-no-margin" src="http://placehold.it/1024x768">
                  </div>
                  <h3>
                    Joe Bruin Rallies Support from Students for Mascot Challenge
                  </h3>
                </div>
              </div>
            </div>
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
						<div id="front-multimedia">
							<a href="/category/multimedia/"><h3>Multimedia &raquo;</h3></a>
							<ul class="sections">
								<li><a href="/category/spectrum/">Photos</a></li>
								<li><a href="/category/multimedia/video/">Videos</a></li>
								<li><a href="/category/multimedia/radio/">Radio</a></li>
							</ul>
							<div class="multimedia-item" id="multimedia-item-1">
								<?php
								$args = array( 'numberposts' => 1, 'tag' => 'db-story-m1' );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('db-multimedia'); ?>
									<span class="multimedia-title"><?php the_headline(); ?></span>
								</a>
								<?php endforeach; ?>
							</div><!-- end div#multimedia-item-1 -->
							<div class="multimedia-item" id="multimedia-item-2">
								<?php
								$args = array( 'numberposts' => 1, 'tag' => 'db-story-m2' );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('db-multimedia'); ?>
									<span class="multimedia-title"><?php the_headline(); ?></span>
								</a>
								<?php endforeach; ?>
							</div><!-- end div#multimedia-item-2 -->
							<span style="width:100%;display:block;clear:both;"></span>
							<a id="spectrum-refer" href="/spectrum/">
    						    <span id="spectrum-refer-explain">Photojournalism by the Daily Bruin.</span>
    						    <img id="spectrum-refer-logo" src="/img/spectrum-shadow.png" />
    						    <br style="width:100%; clear:both; display:block;" />
    						</a><!-- end a#spectrum-refer -->
						</div><!-- end div#front-multimedia -->
					</div><!-- end div.span5 -->
					<div class="span3" id="front-secondarycol">
						<!-- story tag db-story-a -->
						<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-a' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<article>
							<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
							<a href="<?php the_permalink(); ?>"><h1 class="headline-a"><?php the_headline(); ?></h1></a>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<span style="display:block;clear:both" />
						</article>
						<?php endforeach; ?>
						
						
						<!-- story tag db-story-b -->
						<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-b' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<article>
							<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
							<a href="<?php the_permalink(); ?>"><h1 class="headline-b"><?php the_headline(); ?></h1></a>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<span style="display:block;clear:both" />
						</article>
						<?php endforeach; ?>

						<ul id="d-stories-desktop" class="visible-desktop">
							<!-- stories tagged db-story-d1 through db-story-d3 -->
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-d1' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                            <li>
                                <span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="headline-d"><?php the_headline(); ?></span>
                                </a>
                            </li>
							<?php endforeach; ?>
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-d2' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                            <li>
                                <span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="headline-d"><?php the_headline(); ?></span>
                                </a>
                            </li>
							<?php endforeach; ?>
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
                            <li>
                                <span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="headline-d"><?php the_headline(); ?></span>
                                </a>
                            </li>
							<?php endforeach; ?>
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'sponsored-post' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
	                        <li>
	                            <a href="<?php the_permalink(); ?>">
	                                <span class="headline-d"><?php the_headline(); ?></span></a>
	                                <p><?php echo get_the_excerpt(); ?></p>
	                            </a>
	                        </li>
							<?php endforeach; ?>

						</ul><!-- end ul#d-stories-desktop -->						
					</div><!-- end div#front-secondarycol -->
				</div><!-- end div.row  inner row -->
				
				<div class="row hidden-desktop">
					<div class="span8">
						<!-- stories tagged db-story-d1 through db-story-d3 -->
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d1' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_headline(); ?></span>
						</a>
						<?php endforeach; ?>
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d2' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_headline(); ?></span>
						</a>
						<?php endforeach; ?>
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_headline(); ?></span>
						</a>
						<?php endforeach; ?>

					</div><!-- end div.span8 -->
				</div><!-- end div.row -->
				
				
				<div class="row">

					<div class="span8 front-section" id="front-news">
						<a href="/category/news/"><h3>News &raquo;</h3></a>
						<ul class="sections">
							<li><a href="/category/news/student-government/">Student gov</a></li>
							<li><a href="/category/news/campus/">Campus</a></li>
							<li><a href="/category/news/crime/">Crime</a></li>
						</ul>
						<div class="row front-section-content clearfix">
							<div class="span5 front-section-main">
								<?php
								$args = array( 'numberposts' => 1, 'tag' => 'db-story-ns' );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<span class="headline-d hidden-desktop"><?php the_headline(); ?></span>
									<?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?>
									<span class="headline-d visible-desktop"><?php the_headline(); ?></span><span class="section-date"><?php the_time('M j'); ?></span>

								</a>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list large-section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
									$lastposts = get_posts( $args );
									foreach( $lastposts as $post ) :	setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>">
										<span class="headline-d"><?php the_headline(); ?></span></a>
									<span class="section-date"><?php the_time('M j'); ?></span>
									</li>
								<?php endforeach; ?>
								</ul>
							</div><!-- end div.front-section-more -->
						</div><!-- end div.front-section-content -->
					</div><!-- end div#front-news -->
					
                    
					<div class="span8 front-section" id="front-sports">
						<a href="/category/sports/"><h3>Sports &raquo;</h3></a>
						<ul class="sections">
							<li><a href="/category/sports/football/">Football</a></li>
							<li><a href="/category/sports/mens-basketball/">Men's Basketball</a></li>
							<li><a href="/category/sports/womens-basketball/">Women's Basketball</a></li>
						</ul>
						<div class="row front-section-content clearfix">
							<div class="span5 front-section-main">
								<a class="visible-phone" id="phone-football-refer" href="https://itunes.apple.com/lb/app/bruin-football-by-ucla-daily/id548832108?mt=8&ign-mpt=uo%3D2">
									<span>Download the Bruin Football iPhone app &raquo;</span>
								</a>

								<?php
								$args = array( 'numberposts' => 1, 'tag' => 'db-story-sp' );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?>
									<span class="headline-d"><?php the_headline(); ?></span><span class="section-date"><?php the_time('M j'); ?></span>
								</a>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list large-section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => $sports_cat, 'tag__not_in' => $frontPageTags );
									$lastposts = get_posts( $args );
									foreach( $lastposts as $post ) :	setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>">
										<span class="headline-d"><?php the_headline(); ?></span></a>
									<span class="section-date"><?php the_time('M j'); ?></span>
									</li>
								<?php endforeach; ?>
								</ul>
							</div><!-- end div.front-section-more -->
						</div><!-- end div.front-section-content -->
					</div><!-- end div#front-sports -->
					
					
					<div class="span4 front-section" id="front-ae">
						<a href="/category/arts-entertainment/"><h3>A&E &raquo;</h3></a>
						<ul class="sections">
							<li><a href="/category/arts-entertainment/">All A&E stories</a></li>
						</ul>
						<div class="clearfix front-section-main">
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-ae' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('db-section-cover-small', array('class'=>'section-cover-small')); ?>
								<span class="headline-d"><?php the_headline(); ?></span><span class="section-date"><?php the_time('M j'); ?></span>
							</a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 2, 'cat' => $ae_cat, 'tag__not_in' => $frontPageTags );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<span class="headline-d"><?php the_headline(); ?></span></a>
								<span class="section-date"><?php the_time('M j'); ?></span>
								</li>
							<?php endforeach; ?>
							</ul>
						</div><!-- end div.front-section-more -->
					</div><!-- end div#front-ae -->


					<div class="span4 front-section" id="front-opinion">
						<a href="/category/opinion/"><h3>Opinion &raquo;</h3></a>
						<ul class="sections">
							<li><a href="/category/opinion">All opinion stories</a></li>
						</ul>
						<div class="clearfix front-section-main">
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-op' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('db-section-cover-opinion', array('class'=>'section-cover-opinion')); ?>
								<span class="headline-d"><?php the_headline(); ?></span><span class="section-date"><?php the_time('M j'); ?></span>
							</a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 3, 'cat' => $opinion_cat, 'tag__not_in' => $frontPageTags );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<span class="headline-d"><?php the_headline(); ?></span></a>
								<span class="section-date"><?php the_time('M j'); ?></span>
								</li>
							<?php endforeach; ?>
								<li id="front-cartoon-link"><a href="/category/editorial-cartoons/">View this week&rsquo;s editorial cartoon</a></li>
							</ul>
						</div><!-- end div.front-section-more -->
					</div><!-- end div#front-opinion -->
				</div><!-- end div.row -->
				
				<?php wp_reset_query(); ?>

				<div class="row" id="featuredProject">
					<div class="span8">
						<div>
							 <h3>Wake of the Storm</h3>
							 <ul class="sections">
							 	<li><a href="/features/">More features</a></li>
							 </ul>
							 <span style="display:block;width:100%;clear:both;"></span>
							 <img src="http://dailybruin.com/images/features/THUMBS/yolanda_thumb.jpg" />
                             <p>Read our feature series about recovery efforts in the Philippines, which was devastated by a super typhoon last November. UCLA student donations played a part in the relief missions of several aid agencies in the wake of the storm. The Daily Bruin spent 19 days in the Philippines talking to typhoon survivors and relief organizations. The reporting in the Philippines was made possible by the <a href="http://www.rememberingbridget.com/" target="_blank">Bridget O’Brien Scholarship Foundation</a>, which is in its seventh year of funding UCLA journalism with global reach and local impact.</p>
							 <a href="http://yolanda.dailybruin.com/" class="featuredlink">View the stories, videos, and graphics &nbsp;&raquo;</a>
							 <span style="display:block;width:100%;clear:both"></span>
						</div>
					</div><!-- end div#featuredProject -->
				</div><!-- end div.row -->
			</div><!-- end div#front-maincol -->	
							
				
				
				
				
			<?php get_template_part('sidebar'); ?>			
		</div><!-- end div#topcontent -->





		
	</div><!-- end div.container -->

<?php get_footer(); ?>
