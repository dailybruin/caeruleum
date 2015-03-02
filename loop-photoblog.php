<?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="small-9 columns" id="post">
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

		</div>
		<div class="photoblog-text" id="pb-gallery-text">
			<h1>
			<a href="/category/spectrum/<?php echo($the_cat->slug) ?>">
				<?php /*echo $the_cat->name;
				echo (": "); */
				the_title();
				?>
			</a></h1> 
						<?php $gallery = get_post_meta($post->ID, 'gallery', true);
			if ($gallery != '-1') //THIS PART DONE BY NEIL 2012
				// echo do_shortcode('[nggallery id='.$gallery.' template="galleryview" images=0]');
				global $nggdb;
				$galleryt = $nggdb->get_gallery($gallery, 'sortorder', 'ASC', true, 0, 0);
				foreach($galleryt as $image) {
				    echo '<img src="'.$image->imageURL.'"/>';
				    echo '<p>'.$image->description.' (Photo by: '. $image->alttext.')</p>';
				 }
			?>
			<?php if(function_exists('the_audio')) the_audio(); ?>
			<hr>
			<?php the_content(); ?>
			<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
			<p class="photoblog-sm">
			    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</p>

			<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		</div>
	</div> <!--photoblog-post-block-->

</div><!-- end div#post -->
<div class="small-3 columns">
<?php get_template_part('sidebar','photoblog'); ?>
</div>
