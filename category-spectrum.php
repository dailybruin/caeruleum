<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
    <div class="page-header">
      <a div="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
      <h2>Exploring the UCLA experience through photojournalism</h2>
    </div><!-- end div.page-header -->
    <?php get_template_part('loop', 'category-photoblog'); ?>
  </div><!-- end div#post-listing -->


      <aside class="span4" id="sidebar" role="complementary">
        <div id="sidebar-inside">
          <?php get_template_part('ad','side'); ?>
          <div id="sidebar-reference"> </div>

      <div class ="sidebar-menu">
        <hr />
        <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?>
        <hr /><?php /*
        <a id="sidebar-about-link" href="/sample-page"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a>*/?>
      </div><!--sidebar-menu-->

    </div><!-- end div#sidebar-inside -->
  </aside><!-- end aside#sidebar -->
  
</div><!-- end div#archive-content -->
<?php get_footer(); ?>