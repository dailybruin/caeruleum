<?php
/*
YARPP Template: Smaller Thumbnails
Description: Displays headline next to photo of the post
Author: bryanvtran (Bryan Tran)
*/
?><?php if (have_posts()):?>
<div id="sidebar-similar" class="side-info">
		<h4 class="yarpp-title">Related Content</h4>
		<ul class="related-posts">
			<?php while (have_posts()) : the_post(); ?>
            <li>
                <div class="row">
                <?php if (has_post_thumbnail()): ?>
                    <div class="small-8 columns" style="padding-right: 0.4rem;">
                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <h4><?php /* get first category in list */ $categories = get_the_category(); echo $categories[0]->name ?></h4>
                        </a>
												<p><?php the_time('F j, Y'); ?></p>
                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="small-4 columns">
                        <a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_post_thumbnail('db-category-thumb'); ?>
                        </a>
                    </div>
                <?php else: ?>
                <div class="small-12 columns">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <h4><?php /* get first category in list */ $categories = get_the_category(); echo $categories[0]->name ?></h4>
                    </a>
										<p><?php the_time('F j, Y'); ?></p>
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <?php the_title(); ?>
                    </a>
                </div>
                <?php endif; ?>
                </div>
            </li>
            <hr />
			<?php endwhile; ?>
		</ul>
</div><!-- end div#sidebar-similar -->
<?php else: ?>
	<div id="sidebar-similar" class="side-info">
			<h4 class="yarpp-title">Related Content</h4>
			<p class="redirect-text">Read more for <?php the_category(", "); ?></p>
	</div>
<?php endif; ?>
