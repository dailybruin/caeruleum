<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: "Open Sans", "Helvetica", sans-serif; font-size: 10pt; font-weight: bold;}
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

	.columnist-cat.cat-online {
		background-color: yellow;
	}

	.columnist-cat.cat-dailybruin {
		background-color: blue;
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

</style>

<body>

<h1>Opinion Blog</h1>
        
    <div class="container-fluid">
        <div class="row-fluid">

            <div class="span5">
            <?php 
				$categoryObject = get_category_by_slug('community');
				$args = array(
					'posts_per_page'   => 1, 
					'category' => $categoryObject->cat_ID);

				$posts = get_posts($args);

				foreach ($posts as $post) :
					setup_postdata($post);
					echo the_post_thumbnail('large');
			?>

			<div class="category c1">OPINION</div>
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
				<?php
					$contributors = array(
						array(
							'email' => 'ndelgadillo@media.ucla.edu',
							'img' => 'http://dailybruin.com/images/userphoto/4684.jpg?1752233920',
							'cats' => array('Online', 'Daily Bruin')
							),
						array(
							'email' => 'rnelson@media.ucla.edu',
							'img' => 'http://dailybruin.com/images/userphoto/4771.jpg?1934400204',
							'cats' => array('Online', 'Daily Bruin')
							),
						array(
							'email' => 'atashman@media.ucla.edu',
							'img' => 'http://dailybruin.com/images/userphoto/4751.jpg?2076310971',
							'cats' => array('Online', 'Daily Bruin')
							)
						);
					$cat_to_css = array(
							'Online' => 'cat-online',
							'Daily Bruin' => 'cat-dailybruin'
						);
				?>
                <div class="columnist-column">
                    <h2 class="widget-title">Columnists</h2>
                    <?php
                    	foreach ($contributors as $cont) :
	                    	$user = get_user_by('email', $cont['email']);
	                    	$name = $user->first_name . ' ' . $user->last_name;
                    ?>
                    <div class="row-fluid columnist-row">
                    	<div id="columnist-mugshot" class="span5">
                    		<img src="<?php echo $cont['img'] ?>" alt="<?php echo $name ?>">
                		</div>
                		<div id="columnist-info" class="span7 columnist-info">
                			<div class="columnist-name"><?php echo $name ?></div>
                			<?php 
                				foreach ($cont['cats'] as $cat) :
            				?>
	            				<div class="columnist-line">
	            					<div class="columnist-line-content">
	                                    <span class="columnist-cat <?php echo $cat_to_css[$cat]?>"></span><span class="columnist-text"> <?php echo $cat ?></span>
	                                </div>
	                            </div>
                            <?php
                            	endforeach;
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
