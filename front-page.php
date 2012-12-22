<?php get_header(); ?>

<?php
	// IMPORTANT: set these for your particular wordpress installation
	// This includes db-story-a, db-story-b, db-story-c1, db-story-c2,
	// db-story-c3, db-story-c4, db-story-m1, db-story-m2, db-story-d1,
	// db-story-d2, db-story-d3, db-story-ns, db-story-op, db-story-ae,
	// db-story-sp
	$frontPageTags = array('15','16','17','18','19','20','25','26','27','158','159','160','161','162','163','164');
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
							<div id="topcontent-rotator-nav" class="hidden-phone">
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
								<a href="<?php the_permalink(); ?>"><h1 class="headline-c"><?php the_headline(); ?></h1></a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							</div><!-- end div.topcontent-rotator-content -->
							<?php endforeach; ?>
						</div><!-- end div#topcontent-rotator -->
						<hr />
						<div id="front-multimedia">
							<a href="#"><h3>Multimedia &raquo;</h3></a>
							<ul class="sections">
								<li><a href="#">Photos</a></li>
								<li><a href="#">Videos</a></li>
								<li><a href="#">Radio</a></li>
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
						</div><!-- end div#front-multimedia -->
					</div><!-- end div.span5 -->
					<div class="span3" id="front-secondarycol">
						<!-- story tag db-story-a -->
						<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-a' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<article>
							<a href="<?php the_permalink(); ?>"><h1 class="headline-a"><?php the_headline(); ?></h1></a>
							<?php the_byline(false); ?>
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
							<a href="<?php the_permalink(); ?>"><h1 class="headline-b"><?php the_headline(); ?></h1></a>
							<?php the_byline(); ?>
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
						<a href="#"><h3>News &raquo;</h3></a>
						<ul class="sections">
							<li><a href="#">Student gov</a></li>
							<li><a href="#">Campus</a></li>
							<li><a href="#">Crime</a></li>
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
									<span class="headline-d visible-desktop"><?php the_headline(); ?></span>
								</a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list large-section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => 5, 'tag__not_in' => $frontPageTags );
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
						<a href="#"><h3>Sports &raquo;</h3></a>
						<ul class="sections">
							<li><a href="#">Football</a></li>
							<li><a href="#">Men's Basketball</a></li>
							<li><a href="#">Women's Basketball</a></li>
						</ul>
						<div class="row front-section-content clearfix">
							<div class="span5 front-section-main">
								<?php
								$args = array( 'numberposts' => 1, 'tag' => 'db-story-sp' );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?>
									<span class="headline-d"><?php the_headline(); ?></span>
								</a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list large-section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => 6, 'tag__not_in' => $frontPageTags );
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
						<a href="#"><h3>A&E &raquo;</h3></a>
						<ul class="sections">
							<li><a href="#">All A&E stories</a></li>
						</ul>
						<div class="clearfix front-section-main">
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-ae' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('db-section-cover-small', array('class'=>'section-cover-small')); ?>
								<span class="headline-d"><?php the_headline(); ?></span>
							</a>
							<?php the_byline(false); ?>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 2, 'cat' => 8, 'tag__not_in' => $frontPageTags );
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
						<a href="#"><h3>Opinion &raquo;</h3></a>
						<ul class="sections">
							<li><a href="#">All opinion stories</a></li>
						</ul>
						<div class="clearfix front-section-main">
							<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-op' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('db-section-cover-opinion', array('class'=>'section-cover-opinion')); ?>
								<span class="headline-d"><?php the_headline(); ?></span>
							</a>
							<?php the_byline(false); ?>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More&nbsp;&raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 3, 'cat' => 7, 'tag__not_in' => $frontPageTags );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<span class="headline-d"><?php the_headline(); ?></span></a>
								<span class="section-date"><?php the_time('M j'); ?></span>
								</li>
							<?php endforeach; ?>
								<li id="front-cartoon-link"><a href="#">View this week's editorial cartoon</a></li>
							</ul>
						</div><!-- end div.front-section-more -->
					</div><!-- end div#front-opinion -->
				</div><!-- end div.row -->
				
				<div class="row" id="featuredProject">
					<div class="span8">
						<div>
							 <h3>Gay Conversion Therapy</h3>
							 <ul class="sections">
							 	<li><a href="#">Previous features</a></li>
							 </ul>
							 <span style="display:block;width:100%;clear:both;"></span>
							 <img src="http://placehold.it/250x180" />
							 <p>In the 1960s and 1970s, the UCLA Gender Identity Research Clinic studied children and adults who identified as a gender different than their biological sex, and provided therapy when sought out.</p>
							 <a href="#" class="featuredlink">Read the story, watch videos, and More&nbsp;&raquo;</a>
						</div>
					</div><!-- end div#featuredProject -->
				</div><!-- end div.row -->
			</div><!-- end div#front-maincol -->	
							
				
				
				
				
			<?php get_template_part('sidebar'); ?>			
		</div><!-- end div#topcontent -->





		
	</div><!-- end div.container -->

<?php get_footer(); ?>