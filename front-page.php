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

	<div class="container">		

		<div class="row" id="topcontent">
			<?php // Get ready for the C stories!! 
				$cstory[0] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c1' ) );
				$cstory[1] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c2' ) );
				$cstory[2] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c3' ) );
				$cstory[3] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c4' ) );
			?>
			<div class="span8" id="front-maincol">

				<?php
					// Set up livestream post
					$livestream_post = get_posts( array('numberposts' => 1, 'tag' => 'db-story-livestream'));
					if(!empty($livestream_post)):
						setup_postdata($livestream_post[0]);
				?>
					<style type="text/css">
						#front-livestream {
							margin-bottom:10px;
						}
						#front-livestream span.livestream-head {
						    font-size: 2.5em;
						    font-weight: bold;
						    line-height: 1em;
						    margin-bottom:10px;
						    display:block;
						}
						#front-livestream iframe {
							-moz-transform: scale(0.9);
							-webkit-transform: scale(0.9);
						}
						@media (min-width: 1200px) { 
							#front-livestream iframe {
								-moz-transform: scale(1);
								-webkit-transform: scale(1);
							}
						}
						@media (max-width: 979px) { 
							#front-livestream iframe {
								-moz-transform: scale(0.75);
								-moz-transform-origin: 0 0;
								-webkit-transform: scale(0.75);
								-webkit-transform-origin: 0 0;
								margin-bottom: -97px;							}
						}
					</style>
					<div id="front-livestream">
						<span class="livestream-head"><?php the_headline(); ?></span>
						<?php the_content(); ?>
					</div>
				<?php endif; ?>

				<?php // Breaking posts
				$args = array( 'tag' => 'breaking' );
				$lastposts = get_posts( $args );
				foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<div id="breaking">
					<a href="<?php the_permalink(); ?>"><span class="breaking-title"><?php the_headline(); ?></span></a> <span class="breaking-timestamp"><?php the_time('F j'); echo " at "; the_time('g:i a'); ?></span>
				</div><!-- end div#breaking -->
				<?php endforeach; ?>
				
				<div class="row">
					<div class="span5" id="front-primarycol">
						<div id="topcontent-rotator">
							<div id="topcontent-rotator-nav">
								<ul id="rotate-controls">
									<li id="rotate-label-1" class="rotate-current"><a href="#">1</a></li>
									<li id="rotate-label-2"><a href="#">2</a></li>
									<li id="rotate-label-3"><a href="#">3</a></li>
									<li id="rotate-label-4"><a href="#">4</a></li>
								</ul><!-- end div#rotate-controls -->
								<div id="rotate-prevnext-controls">
									<a href="#" class="topcontent-rotator-control-forward">Next</a>
									<a href="#" class="topcontent-rotator-control-back">Previous</a>
								</div>
							</div><!-- end div#topcontent-rotator-nav -->
							
							<?php global $post; ?>
							<?php foreach ($cstory as $i=>$story) : $post = $story[0]; setup_postdata($post); ?>
							<div class="topcontent-rotator-content" id="topcontent-rotator-content-<?php echo $i+1; ?>" <?php if($i > 0) : ?>style="display:none"<?php endif; ?>>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
								<span class="photocredit"><?php the_media_credit_html(get_post_thumbnail_id($post->ID)); ?></span>	
								<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
								<a href="<?php the_permalink(); ?>"><h1 class="headline-c"><?php the_headline(); ?></h1></a>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							</div><!-- end div.topcontent-rotator-content -->
							<?php endforeach; ?>
						</div><!-- end div#topcontent-rotator -->
						<hr />
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

						<div id="d-stories-desktop" class="visible-desktop">
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
							<hr />
							<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
							<a href="<?php the_permalink(); ?>">
								<span class="headline-d"><?php the_headline(); ?></span>
							</a>
							<?php endforeach; ?>
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
							<hr />
							<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
							<a href="<?php the_permalink(); ?>">
								<span class="headline-d"><?php the_headline(); ?></span>
							</a>
							<?php endforeach; ?>
						</div><!-- end div.#d-stories-desktop -->						
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
						<hr />
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_headline(); ?></span>
						</a>
						<?php endforeach; ?>
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<hr />
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_headline(); ?></span>
						</a>
						<?php endforeach; ?>
					</div><!-- end div.span8 -->
				</div><!-- end div.row -->
				
				
				<div class="row">
					<div class="span8 front-section" id="front-news">
						<hr />
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
						<hr />
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
						<hr />
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
						<hr />
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
								<li id="front-cartoon-link"><a href="/category/editorial-cartoons/">View this week's editorial cartoon</a></li>
							</ul>
						</div><!-- end div.front-section-more -->
					</div><!-- end div#front-opinion -->
				</div><!-- end div.row -->
				
				<?php wp_reset_query(); ?>

				<div class="row" id="featuredProject">
					<div class="span8">
						<div>
							 <h3>Chilean Winter</h3>
							 <ul class="sections">
							 	<li><a href="/features/">Previous features</a></li>
							 </ul>
							 <span style="display:block;width:100%;clear:both;"></span>
							 <img src="http://dailybruin.com/images/features/THUMBS/chileanwinter_thumb.jpg" />
							 <p>Since 2011, protesters have taken to the streets of Chile to fight for free tuition and fairness within the higher education system. The Daily Bruin spent 15 days in Santiago, Chile to report on these student protesters, who have been inspired by the country's history of protests during the dictatorship. Activists within the University of California have taken cues from Chilean protesters, adopting their organizational structures and protest tactics. Explore the protests in both hemispheres through stories, photos and video footage.</p>
							 <a href="http://chileanwinter.dailybruin.com/" class="featuredlink">Read the story, watch videos, and more&nbsp;&raquo;</a>
							 <span style="display:block;width:100%;clear:both"></span>
						</div>
					</div><!-- end div#featuredProject -->
				</div><!-- end div.row -->
			</div><!-- end div#front-maincol -->	
							
				
				
				
				
			<?php get_template_part('sidebar'); ?>			
		</div><!-- end div#topcontent -->





		
	</div><!-- end div.container -->

<?php get_footer(); ?>
