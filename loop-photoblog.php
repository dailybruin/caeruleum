<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>

		<?php the_post() ?>
		<div class="page-header">
	      <a div="pb-logo" href="/category/photoblog"><img src="/img/spectrumlogo.png"  /></a>
	      <!--h2><?php _e('GOTCHA!') ?></h2-->

	    </div><!-- end div.page-header -->
		<div id="pb-gallery-block">
			<div id="pb-gallery-image">
				<?php $gallery = get_post_meta($post->ID, 'gallery', true);
				echo do_shortcode('[nggallery id='.$gallery.' template="galleryview"]');
				?>
			</div>
			<div class="photoblog-text" id="pb-gallery-text">
				<?php
					$cats = get_the_category();
					//$the_cat = get_the_category()[0];
					if ($cats) {
						foreach($cats as $cat){
							if ($cat->name != "Photoblog"){
								$the_cat = $cat;
								/*
								echo $cat->name;
								echo (": "); 
								the_title();*/
							}
						}
					}
					?>
					<h1>
					<a href="/category/photoblog/<?php echo($the_cat->slug) ?>">
						<?php echo $the_cat->name;
						echo (": "); 
						the_title();
						?>
					</a></h1> 

				<?php the_content(); ?>
				<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>

				<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
			</div>
		</div> <!--photoblog-post-block-->
