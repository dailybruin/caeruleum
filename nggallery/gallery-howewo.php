<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
<?php /*
<div class="row">
	<?php 
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
	?>
</div>
  */?>
<div class="row" id="howewo-container">
	<?php foreach ( $images as $image ) : ?>
		<img src="<?php echo $image->imageURL ?>" alt="<?php echo $image->alttext ?>" data-description="<?php echo htmlspecialchars($image->description); ?>" value="<?php echo $image->tags[0] ?>" />
 	<?php endforeach; ?>
</div>


<?php endif; ?>
