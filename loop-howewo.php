<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1359451557" rel="stylesheet" media="screen" type="text/css" />'; ?>
<div class="row" id="howewo-container">
<?php while (have_posts() ): 
	the_post(); 
	$cats = get_the_category();
	if ($cats) {
		foreach($cats as $cat){
			if ($cat->name == "HOWEWO-page"){
				$the_cat = $cat;
			}
		}
	}
	if (has_post_thumbnail()) :
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID, 'full' ));
		$size = getimagesize($image_url[0]);
		?>
		<?php the_post_thumbnail('db-category-full'); ?>
		<!--img src="<?php echo $image_url[0]; ?>" style="width: 300px; " alt="DERPPPPPP" /-->
		<?php
	endif;
	/*
	$col_count = 4;
	$cols = array();
	$col_heights = array();
	for ($n = 0; $n < $col_count; $n++) :
		$cols[] = array();
		$col_heights[] = 0;
	endfor;
	foreach ( $images as $image ) : 
		$size = getimagesize($image->imagePath);
		$hwratio = $size[1]/$size[0];
		$short_index = 0;
		$short_value = $col_heights[0];
		foreach ($col_heights as $key => $col_height):
			if ($col_height < $short_value){
				$short_index = $key;
				$short_value = $col_height;
			}
		endforeach;
		//echo gettype($short_value);
		$col_heights[$short_index] += $hwratio;
		$cols[$short_index][] = $image;
	endforeach;

	for ($n = 0; $n < $col_count; $n++) :
		echo "<div class='span3 howewo-column' >";
		foreach ($cols[$n] as $image) :
			echo "<img src=$image->imageURL alt=$image->alttext data-description=$image->description value=$image->tags[0] />";
		endforeach;
		echo "</div>";

	endfor;
	*/
endwhile;
?>
</div>