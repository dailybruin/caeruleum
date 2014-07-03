<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC' rel='stylesheet' type='text/css'>
<style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: "Open Sans", sans-serif; font-size: 10pt; font-weight: bold; color: #fff; text-transform: uppercase;}
	.c1 {background-color: #15134b; color: #fff;}
	.c2 {background-color: #881e2f; color: #fff;}
	.c3 {background-color: #19562a; color: #fff;}
	.c4 {background-color: #c7ba26; color: #fff;}
	.feature-date {margin-top: 15px; text-align: right; float: right; color: #545454; font-size: 8pt;}
	.date {color: #545454; font-size: 8pt;}
	a.heading {color: #000; font-family: Georgia; font-size: 18.2pt; font-weight: bold; line-height: 1.1em;}
	.author {text-transform: uppercase;font-weight: bold; font-family: Georgia;text-transform:uppercase;font-size:9pt;margin: 10px 0 5px 0;}
	.sub-img {margin: 10px 0 10px 0;}
	.recent-cols {padding: 20px 0 10px 10px;}
	a.sec-head {font-size: 14pt; font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.sub-head {font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.title {color: #000;}
	.illo {margin: 10px 0 10px 0;}

	/*Simon's Style*/
    .widget-title {
		font-family: Open Sans,Arial,Decima,"Helvetica Neue",Helvetica,sans-serif;
		letter-spacing: 1px;
		background-color: #222;
		color: #fefefe;
		text-transform: uppercase;
		padding: 7px 0 5px 10px;
		font-size: 10pt; 
		font-weight: bold;
		line-height: 20px;
	}
	
	#widget-reaction-quote {padding-bottom: 10px;}

	blockquote p {
		display: inline-block;
		margin-bottom: 1em;
		line-height: 1.16667em;
		margin-left: 1em;
		margin-right: 1em;
		font-style: italic;
	}

	#quotation-mark {
		float: left;
		font-size: 5em;
		margin-bottom: .1em;
		position: relative;
		top: .3em;
		font-family: "Harriet Display", Georgia, Times, "Times New Roman", serif;
	}

	blockquote.reaction {
		border-left: 0;
	}

	#right-column {
		border-left: 1px solid #eeeeee;
		padding-left: 10px;
		border-right: 1px solid #eee;
		padding-right: 10px;
	}

	p.attribution {
		float: right;
		color: gray;
	}

	#blog-title {
		font-family: Playfair Display SC;	
	}

    /*Phillip's Style*/
    .columnist-row {
        margin-bottom: 20px;
    }

    .columnist-info {
        display: inline-block;
        text-align: left;
    }

    .columnist-name {
        font-weight: bold;
        word-wrap: break-word;
    }

    .columnist-line {
        margin: 5px 10px 10px 10px;
    }

    .columnist-line-content {
        display: inline-block;
    }

    .columnist-text {
        vertical-align: middle;
    }

    .columnist-cat {
        display: inline-block;
        vertical-align: middle;
        height: 14px;
        width: 14px;
        background-color: black;
    }

    @media (min-width: 768px) and (max-width: 979px) {
        .columnist-column {
            text-align: center;
        }
        #columnist-mugshot {
            width: 100%;
        }
        #columnist-info {
            width: 100%;
            margin: auto 15px;
        }
    }

    @media (max-width: 767px) {
        .columnist-column {
            text-align: left;
        }
        #columnist-mugshot {
            display: inline-block;
            width: auto;
        }
        #columnist-info {
            display: inline-block;
            width: auto;
        }
    }

	.cat-idle-thoughts {
		background-color: #660066;
	}

	.cat-political-commentary {
		background-color: #19562a;
	}

	.cat-social-commentary {
		background-color: #c7ba26;
	}

	.cat-sports {
		background-color: #881e2f;
	}

</style>

<?php
	$slug_to_cat = array(
			'idle-thoughts' => array('name' => 'Idle Thoughts', 'css' => 'cat-idle-thoughts'),
			'political-commentary' => array('name' => 'Political Commentary', 'css' => 'cat-political-commentary'),
			'social-commentary' => array('name' => 'Social Commentary', 'css' => 'cat-social-commentary'),
			'sports-two-cents' => array('name' => 'Sports', 'css' => 'cat-sports'),
		);

	$contributors = array(
		array(
			'name' => 'Natalie Delgadillo',
			'email' => 'ndelgadillo@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4783.jpg',
			'slugs' => array('sports', 'community'),
			'position' => 'Opinion Editor'
			),
		array(
			'name' => 'Julia McCarthy',
			'email' => 'jmccarthy@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4930.jpg',
			'slugs' => array('sports'),
			'position' => 'Assistant Opinion Editor'
			),
		array(
			'name' => 'Aram Ghoogasian',
			'email' => 'aghoogasian@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4894.jpg',
			'slugs' => array('sports', 'community'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Jordan Lee',
			'email' => 'jlee2@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4844.jpg',
			'slugs' => array('sports', 'community'),
			'position' => 'Sports Staff Writer'
			),
		array(
			'name' => 'Chloe Lew',
			'email' => 'clew@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4875.jpg',
			'slugs' => array('sports', 'community'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Ryan Nelson',
			'email' => 'rnelson@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4771.jpg',
			'slugs' => array('news', 'fake'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Alexandra Tashman',
			'email' => 'atashman@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/userphoto/4751.jpg',
			'slugs' => array('community', 'community'),
			'position' => 'Prime Editor'
			)
		);
?>
<body>
<h1 id="blog-title">Two Cents</h1>
        
    <div class="container-fluid">
        <div class="row-fluid">

            <div class="span5">
            <?php 
				$args = array(
					'posts_per_page'   => 1, 
					'tag' => 'op-feature');

				$posts = get_posts($args);

				foreach ($posts as $post) :
					setup_postdata($post);
					$categories = get_the_category($post->ID);
					echo the_post_thumbnail('large');

				foreach ($categories as $cat) {
					if($cat->name == 'Idle Thoughts' || $cat->name == 'Political Commentary' || $cat->name == 'Social Commentary' || $cat->name == 'Sports' || $cat->name == "Two Cents"){
						$category = $cat->slug;
						break;
					}
				}
			?>

			<div class="category <?php echo $slug_to_cat[$category]['css'] ?>"><?php echo $slug_to_cat[$category]['name'] ?></div>
			<div class="feature-date">
				<?php the_time('F j, Y'); ?>
			</div>
			<div class="content">
				<a class="heading" href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</div>
			<div class="author">
					BY <?php the_author(); ?>
			</div>
			<div class="description">
				<p><?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">More &#187;</a>
				</p>
			</div>
			<?php endforeach; ?>
		
		<?php
			foreach ( $slug_to_cat as $slug => $cat) :
		?>
			<hr style="height:2px;border:none;color:#333;background-color:#333;" />

			<div class="category <?php echo $cat['css'] ?>"><?php echo $cat['name'] ?></div>

			<div class="row-fluid">
				<div class="span5">
					<?php
						$featureTags = array('7484');
						$categoryObject = get_category_by_slug($slug);
						$args = array('posts_per_page'   => 5, 'category' => $categoryObject->cat_ID, 'tag__not_in' => $featureTags);
						
						$posts = get_posts( $args );

						$i = 0;
						foreach ( $posts as $post ) : setup_postdata( $post );
							if($i == 0) :
								if ( '' != get_the_post_thumbnail() ) : ?>
									<div class="sub-img"> <?php the_post_thumbnail('medium'); ?> </div>
								<?php endif; ?>

								<a class="sec-head title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>

								<span class="date"><?php the_time('M j, Y'); ?></span><br/>

								<span class="author"><?php the_author(); ?></span>

								<p> <?php the_excerpt(); ?> <a href="<?php get_permalink(the_ID()); ?>">More >></a></p>

								</div>

								<div class="span7 recent-cols">

							<?php else : ?>
								<a class="sub-head title" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br/>

								<span class="date"><?php the_time('M j, Y'); ?></span><hr/>				
		
							<?php endif; $i++; ?>
						<?php endforeach; 
						wp_reset_postdata(); ?>

				</div>		
			</div>
		<?php
			endforeach;
		?>
	     </div>

            <div class="span3" id="right-column">
            	<div id="widget-reaction-quote">
            		<h2 class="widget-title">Recent Reactions</h2>
                    <?php
                        // TODO fill in appropriate parameters.
                    	$reaction_slug = 'reactions';
                        $num_reactions = 3;
                        $reaction_cat_id = get_category_by_slug(reaction_slug)->cat_ID;
                        $args = array('posts_per_page' => $num_reactions, 'category' => $reaction_cat_id);
                        $reaction_posts = get_posts($args);
                        foreach ( $reaction_posts as $post ) :
                    ?>
                            <blockquote class="reaction">
                            <span id="quotation-mark">“</span>
                            <p><a href="<?php the_permalink(); ?>">
                            <?php
                                setup_postdata($post);
                                $excerpt = get_the_excerpt();
                                echo $excerpt
                            ?>
                            </a></p>
            		        <p class="attribution">&ndash; <?php the_author(); ?></p></blockquote>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
            	</div>
                <div class="columnist-column">
                    <h2 class="widget-title">Columnists</h2>
                    <?php
                    	foreach ($contributors as $contributor) :
	                    	$user = get_user_by('email', $contributor['email']);
	                    	$name = $user->first_name . ' ' . $user->last_name;
                    ?>
                    <div class="row-fluid columnist-row">
                    	<div id="columnist-mugshot" class="span5">
                    		<img src="<?php echo $contributor['img'] ?>" alt="<?php echo $contributor['name'] ?>">
                		</div>
                		<div id="columnist-info" class="span7 columnist-info">
                			<div class="columnist-name"><?php echo $contributor['name'] ?></div>
                			<?php 
                				// foreach ($contributor['slugs'] as $contributor_slug) :
                				// 	$contributor_cat = $slug_to_cat[$contributor_slug];
            				?>
	            				<div class="columnist-line">
	            					<div class="columnist-line-content">
	                                    <span class="columnist-cat <?php echo $contributor_cat['css'] ?>"></span><span class="columnist-text"> 
	                                    <?php echo $contributor['position'] ?>
	                                    <!--<?php echo $contributor_cat['name'] ?>-->
	                                    </span>
	                                </div>
	                            </div>
                            <?php
                            	// endforeach;
                            ?>
                        </div>
                    </div>
                    <?php	
                    endforeach;
                    ?>
                </div>
            </div>   
	     <?php get_sidebar(); ?>

	</div>
    </div>
</body>

<?php get_footer(); ?>
