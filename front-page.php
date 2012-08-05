<?php get_header(); ?>

	<div class="container">		

		<div class="row" id="topcontent">
			<?php // Get ready for the C stories!! 
				$cstory[0] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c1' ) );
				$cstory[1] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c2' ) );
				$cstory[2] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c3' ) );
				$cstory[3] = get_posts( array( 'numberposts' => 1, 'tag' => 'db-story-c4' ) );
			?>
			<div class="span8" id="topcontent-rotator">
				<div id="topcontent-rotator-nav" class="hidden-phone">
					<ul class="navlist">
						<li id="rotate-label-1" class="rotate-current"><a href="#"><?php echo get_post_meta($cstory[0][0]->ID, 'db_rotator_slug', true); ?></a></li>
						<li id="rotate-label-2"><a href="#"><?php echo get_post_meta($cstory[1][0]->ID, 'db_rotator_slug', true); ?></a></li>
						<li id="rotate-label-3"><a href="#"><?php echo get_post_meta($cstory[2][0]->ID, 'db_rotator_slug', true); ?></a></li>
						<li id="rotate-label-4"><a href="#"><?php echo get_post_meta($cstory[3][0]->ID, 'db_rotator_slug', true); ?></a></li>
					</ul>
				</div><!-- end div#topcontent-rotator-nav -->
				<?php global $post; ?>
				<?php foreach ($cstory as $i=>$story) : $post = $story[0]; setup_postdata($post); ?>
				<div class="topcontent-rotator-content" id="topcontent-rotator-content-<?php echo $i+1; ?>" <?php if($i > 0) : ?>style="display:none"<?php endif; ?>>
					<?php the_post_thumbnail('db-rotator'); ?>
