<?php /*if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) :*/ ?>

<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<ul id="gallery">
	<?php foreach ( $images as $image ) : ?>
		<li><img src="<?php echo $image->imageURL ?>" alt="<?php echo $image->alttext ?>" data-description="<?php echo $image->description ?>" /></li>
 	<?php endforeach; ?>

</ul>	

<?php endif; ?>