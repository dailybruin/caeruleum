<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php $articleFormats = wp_get_post_terms($post->ID,'article-format');
	$articleFormat = $articleFormats[0]->slug;
	$displayAuthor = true;
	if(isset($articleFormat))
	{
		switch($articleFormat)
		{
			case 'brief':
				$displayAuthor = false;
				break;
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
		}
	}
	?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    	<?php $customFields = get_post_custom(); ?>
      <div id="post-top">
		<h1 class="entry-title"><?php the_headline(); ?></h1>
		<?php $subhead = get_post_custom_values('db_subhead');
			if(isset($subhead) && $subhead[0] != ''): ?>
			<h2 class="subhead"><?php echo $subhead[0]; ?></h2>
		<?php endif; ?>
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('db-category-full'); ?>
			<span class="photocredit photocredit-single"><?php the_media_credit_html(get_post_thumbnail_id($post->ID)); ?></span>
			<span class="photocaption"><?php echo get_post(get_post_thumbnail_id($post->ID))->post_excerpt; ?></span>
		<?php endif; ?>
		<div class="infobar">
			<span class="infobar-day"><i class="ticon-calendar ticon-white"></i> <?php the_time('F n, Y'); ?></span>
			<span class="infobar-time"><i class="ticon-clock ticon-white"></i> <?php the_time('g:i a'); ?></span>
			<span class="infobar-categories">More stories in <?php the_category(", "); ?></span>
			<br style="clear:both" />
		</div>
       </div><!-- end div#post-top -->
		<div class="row entry-content">
			<div class="span2 post-extra visible-desktop">
				<ul id="post-extra-actions">
					<li><a href="https://twitter.com/share" rel="external" target="_blank" data-via="dailybruin">Tweet <i class="ticon-twitter"</a></i></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://dailybruin.com<?php the_permalink(); ?>" target="_blank" >Share <i class="ticon-facebook">	</a></i></li>
					<!--<li class="list-space"></li>
					<li class="post-extra-unimportant"><a href="#">Print <i class="ticon-printer"></a></i></li>
					<li class="post-extra-unimportant"><a href="#">Email <i class="ticon-email"></a></i></li>-->
					<br style="clear:both" />
				</ul>
			</div><!-- end div.post-extra -->
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="span6 post-content">
				<?php the_audio(); ?>
				<div class="span2 post-extra hidden-desktop">
					<ul id="post-extra-actions">
						<li><a href="https://twitter.com/share" rel="external" target="_blank" data-via="dailybruin">Tweet <i class="ticon-twitter"</a></i></li>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://dailybruin.com<?php the_permalink(); ?>" target="_blank" >Share <i class="ticon-facebook">	</a></i></li>
						<!--<li class="list-space"></li>
						<li class="post-extra-unimportant"><a href="#">Print <i class="ticon-printer"></a></i></li>
						<li class="post-extra-unimportant"><a href="#">Email <i class="ticon-email"></a></i></li>-->
						<br style="clear:both" />
					</ul>
				</div><!-- end div.post-extra -->
				<?php the_byline(); ?>
				<?php if(isset($customFields['db_infobox'])) : ?>
					<div class="db-infobox">
						<?php echo $customFields['db_infobox'][0]; ?>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>

			</div><!-- end div.post-content -->

		</div><!-- end div.entry-content -->
		<div class="row" id="entry-bottom">
			<div class="span2 about-post">
				<div class="post-tags">
					<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
				</div><!-- end div.post-tags -->
			</div>
			<div class="span6 about-author">
				<div class="sm">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="dailybruin" data-related="dailybruin">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<div class="fb-like" data-send="true" data-width="325" data-show-faces="true" data-action="recommend" data-font="lucida grande"></div>
				</div><!-- end div.sm -->
				<?php if($displayAuthor): ?>
					<?php // Find out if the user has a thumbnail
					ob_start();
					userphoto_the_author_thumbnail();
					$thumbnail = ob_get_contents();
					$thumbnail_class = "";
					if(!isset($thumbnail) || $thumbnail == "")
						$thumbnail_class = "nothumb";
					ob_end_clean();
					?>
					<div class="author-info <?php echo $thumbnail_class; ?>">
						<?php echo $thumbnail; ?>
						<span class="author-about">About the Author</span>
						<span class="author-name"><?php the_author_posts_link(); ?></span>
						<?php if(!get_the_author_meta('graduated')) : ?>					
							<?php if(get_the_author_meta('twitter_handle')) : ?>
							<a href="https://twitter.com/<?php echo substr(get_the_author_meta('twitter_handle'),1); ?>" class="twitter-follow-button" data-show-count="false">Follow <?php the_author_meta('twitter_handle'); ?></a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							<?php endif; ?>
							<a class="author-email" href="mailto:<?php the_author_meta('user_email'); ?>"><i class="ticon-email"></i>Email</a>
						<?php endif; ?>
						<p><?php the_author_meta('description'); ?></p>
					</div><!-- end div.author-info -->
				<?php endif; ?>
			</div>
		</div><!-- end div#entry-bottom -->
      <?php comments_template(); ?>
    </article>
<?php endwhile; /* End loop */ ?>