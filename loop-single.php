<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php $articleFormats = wp_get_post_terms($post->ID,'article-format');
	$articleFormat = $articleFormats[0]->slug;
	if(empty($articleFormat) || $articleFormat === 'normal')
		$articleFormat = get_field('db_article_format');
	$displayAuthor = true;
	$italicHeadline = false;
	$displayMugshot = false;
	if($articleFormat)
	{
		switch($articleFormat)
		{
			case 'brief':
				$displayAuthor = false;
				break;
			case 'column':
				$italicHeadline = true;
				$displayMugshot = true;
				break;
			case 'default':
				$displayAuthor = !in_array('hide_byline', get_field('db_display_options'));
				$italicHeadline = in_array('italic_headline', get_field('db_display_options'));
				$displayMugshot = in_array('mugshot', get_field('db_display_options'));
		}
	}
	?>
	<?php 
	foreach(get_the_category() as $cat)
	{
		switch($cat->name)
		{
        	case "Bruin Sights":
        		the_blog_banner('bruinsights');
        		break(2);
        	case "Spotlight":
        		the_blog_banner('spotlight');
        		break(2);
        	case "Timestamp":
        		the_blog_banner('timestamp');
        		break(2);
        	case "Video":
        		$videoStory = true;
        		break(2);
			case "Idle Thoughts":
				the_blog_banner('two-cents-idle-thoughts');
				break(2);
			case "Political Commentary":
				the_blog_banner('two-cents-political-commentary');
				break(2);
			case "Social Commentary":
				the_blog_banner('two-cents-social-commentary');
				break(2);
		}
		if ($cat->slug == "sports-two-cents")
		{
			the_blog_banner('two-cents-sports');
		}
	}
	// Find out if this is a video story
	// Expand this to do something better for multimedia/gallery display
	$video_story = false;
	foreach(get_the_category() as $cat)
	{
		switch($cat->name)
		{
        	case "Video":
        		$video_story = true;
        		break(2);
		}
	}
	?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    	<?php $customFields = get_post_custom(); ?>

		<div class="db-post-headline"><h1 ><?php the_headline(); ?></h1></div>
		<hr>
		<?php $subhead = get_post_custom_values('db_subhead');
			if(isset($subhead) && $subhead[0] != ''): ?>
			<h2 class="subhead"><?php echo $subhead[0]; ?></h2>
		<?php endif; ?>
		<div class="row">
			<div class="small-7 columns">
				<!--<?php // Display the columnist's mugshot
				    if($displayMugshot && $displayAuthor)
				    {
				        ob_start();
    					if(function_exists('userphoto_the_author_thumbnail'))
    						userphoto_the_author_thumbnail();
    					$thumbnail = ob_get_contents();
    					$thumbnail_class = "";
    					ob_end_clean();
    					if(isset($thumbnail) || !($thumbnail == ""))
    					{
        					?>
        						<div class="author-photo"><?php echo $thumbnail; ?></div>
        						<?php
        				}
				    }
				?>
				-->
				<div class="db-byline">
					<h4> <?php the_byline(); ?> </h4>
					<?php if (get_field('db_article_format') != 'brief'): ?>
						</br>
					<?php endif; ?>
					<h5> Posted: </h5>
					<h5> <?php the_time('F j, Y'); ?></h5>
					<h5> <?php the_time('g:i a'); ?></h5>
				</div>
			</div>
			<div class="small-5 columns text-right">
				<h4><?php the_category(", "); ?></h4>
				<br style="clear:both" />
			</div>
		</div>
		<div class="db-image text-center">
			<?php if(has_post_thumbnail() && !$video_story) : ?>
				<?php the_post_thumbnail('db-category-full'); ?>		
				<p class="db-image-caption text-left">
					<?php echo get_post(get_post_thumbnail_id($post->ID))->post_excerpt; ?>
					<?php 
					// We don't do media credits like this any more
					if(get_the_time('U') < 1391744168): ?>
						<?php the_media_credit_html(get_post_thumbnail_id($post->ID)); ?>
					<?php endif; ?>
				</p>
				<hr>
			<?php endif; ?>
			<?php if($video_story): ?>
			<div class="db-post-content">
				<div class="video-story">					
						<?php the_content(); ?>
				</div><!-- end div.video-story -->
			</div>
			<?php endif; ?>
		</div>
		

		<div class="row">
			
          <div class="medium-3 columns">
          	<?php if(!$video_story): ?>
            <div class="row text-center">
              <h4 class="small-6 columns">
              	<a href="https://www.facebook.com/sharer/sharer.php?u=http://dailybruin.com<?php the_permalink(); ?>" target="_blank" >
              		<i class="fa fa-facebook fa-lg"></i>&nbsp;Share
              	</a>
              </h4>
              <h4 class="small-6 columns">
              	<a href="https://twitter.com/share" rel="external" target="_blank" data-via="dailybruin">
              		<i class="fa fa-twitter fa-lg"></i>&nbsp;Tweet
              	</a>
              </h4>
            </div>
            <hr>
            <?php endif; ?>
            <p>
            <?php 
				if(get_field('corrections') != ''):?>
                <!-- <b>Correction: </b> -->				
                <?php echo get_field('corrections')?>
			<?php endif; ?>
            </p>
          </div>
		  <div class="medium-9 columns">
				<?php 
					if(function_exists('the_audio'))
						the_audio();
				?>
				<?php if(!empty($customFields['db_infobox'][0])) : ?>
					<div class="db-infobox">
						<?php echo $customFields['db_infobox'][0];
						$numberOfPaws = get_field('db_number_of_paws');
						if(isset($numberOfPaws) && intval(ceil($numberOfPaws)) > 0)
						{
							$numf = intval(floor($numberOfPaws));
							$numc = intval(ceil($numberOfPaws));
							echo '<div class="infobox-paws">';
							for($i = 0; $i < $numf; $i++)
								echo '<img src="http://dailybruin.com/images/paws/full.png" />';
							if($numf != $numc)
								echo '<img src="http://dailybruin.com/images/paws/half.png" />';
							for($i = $numc; $i < 5; $i++)
								echo '<img src="http://dailybruin.com/images/paws/blank.png" />';
							echo '</div><!-- end div.infobox-paws -->';
						} 
						?>
					</div>
				<?php endif; ?>
				<div class="db-post-content">
					<?php if(!$video_story) {  the_content();  } ?>
				</div>
				<p class="author-contact">
				    <?php 
				    if(get_field('db_article_format') == 'default' && in_array('hide_author_blurb', get_field('db_display_options')))
			    	{ ; }
				    else if(!empty($customFields['db_authoremail'][0]) || get_field('db_article_format') == 'brief')
				    {
				    	if(!empty($customFields['db_authoremail'][0])) 
					        echo $customFields['db_authoremail'][0];
				    }
                    else if(intval(the_date('U','','',false)) <= 1361363177)
                    { ; }
				    else
				    {
				        $coauthors = get_coauthors();
				        $finalAuthorKey = count($coauthors) - 1;
				        $firstAuthor = true;
				        foreach($coauthors as $key=>$author)
				        {
				            $lastAuthor = ($finalAuthorKey == $key);
				            $lastName = get_the_author_meta('last_name', $author->ID);
				            $firstName = get_the_author_meta('first_name', $author->ID);
				            $graduated = get_the_author_meta('graduated', $author->ID);

				        ?>
						<!--Author Box -->
						<?php
						//Author Box Variables
						$position= get_the_author_meta('position', $author->ID);
						$description = get_the_author_meta('description', $authour->ID);
						$email = get_the_author_meta('user_email', $author->ID);
						$twitter = get_the_author_meta( 'twitter_handle', $author->ID );
						?>
					    <div class="author-wrapper">
			                <div class="row author-box">
			                  <div class="large-12 medium-12 small-12 columns author-title">
			                    <div class="author-header">
			                    	<a href="<?php echo get_author_posts_url( $author->ID, get_the_author_meta( 'user_nicename',$author->ID ) ); ?>">
			                    		<?php echo "$firstName $lastName"; ?>
			                    	</a> 
			                    	<?php if ( $position ): ?>
			                    	|
			                    	<? endif; ?>
			                    </div>
			                    <?php if ( $position ): ?>
			                    	<div class="author-position"> <?php echo $position ?> </div>
			                	<?php endif; ?>
			                  </div>
			                </div>
			              <div class="bio row">       
			                  	<?php // Display the columnist's mugshot
							    if($displayMugshot && $displayAuthor)
							    {
							    	?>
							    	<div class="image large-2 small-3 medium-2 columns"> 
							    	<?php
							        ob_start();
			    					if(function_exists('userphoto_the_author_photo'))
			    						userphoto_the_author_photo();
			    					$thumbnail = ob_get_contents();
			    					$thumbnail_class = "";
			    					ob_end_clean();
			    					if(!empty($thumbnail))
			    					{
			        					?>
			        						<div class="author-photo"><?php userphoto_the_author_photo(); ?></div>
			        						</div>
			        						<?php
			        				}else{
			        					$displayMugshot=false;
			        					?>
			        					</div>
			        					<?php
			        				}
							    }
								?>
							<?php if ( !$displayMugshot && !$description): ?>
		                        <div class="description large-12 small-12 medium-12 columns">
		                      <?php elseif ( !$displayMugshot): ?>
		                        <div class="description large-12 small-9 medium-10 columns">
		                    <?php endif; ?>
		                      <?php if ($description): ?>
			                    <p class="bio-text">
			            			<?php echo $description ?>
			                    </p>
			                  <?php endif; ?>
			                  <?php if (!$description && !$displayMugshot): ?> <!-- Don't make margin so large -->
		                        <div class="row contact-info-wrapper-smaller-margin">
		                      <?php else: ?>
		                      <div class="row contact-info-wrapper">
		                      <?php endif; ?>
		                        <?php if ( $email || $twitter ): ?>
		                        <div class="contact large-2 medium-2 columns show-for-medium-up">
		                          <p class="contact">contact</p>
		                        </div>
		                        <?php endif; ?>
			                    <div class="email large-5 medium-5 columns show-for-medium-up">
			                      <?php if ( $email): ?>
			                      <p><span class="entypo-mail"></span>
			                       <a class="author-email-inside" href="mailto:<?php echo "$author->user_email"; ?>">
			                        <?php echo "$author->user_email"; ?>
			                      </a></p>
			                      <?php endif; ?>
			                    </div>
			                    <div class="twitter large-3 medium-3 columns show-for-medium-up">
			                      <?php if ( $twitter): ?>
			                        <p><span class="entypo-twitter"></span>  
			                        <a class="twitter-follow-button" data-show-count="false" href="http://twitter.com/<?php the_author_meta('twitter', $author->ID );?>">
			                          <?php echo $twitter; ?>
			                        </a>
			                      <?php endif; ?>
			                    </div>
			               </div> <!--end bio-row-->
			              </div>  
			              		<div class="row contact-info-wrapper show-for-small-only">
				                    <div class="email small-6 columns">
				                      <?php if ( $email): ?>
				                      <p><span class="entypo-mail"></span>
				                       <a class="author-email-inside" href="mailto:<?php echo "$author->user_email"; ?>">
				                        <?php echo "$author->user_email"; ?>
				                      </a></p>
				                      <?php endif; ?>
				                    </div>
				                    <div class="twitter small-3 columns">
				                      <?php if ( $twitter): ?>
				                        <p><span class="entypo-twitter"></span>  
				                        <a class="twitter-follow-button" data-show-count="false" href="http://twitter.com/<?php the_author_meta('twitter', $author->ID );?>">
				                          <?php echo get_the_author_meta( 'twitter_handle', $author->ID ); ?> 
				                        </a>
				                      <?php endif; ?>
			                    </div>                 
			            </div>
		           	  </div>
		            	<?php
		            	}
				    }?>
				</p>
			</div><!-- end div.post-content -->
		</div><!-- end div.entry-content -->

		<hr>
		<p id="comment-policy">Comments are supposed to create a forum for thoughtful, respectful community discussion. Please be nice. <a href="<?php echo get_permalink( get_page_by_path( 'comment-policy' ) ); ?>">View our full comments policy here.</a></p>
      <?php comments_template(); ?>
    </article>
<?php endwhile; /* End loop */ ?>
