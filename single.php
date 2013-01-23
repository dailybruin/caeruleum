<?php get_header(); ?>

<div class="row" id="single-post">
<?php 
$spectrum = false;
foreach(get_the_category() as $cat)
{
	switch($cat->name)
	{
    	case "Spectrum":
			$spectrum = true;
    		break(2);
	}
}

if($spectrum) :
?>
	<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>

	<div class="span9" id="post">
		<?php the_post() ?>
		<div class="page-header">
	    	<a div="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
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
						<?php /* echo $the_cat->name;
						echo (": "); */
						the_title();
						?>
					</a></h1> 

				<?php the_content(); ?>
				<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>
				<p>FACEBOOK TWITTER RSS TODO</p>

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
		        <hr /> <?php  /*
		        <a id="sidebar-about-link" href="/sample-page"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a>*/ ?>
	     	 </div><!--sidebar-menu-->
	  </div>
	</aside>
	?>



<?php else : ?>
	<div class="span8" id="post">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->
			<?php get_sidebar(); ?>

<?php endif; ?>
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
