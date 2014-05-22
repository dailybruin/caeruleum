<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: Open Sans; font-size: 10pt; font-weight: bold;}
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
        background-color: yellow;
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
		<!--<img class="featured-img" src="http://pets4u.info/wp-content/uploads/2013/12/baby-cats-and-dogs-7.jpg"/>-->
		<?php 
			$categoryid = 7;
			$categoryObject = get_category_by_slug('sports');
			$args = array(
				'category'			=> $categoryObject->cat_ID,
				'posts_per_page'  	=> 1,
				'orderby' 			=> 'post_date',
				'order'				=> 'DESC',
				);

			$recent_posts = wp_get_recent_posts($args);
			foreach( $recent_posts as $recent ){
				//setup_postdata($recent);
				echo get_the_post_thumbnail($recent["ID"], 'large');
				$authorID = $recent["post_author"];
				$author_info = get_userdata($authorID);
				echo '<div class="category c1">' . 'OPINION' . '</div>';
				echo '<div class="feature-date">' . get_the_time('F j, Y') . '</div>';
				echo '<div class="content">
					<a class="heading" href=' . get_permalink($recent["ID"]) . '>' . $recent["post_title"] . '</a><br/>';
					//echo '<div class="author"><a href=' . get_author_posts_url($authorID) . '>BY ' . $author_info->display_name . '</a></div>';
					echo '<div class="author">BY ' . $author_info->display_name . '</div>';
					echo '<div class="description">
						<p>' . $recent["post_excerpt"] . '<a href="#"> More >></a></p>';
					echo '</div>
				</div>';
				// echo "the author is " . get_author_posts_url($authorID);

				//echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
			}

		?>
		<!-- original static html
		<div class="category c1">CATS & DOGS</div>
		<div class="feature-date">MAY 11, 2014</div>

		<div class="content">
			<a class="heading" href="#">Why can't we be friends: The never-ending struggle</a><br/>
			<div class="author">BY JOE BRUIN</div>
			<div class="description">
				<p>It's a widely known that dogs and cats don't mix. But where did this notion of cat-people and dog-people come from? Why do we even care about this? Joe Bruin gives his two cents on the eternal feud of cat-loves and dog-lovers. <a href="#">More >></a></p>
			</div>
		</div>
		-->
		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c2">BIRDS & OTHER WINGED ANIMALS</div>

		<div class="row-fluid">
			<div class="span5">
				<?php
					$args = array( 'numberposts' => '5', 'category' => 1461);
					$recent_posts = wp_get_recent_posts( $args );

					$i = 0;
					foreach( $recent_posts as $recent ){
						if($i == 0) {
							if(has_post_thumbnail($recent["ID"])){
								echo '<div class="sub-img">' . get_the_post_thumbnail($recent["ID"], 'medium') . '</div>';
								if($recent["post_excerpt"] != "") {
									$excerpt = wp_trim_excerpt($recent["post_excerpt"]);
								}
								else {
									$strings = preg_split('/(\.|!|\?)\s/', strip_tags($recent["post_content"]), 2, PREG_SPLIT_DELIM_CAPTURE);
									$excerpt = apply_filters('the_content', $strings[0] .  $strings[1]);								}
							}
							echo '<a class="sec-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><br/><span class="author">' . get_userdata($recent["post_author"])->display_name . '</span><p>' . $excerpt . ' <a href="' . get_permalink($recent["ID"]) . '">More >></a></p></div><div class="span7 recent-cols">';
						}
						else {
							echo '<a class="sub-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><hr/>';
						}
						$i++;
					}
				?>
			</div>		
		</div>

		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c3">THE WONDERFUL LIVES OF TURTLES</div>

		<div class="row-fluid">
			<div class="span5">
				<?php
					$args = array( 'numberposts' => '5', 'category' => 1427);
					$recent_posts = wp_get_recent_posts( $args );

					$i = 0;
					foreach( $recent_posts as $recent ){
						if($i == 0) {
							if(has_post_thumbnail($recent["ID"])){
								echo '<div class="sub-img">' . get_the_post_thumbnail($recent["ID"], 'medium') . '</div>';
								if($recent["post_excerpt"] != "") {
									$excerpt = wp_trim_excerpt($recent["post_excerpt"]);
								}
								else {
									$strings = preg_split('/(\.|!|\?)\s/', strip_tags($recent["post_content"]), 2, PREG_SPLIT_DELIM_CAPTURE);
									$excerpt = apply_filters('the_content', $strings[0] .  $strings[1]);								}
							}
							echo '<a class="sec-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><br/><span class="author">' . get_userdata($recent["post_author"])->display_name . '</span><p>' . $excerpt . ' <a href="' . get_permalink($recent["ID"]) . '">More >></a></p></div><div class="span7 recent-cols">';
						}
						else {
							echo '<a class="sub-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><hr/>';
						}
						$i++;
					}
				?>
			</div>		
		</div>

		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c4">FLOWER POWER</div>

		<div class="row-fluid">
			<div class="span5">
				<?php
					$args = array( 'numberposts' => '5', 'category' => 1458);
					$recent_posts = wp_get_recent_posts( $args );

					$i = 0;
					foreach( $recent_posts as $recent ){
						if($i == 0) {
							if(has_post_thumbnail($recent["ID"])){
								echo '<div class="sub-img">' . get_the_post_thumbnail($recent["ID"], 'medium') . '</div>';
								if($recent["post_excerpt"] != "") {
									$excerpt = wp_trim_excerpt($recent["post_excerpt"]);
								}
								else {
									$strings = preg_split('/(\.|!|\?)\s/', strip_tags($recent["post_content"]), 2, PREG_SPLIT_DELIM_CAPTURE);
									$excerpt = apply_filters('the_content', $strings[0] .  $strings[1]);								}
							}
							echo '<a class="sec-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><br/><span class="author">' . get_userdata($recent["post_author"])->display_name . '</span><p>' . $excerpt . ' <a href="' . get_permalink($recent["ID"]) . '">More >></a></p></div><div class="span7 recent-cols">';
						}
						else {
							echo '<a class="sub-head title" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a><br/><span class="date">' . get_the_time('M j, Y',$recent["post_date"]) . '</span><hr/>';
						}
						$i++;
					}
				?>
			</div>		
		</div>


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
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span5">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span7 columnist-info">
                            <div class="columnist-name">Natalie Delgadillo</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span4">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span8 columnist-info">
                            <div class="columnist-name">Natalie Delgadillo</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span6">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span6 columnist-info">
                            <div class="columnist-name">Woah</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
	     <?php get_sidebar(); ?>

	</div>
    </div>
</body>

<?php get_footer(); ?>
