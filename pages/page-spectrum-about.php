<?php/*
Template Name: About Spectrum
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
  <div class="page-header">
      <?php get_template_part('sidebar','photoblog'); ?>
  </div><!-- end div.page-header -->
</div> <!-- end div#archive-content -->
<div class="row">
	<div class="small-12 columns" id="post-listing">
    <div class="pb-btb-text">
      <?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; 
      get_template_part('loop', 'page'); ?>
    </div>
  </div><!-- end div#post-listing -->
</div><!-- end row -->

<?php get_footer(); ?>
