<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>
<?php while (have_posts() ): the_post(); 

	$cats = get_the_category();
	//$the_cat = get_the_category()[0];
	if ($cats) {
		foreach($cats as $cat){
			if ($cat->name != "Spectrum"){
				$the_cat = $cat;
			}
		}
	} ?>


	<div id="photoblog-post-block">
		<a href= "/category/spectrum/<?php echo $the_cat->slug; ?>" class="photoblog-post-tag pb-tag-<?php echo $the_cat->slug; ?>">
			<?php if ($the_cat->slug == "archives"): { ?>
				ARCHIVES <?php } ?>
			<?php elseif ($the_cat->slug == "campus-spectrum"): { ?>
				CAMPUS <?php } ?>
			<?php elseif ($the_cat->slug == "humans-of-westwood"):{ ?>
				HOWEWO <?php } ?>
			<?php elseif ($the_cat->slug == "sports-spectrum"):{ ?>
				SPORTS <?php } ?>
			<?php elseif ($the_cat->slug == "westwoodla"):{ ?>
				WW/LA <?php } ?>
			

			<?php endif ?>
		</a>
		<div class="photoblog-post-image" id ="pb-image-<?php echo $the_cat->slug; ?>">

		<a href="<?php the_permalink(); ?>">
			<?php $singlepicture = get_post_meta($post->ID, 'singlepic', true);
			echo do_shortcode('[singlepic id='.$singlepicture.']');
			?>
		</a>
		
		</div>
		<div class="photoblog-text" id="photoblog-post-text">
				<h1>
				<a href="<?php the_permalink() ?>">
					<?php /*echo $the_cat->name;
					echo (": "); */
					the_title();
					?>
				</a></h1> 

			<?php the_excerpt(); ?>
			<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>
			<p class="photoblog-sm">
			    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" data-via="dailybruin" data-related="dailybruin">Tweet</a>
			    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</p>
		</div>
	</div> <!--photoblog-post-block-->
<?php endwhile; /* End loop */ ?>

<?php        
$total_pages = $wp_query->max_num_pages;  
if ($total_pages > 1) {  
  $current_page = max(1, get_query_var('paged'));  ?>
  <div class="pager pager-pb"> 
  <?php echo paginate_links(array(  
      'base' => get_pagenum_link(1) . '%_%',  
      'format' => '/page/%#%',  
      'current' => $current_page,  
      'total' => $total_pages,  
      'prev_text' => '&larr; Prev',  
      'next_text' => 'Next &rarr;'  
    ));  ?>
  </div><!-- end div.pager -->
<?php
} 
?>

<?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>