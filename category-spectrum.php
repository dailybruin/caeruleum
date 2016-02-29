<?php get_header(); ?>

<div class="row">
<?php get_template_part('sidebar','photoblog'); ?>
</div>

<div class="row" id="archive-content">
  <div class="small-12 columns" id="post-listing">
    <div class="page-header">
      <?php /*if(is_category("sports-spectrum") ||
      is_category("campus-spectrum") ||
      is_category("humans-of-westwood") ||
      is_category("archives") ||
      is_category("westwoodla")) : ?>
          <a id="pb-logo" href="/category/spectrum"><img src="/img/spectrum-<?php echo($the_cat->slug) ?>.png"  /></a>
        <?php else : ?>
          <a id="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a>
        <?php endif */?>
        <!-- <a id="pb-logo" href="/category/spectrum"><img src="/img/spectrumlogo.png"  /></a> -->
      <!-- <h2>Exploring the UCLA experience through photojournalism</h2> -->
    </div><!-- end div.page-header -->
    <?php get_template_part('loop', 'category-photoblog'); ?>

  </div><!-- end div#post-listing -->
</div><!-- end div#archive-content -->
<?php get_footer(); ?>