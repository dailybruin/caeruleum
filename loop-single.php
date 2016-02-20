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
				<?php // Display the columnist's mugshot
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
				<b>Correction: </b> 
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
				            $graduated = get_the_author_meta('graduated', $author->ID);
				            if(!isset($lastName) || $lastName == "" || !isset($author->user_email) || $graduated || substr($author->user_email,-12) == '@camayak.com') // camayak generates gross-looking author emails that we don't want to display
				                continue;
				            if($firstAuthor)
				                echo "Email ";
				            else
				            {
				                if($lastAuthor && $key == 1)
				                    echo " and email ";
				                else if($lastAuthor)
				                    echo ", and email ";
				                else
				                    echo ", email ";
				            }
			                echo $lastName . " at <a href='mailto:"
			                    . $author->user_email . "'>" . $author->user_email 
			                    . "</a>";
			                if($lastAuthor)
			                    echo ".";
			                $firstAuthor = false;
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
