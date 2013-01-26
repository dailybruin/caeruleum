<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="span9" id="post">
	<?php the_post() ?>
	<div class="page-header">
    	<a class="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
    </div><!-- end div.page-header -->
	<div id="pb-gallery-block">
		<div id="pb-gallery-image">
			<?php $gallery = get_post_meta($post->ID, 'gallery', true);
			echo do_shortcode('[nggallery id='.$gallery.' template="galleryview"]');
			?>
		</div>
		<div class="photoblog-text" id="pb-gallery-text">
			<?php 
				$cats = get_the_category();
				//$the_cat = get_the_category()[0];
				if ($cats) {
					foreach($cats as $cat){//DON'T HAVE MULTIPLE CATS OTHER THAN SPECTRUM AND THE SUBCAT
						if ($cat->name != "Spectrum"){
							$the_cat = $cat;
						}
					}
				}
				?>
				<h1>
				<a href="/category/spectrum/<?php echo($the_cat->slug) ?>">
					<?php echo $the_cat->name;
					echo (": "); 
					the_title();
					?>
				</a></h1> 

			<?php the_content(); ?>
			<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>
			<p class="photoblog-sm">
			    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" data-via="dailybruin" data-related="dailybruin">Tweet</a>
			    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</p>

			<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		</div>
	</div> <!--photoblog-post-block-->

</div><!-- end div#post -->
<aside class="span3" id="sidebar" role="complementary">
	<div id="sidebar-inside">
      	<?php get_template_part('ad','side'); ?>
      	<div id="sidebar-reference"> </div>
		<div class="sidebar-menu">
			<hr />
	        <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?>
	        <hr /> 
	        <a id="sidebar-about-link" href="/behind-the-blog"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a> ?>
     	 </div><!--sidebar-menu-->
  </div>
</aside>
