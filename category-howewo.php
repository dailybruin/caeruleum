<?php/*
Template Name: HOWEWO
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span12" id="post-listing">
    <?php echo '<link href="/css/photoblog.css?v=1365830494" rel="stylesheet" media="screen" type="text/css" />'; ?>
    <div class="row page-header">
      <div class="span8" id="howewo-banner" >
        <img src="/img/howewo-banner.jpg" />
        <div>
          <p>HUMANS OF<br/><span>WESTWOOD</span></p>
          <div id="howewo-banner-nav">
            <a href="#">All Photos</a>
            <a href="#">About</a>
            <a href="/category/spectrum">Spectrum</a>
          </div>
        </div>
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
  <div id="howewo-lightbox" hidden='true'>
    <div id="lightbox-container">
      <img id='lb-image' src="" />
      <div id='lb-description'><p></p></div>
      <div class="nav left"></div>
      <div class="nav right"></div>
      <div id="lb-close">x</div>
    </div>
  </div>
</div><!-- end div#archive-content -->

<?php get_footer(); ?>
