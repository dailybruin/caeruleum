<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'><style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: "Open Sans", sans-serif; font-size: 10pt; font-weight: bold; color: #fff; text-transform: uppercase;}
	.c1 {background-color: #15134b; color: #fff;}
	.c2 {background-color: #881e2f; color: #fff;}
	.c3 {background-color: #19562a; color: #fff;}
	.c4 {background-color: #c7ba26; color: #fff;}
	.feature-date {margin-top: 50px; text-align: right; float: right; color: #545454; font-size: 8pt;}
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
	.blog-posts {
		font-size: 1.2em;
	}

	.two-cents-post {
		border-top: 1px solid gray;
		margin-bottom: 10px;
		padding-left: 10px;
	}

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
		margin-top: 30px;
		font-family: 'Playfair Display SC', serif;
		font-size: 5.5em;
		line-height: 90%;	
	}

	.blog-header img {
	  float: left;
	  height: 70px;
	}

	.blog-header h1 {
	  position: relative;
	  left: 10px;
	}

    /*Phillip's Style*/

	.video-wrapper {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 25px;
		height: 0;
	}

	.video-wrapper iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

    .columnist-row {
        margin-bottom: 20px;
    }

    .columnist-info {
        display: inline-block;
        text-align: left;
		font-size: 1.4em;
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
	.cat-two-cents {
		background-color: black;
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
			'two-cents' => array('name' => 'Two Cents', 'css' => 'cat-two-cents'),
			'idle-thoughts' => array('name' => 'Idle Thoughts', 'css' => 'cat-idle-thoughts'),
			'political-commentary' => array('name' => 'Political Commentary', 'css' => 'cat-political-commentary'),
			'social-commentary' => array('name' => 'Social Commentary', 'css' => 'cat-social-commentary'),
			'sports-two-cents' => array('name' => 'Sports', 'css' => 'cat-sports')
		);

	$cats = array(
			'Two Cents', 'Idle Thoughts', 'Political Commentary', 'Social Commentary', 'Sports'
		);

	$contributors = array(
		array(
			'name' => 'Natalie Delgadillo',
			'email' => 'ndelgadillo@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Natalie.Delgadillo-212x300.jpg',
			'slugs' => array('idle-thoughts'),
			'position' => 'Opinion Editor'
			),
		array(
			'name' => 'Julia McCarthy',
			'email' => 'jmccarthy@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Julia_.McCarthy-211x300.jpg',
			'slugs' => array('social-commentary'),
			'position' => 'Assistant Opinion Editor'
			),
		array(
			'name' => 'Aram Ghoogasian',
			'email' => 'aghoogasian@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Aram_.Ghoogasian-211x300.jpg',
			'slugs' => array('political-commentary'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Jordan Lee',
			'email' => 'jlee2@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Jordan.Lee_-211x300.jpg',
			'slugs' => array('sports-two-cents'),
			'position' => 'Sports Staff Writer'
			),
		array(
			'name' => 'Chloe Lew',
			'email' => 'clew@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Chloe_.Lew_-211x300.jpg',
			'slugs' => array('social-commentary'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Ryan Nelson',
			'email' => 'rnelson@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Ryan_.Nelson-212x300.jpg',
			'slugs' => array('idle-thoughts'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Travis Fife',
			'email' => 'tfife@media.ucla.edu',
			'img' => 'http://dailybruin.com/images/2014/11/web.Travis.Fife_-211x300.jpg',
			'slugs' => array('political-commentary'),
			'position' => 'Opinion Staff Writer'
			)
		);
?>
<body>

        
    <div class="container-fluid">


		<div class="row-fluid blog-header">
			<div class="span12">
			<img src="http://dailybruin.com/images/2014/09/2centsblog-cropped.jpg" alt="logo" style="width: 200px; height: 100%;">
			<h1 id="blog-title">Two Cents</h1>
			</div>
		</div>
        <div class="row-fluid">

            <div class="span7 blog-posts">

			<div class="row-fluid">
				<div class="span12">
					<?php
						$categoryObject = get_category_by_slug('two-cents');

						$args = array('posts_per_page'   => 8, 'category' => $categoryObject->cat_ID);
						
						$posts = get_posts( $args );

						foreach ($posts as $post) : setup_postdata($post);
							echo "<div class=\"two-cents-post\">";
							if ( '' != get_the_post_thumbnail() ) : ?>
								<div class="sub-img"> <?php the_post_thumbnail('medium'); ?> </div>
							<?php endif; ?>

							<?php $categories = get_the_category();

							foreach ($categories as $cat){
								if(in_array($cat->cat_name,$cats)) {
									echo "<div class=\"category " . $slug_to_cat[$cat->slug]['css'] . "\">" . $slug_to_cat[$cat->slug]['name'] . "</div><br/>";
									break;
								}
							}
							?>

							<a class="sec-head title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>

							<span class="date"><?php the_time('M j, Y'); ?></span><br/>

							<span class="author"><?php the_author(); ?></span>

							<p> <?php the_excerpt(); ?> <a href="<?php get_permalink(the_ID()); ?>">More >></a></p>
							</div>

						<?php endforeach;
				
						wp_reset_postdata(); 
					?>
				</div>
			</div>
	     </div>

            <div class="span5" id="right-column">
            	<div class="video-section">
            		<h2 class="widget-title">Bruins on the Street</h2>
	            	<div class="video-wrapper">
		            <?php
						$args = array( 'numberposts' => 1, 'tag' => 'two-cents-video' );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
		                 <span><?php the_content(); ?></span>
					<?php endforeach; ?>

<!-- 		            <?php
						$video_category = get_category_by_slug('two-cents-video');

						$video_args = array('posts_per_page' => 1, 'category' => $video_category->cat_ID);

						$video_posts = get_posts( $video_args );

						foreach ($video_posts as $video_post) : setup_postdata($video_post);
							echo html_entity_decode(get_the_content());
						endforeach;

						wp_reset_postdata();
					?>
 -->	            </div>
 				</div>
				<!-- 
            	<div id="widget-reaction-quote">
            		<h2 class="widget-title">Recent Reactions</h2>
                    <?php
                        // TODO fill in appropriate parameters.
                    	$reaction_slug = 'reactions';
                        $num_reactions = 3;
                        $reaction_cat_id = get_category_by_slug($reaction_slug)->cat_ID;
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
            	-->
                <div class="columnist-column">
                    <h2 class="widget-title">Columnists</h2>
                    <?php
                    	foreach ($contributors as $contributor) :
	                    	$user = get_user_by('email', $contributor['email']);
	                    	$name = $user->first_name . ' ' . $user->last_name;
                    ?>
                    <div class="row-fluid columnist-row">
                    	<div id="columnist-mugshot" class="span4">
                    		<img src="<?php echo $contributor['img'] ?>" alt="<?php echo $contributor['name'] ?>">
                		</div>
                		<div id="columnist-info" class="span8 columnist-info">
                			<div class="columnist-name"><?php echo $contributor['name'] ?></div>
                			<?php 
                				foreach ($contributor['slugs'] as $contributor_slug) ;
                					$contributor_cat = $slug_to_cat[$contributor_slug];
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

	</div>
    </div>
</body>

<?php get_footer(); ?>
