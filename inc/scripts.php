<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/css/bootstrap.css
 * 2. /theme/css/bootstrap-responsive.css      (if enabled in config.php)
 * 3. /theme/css/app.css
 * 4. /child-theme/style.css                   (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. /theme/js/vendor/modernizr-2.5.3.min.js  (in header.php)
 * 2. jquery-1.7.2.min.js via Google CDN       (in header.php)
 * 3. /theme/js/plugins.js
 * 4. /theme/js/main.js
 */

function roots_scripts() {
  wp_enqueue_style('galleryview_css', get_template_directory_uri() . '/css/jquery.galleryview-3.0-dev.css', false, null );
  wp_enqueue_style('lightSlider_css', get_template_directory_uri() . '/css/vendor/lightSlider.css', false, null );
  // If you're not using Bootstrap, include HTML5 Boilerplate's main.css:
  // wp_enqueue_style('roots_h5bp', get_template_directory_uri() . '/css/main.css', false, null);

  // wp_enqueue_style('roots_app', get_template_directory_uri() . '/css/app.css', false, "1425333448");
  wp_enqueue_style('roots_app', get_template_directory_uri() . '/css/app.css', false, time(), false);


  // Load style.css from child theme
  if (is_child_theme()) {
    wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/js/plugins.js', false, null, false);
  wp_register_script('roots_main', get_template_directory_uri() . '/js/main.js', false, time(), false);

  wp_register_script('galleryview_main', get_template_directory_uri() . '/js/vendor/jquery.galleryview-3.0-dev.js', false, null, false);
  wp_register_script('galleryview_easing', get_template_directory_uri() . '/js/vendor/jquery.easing.1.3.js', false, null, false);
  wp_register_script('galleryview_timers', get_template_directory_uri() . '/js/vendor/jquery.timers-1.2.js', false, null, false);

  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
  wp_enqueue_script('galleryview_main');
  wp_enqueue_script('galleryview_easing');
  wp_enqueue_script('galleryview_timers');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);
