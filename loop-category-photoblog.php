<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1365830494" rel="stylesheet" media="screen" type="text/css" />';
// function for parsing img url
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
?>

<div class="grid-wrapper">
	<div class="grid">
		<?php
		$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts(array(
			'posts_per_page' => 15,
			'category_name' => 'Spectrum',
	        'paged' => $page
		));

		while (have_posts() ): the_post();
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
					<a href="<?php the_permalink(); ?>">
						<div class="photoblog-post-image" id ="pb-image-<?php echo $the_cat->slug; ?>"
							style="background-image: url('<?php
															$picID = get_post_meta($post->ID, 'singlepic', true);
															$image = do_shortcode('[singlepic id='.$picID.']');
                                                            $parsed = get_string_between($image, 'data-src="', PHP_EOL);
											            	$parsed = str_replace("\"", "", $parsed);
											            	echo $parsed;
														?>');">

						</div>
					</a>

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
							<p id="photoblog-post-excerpt">
								<?php $t = get_the_excerpt();
									$periodPosition = strpos($t, '.');
									if ($periodPosition > 0) {
										echo  $t = substr($t, 0, $periodPosition);
									} else {
										echo $t . '...';
									}
									?>
							</p>
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
</div>

<?php
$total_pages = $wp_query->max_num_pages;
if ($total_pages > 1) {
  $current_page = max(1, get_query_var('paged'));  ?>
  <div class="pagination-centered">
  <?php echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => 'page/%#%',
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

// Set to white DB logo
jQuery(".db-logo-spectrum").css({'display':'block'});
// set navbar to white
jQuery("#topBar > li > a").css({'color': 'white'});

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
jQuery("div.grid-item").hover(
	function () {
		jQuery(this).find(".picOverlay").stop().fadeIn();
	},
	function () {
		jQuery(this).find(".picOverlay").stop().fadeOut();
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


function setupGrid() {
	var allImgs = jQuery(document).find('.photoblog-post-image');
	allImgs.height(jQuery(window).width() / 4);
	jQuery(document).find('.grid-item').width(jQuery(document).find('.grid-wrapper').width() / 3);
	filterPhotos('*');
}

setupGrid();

jQuery(window).on('resize', function(){
	setupGrid();
});

</script>
