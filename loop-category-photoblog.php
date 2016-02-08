<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="grid">
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

		<div class="grid-item">
			<div id="photoblog-post-block">
				<div class="photoblog-post-image" id ="pb-image-<?php echo $the_cat->slug; ?>">

				<a href="<?php the_permalink(); ?>">
					<?php $singlepicture = get_post_meta($post->ID, 'singlepic', true);
					$image = do_shortcode('[singlepic id='.$singlepicture.']');
		            
		            $permalink = get_permalink();
		            $start_of_href = strpos($image, 'href');
		            $start_of_url = strpos($image, '"', $start_of_href);
		            $end_of_url = strpos($image, '"', $start_of_url+1);

		            $final_tag = substr($image, 0, $start_of_url) . "\"" . $permalink . substr($image, $end_of_url);
		            echo $final_tag;
					?>
				</a>
				
				</div>

				<div class="picOverlay">
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
					
					<div class="photoblog-text" id="photoblog-post-text">
							<h2>
							<a href="<?php the_permalink() ?>">
								<?php /*echo $the_cat->name;
								echo (": "); */
								the_title();
								?>
							</a></h2> 

						<?php the_excerpt(); ?>
						<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
						<p class="photoblog-sm">
						    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
						</p>
					</div>
				</div>
			</div> <!--photoblog-post-block-->
		</div> <!-- isotope grid -->
	<?php endwhile; /* End loop */ ?>
</div>

<?php        
$total_pages = $wp_query->max_num_pages;  
if ($total_pages > 1) {  
  $current_page = max(1, get_query_var('paged'));  ?>
  <div class="pagination-centered"> 
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

<script type="text/javascript">
	 /* Isotope
  * ==================== */

var elem = document.querySelector('.grid');
var iso = new Isotope( elem, {
  // options
  itemSelector: '.grid-item',
  layoutMode: 'fitRows'
});

// element argument can be a selector string
//   for an individual element
var iso = new Isotope( '.grid', {
  // options
});

$("div.grid-item").hover(
	function () {
		$(this).find(".picOverlay").show();
	}, 
	function () {
		$(this).find(".picOverlay").hide();
	}
);

</script>
