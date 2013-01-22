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
	<div class="span9" id="post">
		<?php get_template_part('loop', 'photoblog'); ?>
	</div><!-- end div#post -->
	<aside class="span3" id="sidebar" role="complementary">
		<div id="sidebar-inside">
          	<?php get_template_part('ad','side'); ?>
			<div class="sidebar-menu">
				<hr />
		        <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?>
		        <hr /> <?php  /*
		        <a id="sidebar-about-link" href="/sample-page"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a> */?>
	     	 </div><!--sidebar-menu-->
	  </div>
	</aside>


<?php else : ?>
	<div class="span8" id="post">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->
			<?php get_sidebar(); ?>

<?php endif; ?>
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
