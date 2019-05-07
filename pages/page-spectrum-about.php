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
      <?php echo '<link href="/css/photoblog.css?v=1365830494" rel="stylesheet" media="screen" type="text/css" />'; ?>
			<img class="small-12 columns" id="spectrum-about-img" src="http://dailybruin.com/images/2016/04/spectrum.png" alt="spectrum-about-img">
			<div class="small-12 columns">
				<p class="spectrum-about-text">Spectrum is the photojournalism blog of the Daily Bruin, showcasing the finest the department has to offer in visual journalism. This blog explores the versatility of digital media presentation by using photography as its primary storytelling device. From coverage of campus culture to the Los Angeles lifestyle to the latest in Bruin sports, Spectrum captures a broad range of the UCLA experience through visual terms.</p>
      	<p class="spectrum-about-text">All content on this blog, including file photos from the Daily Bruin archives, was taken by past and present Daily Bruin staff photographers.</p>
			</div>
    </div>
  </div><!-- end div#post-listing -->
</div><!-- end row -->

<?php get_footer(); ?>
