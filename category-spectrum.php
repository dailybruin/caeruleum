<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
    <div class="page-header">
      <a id="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
      <h2>Exploring the UCLA experience through photojournalism</h2>
    </div><!-- end div.page-header -->
    <?php get_template_part('loop', 'category-photoblog'); ?>
  </div><!-- end div#post-listing -->


  <?php get_template_part('sidebar','photoblog'); ?>
  
</div><!-- end div#archive-content -->
<?php get_footer(); ?>