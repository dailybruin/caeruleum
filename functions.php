<?php
/**
 * Roots functions
 */

// DEPRECATED:
// if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/util.php');            // Utility functions
require_once locate_template('/inc/config.php');          // Configuration and constants
require_once locate_template('/inc/activation.php');      // Theme activation
require_once locate_template('/inc/template-tags.php');   // Template tags
require_once locate_template('/inc/cleanup.php');         // Cleanup
require_once locate_template('/inc/scripts.php');         // Scripts and stylesheets
require_once locate_template('/inc/htaccess.php');        // Rewrites for assets, H5BP .htaccess
require_once locate_template('/inc/hooks.php');           // Hooks
require_once locate_template('/inc/actions.php');         // Actions
require_once locate_template('/inc/widgets.php');         // Sidebars and widgets
require_once locate_template('/inc/radiowalker.php');     // Walker used for radio buttons
require_once locate_template('/inc/custom.php');          // Custom functions

function roots_setup() {

  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'top_navigation' => __('Top Links', 'db'),
    'primary_navigation' => __('Primary Navigation', 'db'),
    'mobile_navigation' => __('Mobile Navigation', 'db'),
    'share_footer' => __('Share Links', 'db'),
    'in_the_news' => __('In the News', 'db'),
    'about_footer' => __('About','db'),
    'photoblog_sidebar' => __('Photoblog Sidebar', 'db'),
    'top_bar' => __('Top Bar', 'db'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150, false);
	add_image_size( 'db-category-thumb', 300, 300 ); // 300px wide (and unlimited height)
	add_image_size( 'db-front', 90, 90, 1 );
	add_image_size( 'db-rotator', 470, 360, 1 );
  add_image_size( 'db-mult-full', 732, 732);
  add_image_size( 'db-mult-thumb', 90, 10, true);
	add_image_size( 'db-category-full', 640, 640);
	add_image_size( 'db-multimedia', 225, 142, 1 ); // normal size: 180x113
	add_image_size( 'db-section-cover', 220, 220, 1 ); // normal size: 200x200
	add_image_size( 'db-section-cover-small', 370, 270, 1 ); // normal size: 300x219
	add_image_size( 'db-section-cover-opinion', 207, 307, 1 ); // normal size: 300x219



  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));


  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('css/editor-style.css');

}

add_action('after_setup_theme', 'roots_setup');

// Re-adds Shortlinks
add_filter( 'get_shortlink', function( $shortlink ) {return $shortlink;} );

// !!! Rest API Routes !!!

register_sidebar( array(
        'name'          => __( 'REST API', 'caeruleum' ),
        'id'            => 'rest-api',
) );

// Add Media Email to View
register_rest_field( 'user', 'media_email',
    array(
        'get_callback'    => function ( $user ) {
            return $user['email'];
        },
        'update_callback' => null,
        'schema'          => null,
    )
);

// removes restriction of having one post when listing user
add_filter('rest_user_query', 'remove_has_published_posts_from_api_user_query', 10, 2);
function remove_has_published_posts_from_api_user_query($prepared_args, $request)
{
    unset($prepared_args['has_published_posts']);
    return $prepared_args;
}

// Add Coauthors
if ( function_exists('get_coauthors') ) {
    add_action( 'rest_api_init', 'custom_register_coauthors' );
    function custom_register_coauthors() {
        register_rest_field( 'post',
            'coauthors',
            array(
                'get_callback'    => 'custom_get_coauthors',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
    function custom_get_coauthors( $object, $field_name, $request ) {
        $coauthors = get_coauthors($object['id']);
 
        $authors = array();
        foreach ($coauthors as $author) {
            $authors[] = array(
                'display_name' => $author->display_name,
                'user_nicename' => $author->user_nicename,
                'id' => $author->ID,
            );
        };
        return $authors;
    }
}

// Add Related Posts
add_action( 'rest_api_init', 'custom_register_related' );
    function custom_register_related() {
        register_rest_field( 'post',
            'related_posts',
            array(
                'get_callback'    => 'custom_get_related',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
function custom_get_related( $object, $field_name, $request ) {
  global $yarpp;
  $related = $yarpp->get_related($object['id']);
  $relatedposts = array();
  foreach ($related as $relatedpost) {
    $relatedposts[] = array(
      'id' => $relatedpost->ID,
    );
  };
  return $relatedposts;
}

// Fetch NexGenGallery
function fetch_gallery( $request ) {
  //get parameters from request
  $params = $request->get_params();
  $gallery = $params['id'];
  if ($gallery != '-1') //THIS PART DONE BY NEIL 2012
		// 	// echo do_shortcode('[nggallery id='.$gallery.' template="galleryview" images=0]');
	global $nggdb;
  $galleryt = $nggdb->get_gallery($gallery, 'sortorder', 'ASC', true, 0, 0);
  $images = array();
  foreach($galleryt as $image) {
    array_push($images, array(
      'image' => $image->imageURL,
      'caption' => $image->description,
      'credit' => '('.$image->alttext .'/Daily Bruin)',
    ));
  }
  return $images;
}

function fetch_links() {
  $links = wp_list_bookmarks(array(
                        'title_li'                      =>      __(''),
                        'title_before'          =>      '',
                        'title_after'           =>      '',
                        'category_before'       =>      '',
                        'category_after'        =>      '',
                        'categorize'            =>      0,
                        'before'                        =>      '<li>'));
  return $links;                      
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'db/v1', '/gallery/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'fetch_gallery',
    'args' => array(
      'id' => array(
        'validate_callback' => function($param, $request, $key) {
          return is_numeric( $param );
        }
      ),
    ),
  ) );
  register_rest_route( 'db/v1', '/links', array(
    'methods' => 'GET',
    'callback' => 'fetch_links',
  ) );
});

// make preview links work on the test site
function set_headless_preview_link( $link ) {
	return 'https://dailybruin.com/'
		. '_preview/'
		. get_the_ID() . '/'
		. wp_create_nonce( 'wp_rest' );
}

add_filter( 'preview_post_link', 'set_headless_preview_link' );