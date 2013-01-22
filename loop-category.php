<?php /* Start loop */ ?>
<?php echo '<link href="/css/photoblog.css" rel="stylesheet" media="screen" type="text/css" />'; ?>
<?php $posts_per_page = 5; ?>
<?php while (have_posts() and $posts_per_page != 0): the_post(); 
$posts_per_page--;?>
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

	<div id="photoblog-post-block">
		<div class="photoblog-post-image" id ="pb-image-<?php echo $the_cat->name; ?>">
		<a href="<?php the_permalink(); ?>">
			<?php $singlepicture = get_post_meta($post->ID, 'singlepic', true);
			echo do_shortcode('[singlepic id='.$singlepicture.']');
			?>
		</a>
		
		</div>
		<div class="photoblog-text" id="photoblog-post-text">
				<h1>
				<a href="<?php the_permalink() ?>">
					<?php echo $the_cat->name;
					echo (": "); 
					the_title();
					?>
				</a></h1> 

			<?php the_excerpt(); ?>
			<p id="photoblog-post-author">Credit to <?php the_author(); ?>.</p>
		</div>
	</div> <!--photoblog-post-block-->
<?php endwhile; /* End loop */ ?>

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>