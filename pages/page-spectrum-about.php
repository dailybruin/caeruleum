<?php/*
Template Name: About Spectrum
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="small-9 columns" id="post-listing">
    <div class="page-header">
      <a class="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
      <h2>Exploring the UCLA experience through photojournalism</h2>
        <div class="pb-btb-text">
        <?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; 
              get_template_part('loop', 'page'); ?>
        </div>

    
    </div><!-- end div.page-header -->
  </div><!-- end div#post-listing -->
<div class="small-3 columns" id="post-listing">
<?php get_template_part('sidebar','photoblog'); ?>
</div>
</div><!-- end div#archive-content -->

<?php get_footer(); ?>
