<?php

/**
 * Add the RSS feed link in the <head> if there's posts
 */
function roots_feed_link() {
  $count = wp_count_posts('post'); if ($count->publish > 0) {
    echo "\n\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"". get_bloginfo('name') ." Feed\" href=\"". home_url() ."/feed/\">\n";
  }
}

add_action('roots_head', 'roots_feed_link');

/**
 * Add the asynchronous Google Analytics snippet from HTML5 Boilerplate
 * if an ID is defined in config.php
 *
 * @link mathiasbynens.be/notes/async-analytics-snippet
 */
function roots_google_analytics() {
  if (GOOGLE_ANALYTICS_ID) {
    echo "\n\t<script>\n";
    echo "\t\tvar _gaq=[['_setAccount','" . GOOGLE_ANALYTICS_ID . "''],['_trackPageview']];\n";
    echo "\t\t(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];\n";
    echo "\t\tg.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';\n";
    echo "\t\ts.parentNode.insertBefore(g,s)}(document,'script'));\n";
    echo "\t</script>\n";
  }
}

add_action('roots_footer', 'roots_google_analytics');

function howewo_ajax_enqueue() {
	if (is_category('howewo') ){
		wp_enqueue_script( 'ajax-script', get_template_directory_uri().'/js/vendor/infinitescroll.js', array('jquery'));

		wp_localize_script( 'ajax-script', 'ajax_object',
		    array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
		}
	}
add_action('wp_ajax_nopriv_howewo_ajax', 'howewo_ajax_enqueue');
//add_action( 'wp_ajax_nopriv_my_action', 'howewo_ajax_enqueue' );

function inf_scroll_callback() {
	global $post;
	$postArr = array();
	$offset = intval( $_POST['offset']);
	$numberposts = intval( $_POST['numberposts']);
	$args = array('numberposts' => $numberposts, 'offset' => $offset, 'category' => 'HOWEWO');
	$latestPosts = get_posts( $args );
	
	foreach( $latestPosts as $post ) :	setup_postdata($post); 
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID, 'full' ), 'full');
		$postArr[] = $image_url[0];
	endforeach; //wp_reset_postdata();
	echo json_encode($postArr);
	
	die();

}
add_action('wp_ajax_infinite_scroll', 'inf_scroll_callback');
add_action('wp_ajax_nopriv_infinite_scroll', 'inf_scroll_callback');

