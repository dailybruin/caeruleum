<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    	<?php $customFields = get_post_custom(); ?>
      <div id="post-top">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h2 class="subhead"><?php $subhead = get_post_custom_values('db_subhead'); echo $subhead[0]; ?></h2>
		<?php the_post_thumbnail('db-rotator'); ?>
		<span class="photocredit photocredit-single"><?php the_media_credit_html(get_post_thumbnail_id($post->ID)); ?></span>
		<span class="photocaption"><?php echo get_post(get_post_thumbnail_id($post->ID))->post_excerpt; ?></span>
		
		<div class="infobar">
			<span class="infobar-day"><i class="ticon-calendar ticon-white"></i> <?php the_time('F n, Y'); ?></span>
			<span class="infobar-time"><i class="ticon-clock ticon-white"></i> <?php the_time('g:i a'); ?></span>
			<span class="infobar-categories">More stories in <?php the_category(", "); ?></span>
			<br style="clear:both" />
		</div>
       </div><!-- end div#post-top -->
		<div class="row entry-content">
			<div class="span2 post-extra">
				<ul id="post-extra-actions">
					<li><a href="#">Twitter <i class="ticon-twitter">	</a></i></li>
					<li><a href="#">Facebook <i class="ticon-facebook">	</a></i></li>
					<li class="list-space"></li>
					<li class="post-extra-unimportant"><a href="#">Print <i class="ticon-printer"></a></i></li>
					<li class="post-extra-unimportant"><a href="#">Email <i class="ticon-email"></a></i></li>
					<br style="clear:both" />
				</ul>
			</div><!-- end div.post-extra -->
			<div class="span6 post-content">
				<span class="byline">By <?php echo the_author_posts_link(); ?></span>
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
				<div class="author-info">
					<?php userphoto_the_author_thumbnail(); ?>
					<h2>About the Author</h2>
					<h1><?php the_author_posts_link(); ?></h1>
					<?php if(!get_the_author_meta('graduated')) : ?>					
						<a href="mailto:<?php the_author_meta('user_email'); ?>"><i class="ticon-email"></i>Email</a>
						<?php if(get_the_author_meta('twitter_handle')) : ?>
						<a href="https://twitter.com/<?php echo substr(get_the_author_meta('twitter_handle'),1); ?>" class="twitter-follow-button" data-show-count="false">Follow <?php the_author_meta('twitter_handle'); ?></a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						<?php endif; ?>
					<?php endif; ?>
					<p><?php the_author_meta('description'); ?></p>
				</div><!-- end div.author-info -->
			</div>
		</div><!-- end div#entry-bottom -->
      <?php comments_template(); ?>
    </article>
<?php endwhile; /* End loop */ ?>