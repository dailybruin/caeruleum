<?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="span9" id="post">
	<?php the_post();
	$cats = get_the_category();
	if ($cats) {
		foreach($cats as $cat){//DON'T HAVE MULTIPLE CATS OTHER THAN SPECTRUM AND THE SUBCAT
			if ($cat->name != "Spectrum"){
				$the_cat = $cat;
			}
		}
	}

	?>
	<div class="page-header">
    	<a class="pb-logo" href="/category/spectrum"><img src="/img/spectrum-<?php echo($the_cat->slug) ?>.png"  /></a>
    	<h2>Exploring the UCLA experience through photojournalism</h2>
    </div><!-- end div.page-header -->
	<div id="pb-gallery-block">
		<div id="pb-gallery-image">
			<?php $gallery = get_post_meta($post->ID, 'gallery', true);
			if ($gallery != '-1') //THIS PART DONE BY NEIL
				echo do_shortcode('[nggallery id='.$gallery.' template="galleryview" images="0"]');
			?>
		</div>
		<div class="photoblog-text" id="pb-gallery-text">
			<h1>
			<a href="/category/spectrum/<?php echo($the_cat->slug) ?>">
				<?php /*echo $the_cat->name;
				echo (": "); */
				the_title();
				?>
			</a></h1> 
			<?php if(function_exists('the_audio')) the_audio(); ?>
			<?php the_content(); ?>
			<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
			<p class="photoblog-sm">
			    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" data-via="dailybruin" data-related="dailybruin">Tweet</a>
			    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</p>

			<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		</div>
	</div> <!--photoblog-post-block-->

</div><!-- end div#post -->
<?php get_template_part('sidebar','photoblog'); ?>
