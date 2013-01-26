<?php get_header(); ?>

<div class="row" id="single-post">
<?php 
$spectrum = false;
foreach(get_the_category() as $cat)
{
	switch($cat->name)
	{
    	case "Spectrum":
			$spectrum = true;
    		break(2);
	}
}

if($spectrum) :
    get_template_part('loop', 'photoblog');
else : ?>
	<div class="span8" id="post">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->
			<?php get_sidebar(); ?>

<?php endif; ?>
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