<!-- 					<img src="http://placehold.it/670x480" /> -->
					<span class="photocredit">Isaac Arjonilla / Daily Bruin Senior Staff</span>		
					<div class="topcontent-rotator-control input-append">
						<button class="btn disabled topcontent-rotator-control-back" type="button"><i class="icon-chevron-left"></i></button><button class="btn topcontent-rotator-control-forward" type="button"><i class="icon-chevron-right"></i></button>
					</div>
					<span class="timestamp"><?php the_time('F j'); ?></span>
					<a href="<?php the_permalink(); ?>"><h1 class="headline-c"><?php the_title(); ?></h1></a>
					<span class="byline">By <?php the_author(); ?></span>
					<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
				</div><!-- end div.topcontent-rotator-content -->
				<?php endforeach; ?>
			</div><!-- end div#topcontent-rotator -->
			
			<div class="span4" id="topcontent-stories">
				<!-- story tag db-story-a -->
				<?php
					$args = array( 'numberposts' => 1, 'tag' => 'db-story-a' );
					$lastposts = get_posts( $args );
					foreach( $lastposts as $post ) :	setup_postdata($post); ?>
				<article>
					<span class="timestamp"><?php the_time('F j'); ?></span>
					<a href="<?php the_permalink(); ?>"><h1 class="headline-a"><?php the_title(); ?></h1></a>
					<span class="byline">By <?php the_author(); ?></span>
					<?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?>
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
					<span class="timestamp"><?php the_time('F j'); ?></span>
					<a href="<?php the_permalink(); ?>"><h1 class="headline-b"><?php the_title(); ?></h1></a>
					<span class="byline">By <?php the_author(); ?></span>
					<?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?>
					<p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">More &raquo;</a></p>
					<span style="display:block;clear:both" />
				</article>
				<?php endforeach; ?>
				
				<img class="ad visible-desktop" src="http://placehold.it/300x250&text=ADVERTISEMENT" />
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
					$blogposts = get_posts( $args );
					foreach( $blogposts as $post ) :	setup_postdata($post); ?>
					<a href="<?php the_permalink(); ?>"><li><span class="popularlist-comments"><?php comments_number('0','1','%'); ?></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="span7">
				<div id="middlecontent1-classifieds" class="segmented-box hidden-phone">
					<h2>Featured Classifieds</h2>
					<div id="middlecontent1-classifieds-column1">
						<p>ACCUSED of cheating? Plagiarism? Grade dispute? Criminal Charges? Call BEFORE speaking with the Dean or Police. FREE consultation. Law Offices of Kosnett&Durchfort. (310)444-8898http://www.educationlawyer.org &bull; <a href="#">Legal Advice/Attorneys</a></p>
						<p>ORGANIC CHEMISTRY IN ONE MONTH.We offer all science classes required for health professional programs. Weekend WASC accredited. Whittierwww.integratedscienceprogram.com &bull; <a href="#">Professional Services</a></p>
						<p>WRITING TUTORKind and patient Stanford graduate. Help with the English language--for students of all ages/levels. 310-440-3118. &bull; <a href="#">Tutoring Offered</a></p>
					</div><!-- end div#middlecontent1-classifieds-column1 -->
					<div id="middlecontent1-classifieds-column2">
						<p>SUMMER CAMPAIGN JOBS!Fight Hate Groups. Teach Tolerance. Seek Justice.Earn $1400-$2200/month.Los Angeles: 310-441-1712Pasadena: 626-844-1900Newport Beach: 202-695-8075 &bull; <a href="#">Help Wanted</a></p>
						<p>$925 Bachelor. Small kitchenette. No parking. Utilities paid. July 10th Move in. 10943 Roebling Ave. 1yr lease. No pets. 310-395-8643. &bull; <a>Apartments for Rent</a></p>
						<p>**SANTA MONICA. Private, charming 1Bdrm. Nice yard, blocks from beach. Newly remodeled. Pearl/11th Street. Serious applicants only. Laurent 310-994-1127. &bull; <a href="#">Apartments for Rent</a></p>
					</div><!-- end div#middlecontent1-classifieds-column2 -->
				<br style="clear:both" />
				</div><!-- end div#middlecontent1-classifieds -->
			</div>
		</div><!-- end div#middlecontent1 -->
		
		<div class="row" id="middlecontent2">
			<div class="span8" id="multimedia-rotator">
					<h2>Multimedia <span class="multimedia-more">More&hellip; <a href="#">photos &raquo;</a> <a href="#">videos &raquo;</a>   <a href="#">audio &raquo;</a>   <a href="#">graphics &raquo;</a></span></h2>
				<div class="multimedia-item-featured">
					<div class="multimedia-item-featured-media">
						<img src="http://placehold.it/476x300" />
					</div><!-- div.multimedia-item-featured-media -->
					<a href="#" class="multimedia-item" >
						<span class="label label-now">Now</span>
						<i class="micon-photo"></i>
						<span class="multimedia-title">Photo Gallery</span>
						<span class="multimedia-date">May 28 | 22 images</span>
						<p>26th Annual JazzReggae Festival at UCLA: Jam Day</p>
					</a>
				</div>
				
				<a href="#" class="multimedia-item" id="multimedia-item-1">
					<img src="http://placehold.it/210x140" />
					<i class="micon-photo"></i>
					<span class="multimedia-title">Photo Gallery</span>
					<span class="multimedia-date">May 28 | 22 images</span>
					<p>Hitting a tackling issue in football</p>
				</a>
	
				<a href="#" class="multimedia-item" id="multimedia-item-2">
					<img src="http://placehold.it/210x140" />
					<i class="micon-etc"></i>
					<span class="multimedia-title">Online Graphic</span>
					<span class="multimedia-date">May 28</span>
					<p>Miles of Memories: Man runs a marathon of memories</p>
				</a>
								
				<div id="multimedia-podcast">
					<img class="visible-desktop" src="img/radio.jpeg" />
					<p>Our live show, <strong>Long Story Short</strong>, streams live online Mondays at 6 p.m. on <a href="http://uclaradio.com">UCLAradio.com</a>. Click play to listen to our latest show or <a href="#">browse our archives</a>.</p>
					<a href="#" id="multimedia-podcast-link" class="btn">Subscribe on iTunes.</a>
				</div>

			</div><!-- end div#multimedia-rotator -->
			<div id="poll" class="span4">
				<h2>Poll <img src="/img/pollicon.png" /> <a id="poll-past">Past polls &raquo;</a></h2>
				<span class="poll-question">Last week, Los Angeles City Council approved a ban on plastic bags in L.A. markets. Is this a good idea?</span>
				<form>
					<label class="radio">
						<input type="radio" name="poll" value="1" />No. A ban no longer gives customers the freedom to choose between paper and plastic.
					</label>
					<label class="radio">
						<input type="radio" name="poll" value="2" />Yes. This ban makes the point that it is everyone's duty to care for the environment.
					</label>
					<label class="radio">
						<input type="radio" name="poll" value="3" />I think a ban is too drastic a measure. Not all consumers are aware of the negative environmental impact of plastic bags.
					</label>
					<label class="radio">
						<input type="radio" name="poll" value="4" />I am undecided on this issue.
					</label>
					<submit class="btn btn-large">Submit </submit>
					<a href="#">View results without voting</a>
				</form>
			</div><!-- end div#poll -->
		</div><!-- end div#middlecontent2 -->
		
		<div class="row" id="bottomcontent">
			<div class="span3 bottomcontent" id="bottomcontent-news">
				<div class="bottomcontent-wrap" id="bottomcontent-news-wrap">
					<h2>News</h2>
					<ul>
					<?php
						$args = array( 'numberposts' => 6, 'category' => 5 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<a href="<?php the_permalink(); ?>"><li><span class="bottomcontent-date"><?php the_time('M'); ?><span><?php the_time('j'); ?></span></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
						<a href="/category/news"><li class="bottomcontent-more">More News</li></a>		
					</ul>
				</div><!-- end div#bottomcontent-news-wrap -->
			</div><!-- end div#bottomcontent-news -->
			
			<div class="span3 bottomcontent" id="bottomcontent-sports">
				<div class="bottomcontent-wrap" id="bottomcontent-sports-wrap">
					<h2>Sports</h2>
					<ul>
					<?php
						$args = array( 'numberposts' => 6, 'category' => 6 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<a href="<?php the_permalink(); ?>"><li><span class="bottomcontent-date"><?php the_time('M'); ?><span><?php the_time('j'); ?></span></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
						<a href="/category/sports"><li class="bottomcontent-more">More Sports</li></a>		
					</ul>
				</div><!-- end div#bottomcontent-sports-wrap -->
			</div><!-- end div#bottomcontent-sports -->

			<div class="span3 bottomcontent" id="bottomcontent-ae">
				<div class="bottomcontent-wrap" id="bottomcontent-ae-wrap">
					<h2>a&amp;e</h2>
					<ul>
					<?php
						$args = array( 'numberposts' => 6, 'category' => 8 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<a href="<?php the_permalink(); ?>"><li><span class="bottomcontent-date"><?php the_time('M'); ?><span><?php the_time('j'); ?></span></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
						<a href="/category/ae"><li class="bottomcontent-more">More a&amp;e</li></a>		
					</ul>
				</div><!-- end div#bottomcontent-ae-wrap -->
			</div><!-- end div#bottomcontent-ae -->

			<div class="span3 bottomcontent" id="bottomcontent-opinion">
				<div class="bottomcontent-wrap" id="bottomcontent-opinion-wrap">
					<h2>Opinion</h2>
					<ul>
					<?php
						$args = array( 'numberposts' => 6, 'category' => 7 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
						<a href="<?php the_permalink(); ?>"><li><span class="bottomcontent-date"><?php the_time('M'); ?><span><?php the_time('j'); ?></span></span><?php the_title(); ?></li></a>
					<?php endforeach; ?>
						<a href="/category/opinion"><li class="bottomcontent-more">More Opinion</li></a>		
					</ul>
				</div><!-- end div#bottomcontent-opinion-wrap -->
			</div><!-- end div#bottomcontent-opinion -->
		</div><!-- end div#bottomcontent -->
		
		<div class="row hidden-phone" id="paidadvertising">
			<div class="span12">
				<h4>Paid Advertising</h4>
				<ul class="paidadvertising-list">
					<li class="span3"><a href="http://www.condomman.com/">Condoms</a></li>		 
					<li class="span3"><a href="http://www.tmart.com/">Free Shipping</a></li>
					<li class="span3"><a href="http://myreviewsnow.net/">shopping</a></li>		 
					<li class="span3"><a href="http://www.bookwormlab.com/research-paper-writing/">Buy Research Paper</a></li>
					<li class="span3"><a href="http://www.studentpolicy.com/">STUDENT HEALTH INSURANCE</a></li>		 
					<li class="span3"><a href="http://www.babygames.net/">baby games</a></li>
					<li class="span3"><a href="http://www.personalinjuryphiladelphialawyer.com/">Philadelphia Car Accident Attorney</a></li>		 
					<br style="clear:both" />
				</ul>
			</div><!-- end div.span12 -->
		</div><!-- end div#paidadvertising -->
	</div><!-- end div.container -->

<?php get_footer(); ?>