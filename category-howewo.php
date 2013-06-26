<?php/*
Template Name: HOWEWO
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span12" id="post-listing">
    <?php echo '<link href="/css/photoblog.css?v=1359451557" rel="stylesheet" media="screen" type="text/css" />'; ?>
    <div class="row page-header">
      <div class="span8" id="howewo-banner" >
      </div>
      <div class="span4">
        <?php get_template_part('ad','side'); ?>
      </div>
    </div>
    <div class="span12 page-content">
      <div class="row" id="howewo-container">
        <?php get_template_part( 'loop', 'howewo' ); ?>
        <?php for ($i = 1; $i <= 4; $i++) { ?>
          <div class="span3 howewo-column"></div>
        <?php } ?>
      </div>
      <div class="row" id="howewo-load"></div>
    </div>
      
  </div><!-- end div#post-listing -->
</div><!-- end div#archive-content -->

<div id="howewo-lightbox"></div> 
<?php get_footer(); ?>
