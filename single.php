<?php
if(get_field('db_article_format') === "list"):
		get_template_part('loop', 'list');
else : ?>

<?php get_header(); ?>

<div class="row db-story" id="single-post">
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
<div class="row db-story">
	<div class="large-8 columns">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- end div#post -->

			<?php get_sidebar(); ?>
</div>
<?php endif; ?>
</div><!-- end div#single-post -->


<?php get_footer(); ?>
<?php endif; ?>