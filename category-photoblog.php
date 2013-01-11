<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
    <div class="page-header">
      <h1>
        <span class="photoblog-header-dashes">-</span> <?php 
            _e('Blink');
          ?> <span class="photoblog-header-dashes">-</span>
      </h1>
      <h2><?php _e('GOTCHA') ?></h2>

    </div><!-- end div.page-header -->
    <?php get_template_part('loop', 'category'); ?>
  </div><!-- end div#post-listing -->



      <aside class="span4" id="sidebar" role="complementary">
        <div id="sidebar-inside">
          <?php get_template_part('ad','side'); ?>

      <div id ="sidebar-menu">
        <div id="all-stories-tab" class="sidebar-tab" >
            <a id="all-stories-text" class="sidebar-tab-text" href="/category/photoblog" style="display:block;"> <?php _e( 'All Stories', 'gryphondor' ); ?></a></div>
        <div id="adventures-tab" class="sidebar-tab" >
            <a id="adventures-text" class="sidebar-tab-text" href="/category/photoblog/adventures-with-sid"> <?php _e( 'Adventures with Sid', 'gryphondor' ); ?></a></div>
        <div id="back-to-tab" class="sidebar-tab">
            <a id="back-to-text" class="sidebar-tab-text" href="/category/photoblog/back-to-the-future"> <?php _e( 'Back to the Future', 'gryphondor' ); ?></a></div>
        <div id="humans-of-tab" class="sidebar-tab">
            <a id="humans-of-text" class="sidebar-tab-text" href="/category/photoblog/humans-of-westwood"> <?php _e( 'Humans of Westwood', 'gryphondor' ); ?></a></div>
        <div id="week-in-tab" class="sidebar-tab">
            <a id="week-in-text" class="sidebar-tab-text" href="/category/photoblog/week-in-sports"> <?php _e( 'Week in Sports', 'gryphondor' ); ?></a></div>
        <div id="features-tab" class="sidebar-tab">
            <a id="features-text" class="sidebar-tab-text" href="/category/photoblog/features"> <?php _e( 'Features', 'gryphondor' ); ?></a></div>
        <hr id="sidebar-linebreak"> </hr>
        <a id="sidebar-about-link" href="/sample-page"> <?php _e( 'Behind the Blog', 'gryphondor' ); ?></a>
      </div><!--sidebar-menu-->


    </div><!-- end div#sidebar-inside -->
  </aside><!-- end aside#sidebar -->
  
  
</div><!-- end div#archive-content -->
<?php get_footer(); ?>