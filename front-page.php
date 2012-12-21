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
					<a href="<?php the_permalink(); ?>"><span class="breaking-title"><?php the_title(); ?></span></a> <span class="breaking-timestamp"><?php the_time('F j'); echo " at "; the_time('g:i a'); ?></span>
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
								<a href="<?php the_permalink(); ?>"><h1 class="headline-c"><?php the_title(); ?></h1></a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
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
									<span class="multimedia-title"><?php the_title(); ?></span>
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
									<span class="multimedia-title"><?php the_title(); ?></span>
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
							<a href="<?php the_permalink(); ?>"><h1 class="headline-a"><?php the_title(); ?></h1></a>
							<?php the_byline(false); ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
							<span style="display:block;clear:both" />
						</article>
						<?php endforeach; ?>
						
						
						<!-- story tag db-story-b -->
						<?php
							$args = array( 'numberposts' => 1, 'tag' => 'db-story-b' );
							$lastposts = get_posts( $args );
							foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<article>
							<a href="<?php the_permalink(); ?>"><h1 class="headline-b"><?php the_title(); ?></h1></a>
							<?php the_byline(); ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
							<span style="display:block;clear:both" />
						</article>
						<?php endforeach; ?>

						<!-- stories tagged db-story-d1 through db-story-d3 -->
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d1' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_title(); ?></span>
						</a>
						<?php endforeach; ?>
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d2' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<hr />
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_title(); ?></span>
						</a>
						<?php endforeach; ?>
						<?php
						$args = array( 'numberposts' => 1, 'tag' => 'db-story-d3' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<hr />
						<span class="story-info"><span class="story-info-category"><?php the_category_text(get_the_category()); ?></span> | <?php the_time('F j, g:i a');?> </span>
						<a href="<?php the_permalink(); ?>">
							<span class="headline-d"><?php the_title(); ?></span>
						</a>
						<?php endforeach; ?>
					</div><!-- end div#front-secondarycol -->
				</div><!-- end div.row  inner row -->
				
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
									<?php the_post_thumbnail('db-section-cover', array('class'=>'section-cover')); ?>
									<span class="headline-d"><?php the_title(); ?></span>
								</a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => 5, 'tag__not_in' => $frontPageTags );
									$lastposts = get_posts( $args );
									foreach( $lastposts as $post ) :	setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>">
										<span class="headline-d"><?php the_title(); ?></span></a>
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
									<span class="headline-d"><?php the_title(); ?></span>
								</a>
								<?php the_byline(false); ?>
								<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
								<?php endforeach; ?>
							</div><!-- end div.front-section-main -->
							<div class="span3 front-section-more">
								<ul class="section-list">
								<?php
									$args = array( 'numberposts' => 4, 'cat' => 6, 'tag__not_in' => $frontPageTags );
									$lastposts = get_posts( $args );
									foreach( $lastposts as $post ) :	setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>">
										<span class="headline-d"><?php the_title(); ?></span></a>
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
								<span class="headline-d"><?php the_title(); ?></span>
							</a>
							<?php the_byline(false); ?>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 2, 'cat' => 8, 'tag__not_in' => $frontPageTags );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<span class="headline-d"><?php the_title(); ?></span></a>
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
								<span class="headline-d"><?php the_title(); ?></span>
							</a>
							<?php the_byline(false); ?>
							<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
							<?php endforeach; ?>
						</div><!--end div.front-section-main -->
						
						<div class="front-section-more">
							<ul class="section-list small-section-list">
							<?php
								$args = array( 'numberposts' => 3, 'cat' => 7, 'tag__not_in' => $frontPageTags );
								$lastposts = get_posts( $args );
								foreach( $lastposts as $post ) :	setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<span class="headline-d"><?php the_title(); ?></span></a>
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
							 <a href="#" class="featuredlink">Read the story, watch videos, and more &raquo;</a>
						</div>
					</div><!-- end div#featuredProject -->
				</div><!-- end div.row -->
			</div><!-- end div#front-maincol -->	
							
				
				
				
				
			
			<div class="span4" id="front-sidebar" class="sidebar">
				<?php get_template_part('ad','side'); ?>
				<ul id="sidebar-list">
					<li>
						<h4>Most Popular</h4>
						<pre>Blah blah blah</pre>
						<span class="sidebar-more"><a href="#">Blah blah blah &raquo;</a></span>
					</li>
					<li>
						<h4>Most Popular</h4>
						<pre>Blah blah blah</pre>
						<span class="sidebar-more"><a href="#">Blah blah blah &raquo;</a></span>
					</li>
				</ul><!-- end div#sidebar-list -->
				
			</div>
		</div><!-- end div#topcontent -->
		<div class="row" id="middlecontent1">
			<div class="span5" id="middlecontent1-popular">
				<div id="middlecontent1-popular-headings">
					<a href="#" id="togglemenu-popular" class="togglemenu togglemenu-current">Popular</a
					><a href="#" id="togglemenu-comment" class="togglemenu">Most Commented</a
					><a href="#" id="togglemenu-blog" class="togglemenu">Blog Posts</a>
					<span style="clear:both;display:block"></span>
				</div><!-- end div#middlecontent1-popular-headings -->
				<?php wpp_get_mostpopular('limit=5&range="weekly"&pages=0&wpp_start="<ul class=\'popularlist\' id=\'popularlist-popular\'>"&wpp_end="</ul>"&order_by="views"&do_pattern=1&pattern_form="{stats}{title}"'); ?>
				<ul class="popularlist" style="display:none" id="popularlist-comment">
					<?php
						// From http://stackoverflow.com/questions/3328560/how-to-sort-posts-by-views-comments-rating-etc-wordpress
					    global $wpdb;
						$most_commented = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts WHERE post_type='post' AND post_status = 'publish' ORDER BY comment_count DESC LIMIT 0 , 5");
						foreach ($most_commented as $post) : setup_postdata($post); ?>
					<a href="<?php echo  get_permalink($post->ID); ?>"><li><span class="popularlist-comments"><?php comments_number('0','1','%'); ?></span><?php the_title(); ?></li></a>
						<?php endforeach; ?>
				</ul>
				<ul class="popularlist" style="display:none" id="popularlist-blog">	
					<?php
					$args = array( 'numberposts' => 5, 'category' => 21 );
					$blogposts = ( $args );
					foreach( $blogposts as $post ) :	setup_postdata($post); ?>
					<a href="<?php the_permalink(); ?>"><li><span class="popularlist-comments"><?php comments_number('0','1','%'); ?></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="span7">
				<div id="middlecontent1-classifieds" class="segmented-box hidden-phone">
					<h2><a href="http://dailybruin.com/db_classified">Featured Classifieds</a></h2>
					<div id="middlecontent1-classifieds-column1">
						<?php
						$args = array(
							'numberposts' => 3,
							'post_type' => 'db_classified',
							'featured' => 'Featured',
							'post_status' => 'publish'
						);
						$featuredAds = get_posts( $args );
						foreach( $featuredAds as $post ) :	setup_postdata($post);						
						$classification = array_shift(get_the_terms($post->ID, 'classification')); ?>
						<p><?php echo get_the_content(); ?> &bull; <a href="<?php echo get_term_link($classification); ?>"><?php echo $classification->name; ?></a></p>
						<?php endforeach; ?>
					</div><!-- end div#middlecontent1-classifieds-column1 -->
					<div id="middlecontent1-classifieds-column2">
						<?php
						$args = array(
							'numberposts' => 3,
							'post_type' => 'db_classified',
							'featured' => 'Featured',
							'post_status' => 'publish',
							'offset' => 3
						);
						$featuredAds = get_posts( $args );
						foreach( $featuredAds as $post ) :	setup_postdata($post);						
						$classification = array_shift(get_the_terms($post->ID, 'classification')); ?>
						<p><?php echo get_the_content(); ?> &bull; <a href="<?php echo get_term_link($classification); ?>"><?php echo $classification->name; ?></a></p>
						<?php endforeach; ?>
					</div><!-- end div#middlecontent1-classifieds-column2 -->
				<br style="clear:both" />
				</div><!-- end div#middlecontent1-classifieds -->
			</div>
		</div><!-- end div#middlecontent1 -->
		
		<div class="row" id="middlecontent2">
			<div class="span8" id="multimedia-rotator">
					<h2>Multimedia <span class="multimedia-more">More&hellip; <a href="#">photos &raquo;</a> <a href="#">videos &raquo;</a>   <a href="#">audio &raquo;</a>   <a href="#">graphics &raquo;</a></span></h2>
				<div class="multimedia-item-featured">
				
				</div>
				
				<?php
					$args = array( 'numberposts' => 1, 'tag' => 'db-story-m2' );
					$lastposts = get_posts( $args );
					foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<a href="<?php the_permalink(); ?>" class="multimedia-item" id="multimedia-item-1">
					<?php the_post_thumbnail('db-multimedia-small'); ?>
					<?php 	// output multimedia flag
					$customFields = get_post_custom($post->ID);
					multimedia_post_flag( $customFields['db_multimedia_type'][0] ) ?>
					<span class="multimedia-date"><?php the_time('F j, g:i a'); ?></span>
					<p><?php the_title(); ?></p>
				</a>
				<?php endforeach; ?>
	
				<?php
					$args = array( 'numberposts' => 1, 'tag' => 'db-story-m3' );
					$lastposts = get_posts( $args );
					foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<a href="<?php the_permalink(); ?>" class="multimedia-item" id="multimedia-item-2">
					<?php the_post_thumbnail('db-multimedia-small'); ?>
					<?php 	// output multimedia flag
					$customFields = get_post_custom($post->ID);
					multimedia_post_flag( $customFields['db_multimedia_type'][0] ) ?>
					<span class="multimedia-date"><?php the_time('F j, g:i a'); ?></span>
					<p><?php the_title(); ?></p>
				</a>
				<?php endforeach; ?>
								
				<div id="multimedia-podcast">
					<img class="visible-desktop" src="img/radio.jpeg" />
					<p>Our live show, <strong>Long Story Short</strong>, streams live online Mondays at 6 p.m. on <a href="http://uclaradio.com">UCLAradio.com</a>. Click play to listen to our latest show or <a href="#">browse our archives</a>.</p>
					<a href="http://itunes.apple.com/us/podcast/daily-bruin-radio/id352605427" id="multimedia-podcast-link" class="btn">Subscribe on iTunes.</a>
				</div>

			</div><!-- end div#multimedia-rotator -->
			<div id="poll" class="span4">
				<h2>Poll <img src="/img/pollicon.png" /> <a href="/pollsarchive" id="poll-past">Past polls &raquo;</a></h2>
				<?php get_poll();?>
			</div><!-- end div#poll -->
		</div><!-- end div#middlecontent2 -->
		
	</div><!-- end div.container -->

<?php get_footer(); ?>