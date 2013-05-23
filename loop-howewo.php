<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css?v=1359451557" rel="stylesheet" media="screen" type="text/css" />'; ?>

<?php while (have_posts() ): 
	the_post(); 
	$cats = get_the_category();
	if ($cats) {
		foreach($cats as $cat){
			if ($cat->name == "howewo"){
				$the_cat = $cat;
			}
		}
	}
	if (has_post_thumbnail()) :
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID, 'full' ), 'full');
		?>
		<?php the_post_thumbnail('db-category-full'); ?>
		<?php
	endif;
	
endwhile;
?>