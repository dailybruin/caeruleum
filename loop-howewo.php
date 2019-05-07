<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1365830494" rel="stylesheet" media="screen" type="text/css" />'; ?>

<?php for ($i = 1; $i <= 12; $i++) : 
	the_post(); 
	$cats = get_the_category();
	if ($cats) {
		foreach($cats as $cat){
			if ($cat->name == "howewo"){
				$the_cat = $cat;
			}
		}
	}
	if (has_post_thumbnail()) : ?>
		<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(), 'full' ), 'full'); ?>
		<div class="howewo-img-wrap">
			<img src="<?php echo $image_src[0]; ?>" class="attachment-db-category-full wp-post-image" alt="thissucks" />
			<a href="<?php echo $image_src[0]; ?>" data-desc="<?php echo get_the_content(); ?>">
				<div style="width:100%;"><p><?php the_date('M j'); ?></p></div>
			</a>
		</div>
	<?php
	endif;
endfor;
?>