<?php

// Custom functions

// Set image sizes
add_image_size( 'db-front', 100, 100, 1 );
add_image_size( 'db-rotator', 670, 480, 1 );




// Remove the 'Continued' link at the end of excerpts
function new_excerpt_more($more) {
       global $post;
	return '&hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Use full names (substituted on login)
	/*
	Plugin Name: Substitute Displayname
	Version: 0.1
	Description: Substitutes a default Display name for new registrants.
	Author: Mac McDonald
	*/
/* Version check */
global $wp_version;
$exit_msg='Substitute Author requires WordPress 2.5 or newer.  <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';
if (version_compare($wp_version,"2.5","<")) {
   exit ($exit_msg);
}
function sd_new_login_filter ($login) {
/* Don't do anything to login, just see if already in database.*/
   global $wpdb, $sd_is_new_login;

   $id = $wpdb->get_var("SELECT ID FROM $wpdb->users WHERE user_login = '$login'");
   $sd_is_new_login = (isset($id)) ? false : true;
   return $login;
}

function sd_substitute_displayname_filter ($display_name) {
   global $sd_is_new_login;

   if ($sd_is_new_login) $display_name = $_POST['first_name']." ".$_POST['last_name'];
   return $display_name;
}
add_filter('pre_user_login', 'sd_new_login_filter');
add_filter('pre_user_display_name', 'sd_substitute_displayname_filter');



// Add an RSS button to the end of the top menu
function db_nav_menu_filter($items, $args) {
	$feed_url = get_bloginfo('rss2_url');
	if($args->theme_location == 'top_navigation')
		$items .="<li><a href='".$feed_url."'><i class='smicon-rss'></i></a></li>";
	return $items;
}
add_filter('wp_nav_menu_items', 'db_nav_menu_filter', 10, 2);