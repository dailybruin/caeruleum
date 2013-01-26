<?php/*
Template Name: Behind the Blog
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
    <div class="page-header">
      <a class="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
      <h2>Exploring the UCLA experience through photojournalism</h2>
        <div class="pb-btb-text">
        <?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; 
              get_template_part('loop', 'page'); ?>
        </div>

    
    </div><!-- end div.page-header -->
  </div><!-- end div#post-listing -->

  <aside class="span4" id="sidebar" role="complementary">
    <div id="sidebar-inside">
      <?php get_template_part('ad','side'); ?>
      <div id="sidebar-reference"> </div>

      <div class ="sidebar-menu">
        <hr />
        <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?>
        <hr />
        <a id="sidebar-about-link" href="/behind-the-blog"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a>
      </div><!--sidebar-menu-->

    </div><!-- end div#sidebar-inside -->
  </aside><!-- end aside#sidebar -->
  
</div><!-- end div#archive-content -->
<?php get_footer(); ?>