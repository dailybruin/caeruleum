<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; ?>

<div class="grid">
	<?php while (have_posts() ): the_post(); 
		$cats = get_the_category();
		//$the_cat = get_the_category()[0];
		if ($cats) {
			foreach($cats as $cat){
				if ($cat->slug == 'ae-spectrum') {
					$the_cat = $cat;
					break;
				} elseif ($cat->slug == 'news-spectrum') {
					$the_cat = $cat;
					break;
				} elseif ($cat->slug == 'sports-spectrum') {
					$the_cat = $cat;
					break;
				}
				$the_cat = $cat;
			}
		} ?>

		<div class="grid-item <?php echo $the_cat->slug ?>">
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
					<div class="photoblog-text" id="photoblog-post-text">
						<h3>
							<p id="photoblog-title">
								<a href="<?php the_permalink() ?>">
									<?php
									the_title();
									?>
								</a>
							</p>
						</h3> 
						<?php $t = get_the_excerpt(); 
							$periodPosition = strpos($t, '.');
							if ($periodPosition > 0) {
								echo  $t = substr($t, 0, $periodPosition); 
							} else {
								echo $t;
							}
							?>
						<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
						<p class="photoblog-sm">
								<!--
						    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-action="like" data-width:"100%" data-show-faces="true" data-share="true"></div>
								-->
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
// var iso = new Isotope( '.grid', {
//   layoutMode: 'packery'
// });
$("div.grid-item").hover(
	function () {
		$(this).find(".picOverlay").stop().fadeIn();
	}, 
	function () {
		$(this).find(".picOverlay").stop().fadeOut();
	}
);


/*
 * Isotope animations
 */

function filterPhotos(tag) {
  	iso.arrange({
  		filter: tag
	})
}


var allImgs = $(document).find('.photoblog-post-image img');
allImgs.height($(window).width() / 4);

$( window ).resize(function() {
	//resizeImages();
});

var resizeImages = function() {
	var allImgs = $(document).find('.photoblog-post-image img');

	var maxWidth = $(window).width() / 3; // Max width for the image
    var maxHeight = 300 //$(window).width() / 4;    // Max height for the image
    var ratio = 0;  // Used for aspect ratio
    var width = $(this).width();    // Current image width
    var height = $(this).height();  // Current image height

    // Check if the current width is larger than the max
    if(width > maxWidth){
        ratio = maxWidth / width;   // get ratio for scaling image
        allImgs.css("width", maxWidth); // Set new width
        allImgs.css("height", height * ratio);  // Scale height based on ratio
        height = height * ratio;    // Reset height to match scaled image
        width = width * ratio;    // Reset width to match scaled image

        // Check if current height is larger than max
        if(height > maxHeight){
            ratio = maxHeight / height; // get ratio for scaling image
            allImgs.css("height", maxHeight);   // Set new height
            allImgs.css("width", width * ratio);    // Scale width based on ratio
            width = width * ratio;    // Reset width to match scaled image
            height = height * ratio;    // Reset height to match scaled image
        }
    }

    
}


</script>

