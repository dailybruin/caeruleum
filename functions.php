<?php
/**
 * Roots functions
 */

if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

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
    'about_footer' => __('About','db')
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150, false);
	add_image_size( 'db-category-thumb', 300, 300 ); // 300px wide (and unlimited height)
	add_image_size( 'db-front', 90, 90, 1 );
	add_image_size( 'db-rotator', 470, 360, 1 );
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
