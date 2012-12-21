<?php

// Custom functions
add_filter('the_title', 'title_italic');
function title_italic($title)
{
	if(substr($title, 0, 1) == '_' && substr($title, -1) == '_')
	{
		return '<em>'.substr($title, 1, strlen($title)-2).'</em>';
	}
	return $title;
}


// Define a function to output bylines properly (and show/not show them)
function the_byline($displayBy=true) {
	global $post;
	$authorid = $post->post_author;
	$authordata = get_userdata($authorid);

	// Code modified from WordPress core, wp-includes/author-template.php
    if ( $authorid == 0 || !isset($authorid) )
            return false;
    $by = "By ";
    if(!$displayBy)
    	$by = "";
    $link = sprintf(
            '<span class="byline">'.$by.'<a href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
            esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ),
            get_the_author()
    );
    echo apply_filters( 'the_byline', $link );
}

// Theme hook to allow getting a list of categories
function the_category_text($category_array) {
	foreach($category_array as $category) {
		if($category->parent == 0) {
			echo $category->cat_name;
			return;
		}
	}
	echo trim(get_category_parents($category_array[0]->term_id, false, ', '),', ');
}


// Add extra fields to a user profile
function db_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Profile Information'); ?></h3>
	<table class="form-table">
		<tr>
			<th>
				<label for="twitter_handle"><?php _e('Twitter Username'); ?>
			</label></th>
			<td>
				<input type="text" name="twitter_handle" id="twitter_handle" value="<?php echo esc_attr( get_the_author_meta( 'twitter_handle', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your twitter username if you would like it to be displayed on your profile.'); ?></span>
			</td>
		</tr>
		<tr>
			<th>
				<label for="graduated"><?php _e("Graduated"); ?></label>
			</th>
			<td>
				<input type="checkbox" name="graduated" id="graduated" value="1" <?php
					if(esc_attr( get_the_author_meta( 'graduated', $user->ID ) ))
						echo "checked='checked'"; ?>></input><br />
				<span class="description"><?php _e('If the user has graduated, check here and email/twitter links will be disabled'); ?></span>
			</td>
		</tr>
	</table>
<?php }
function db_save_custom_user_profile_fields( $user_id ) {
	error_log(print_r($_POST, true));
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	$twitter = $_POST['twitter_handle'];
	$graduated = $_POST['graduated'];
	if($twitter[0] != '@' && $twitter != '')
		$twitter = '@'.$twitter;
	if(!isset($graduated))
		$graduated = 0;
	update_usermeta( $user_id, 'graduated', $graduated );
	update_usermeta( $user_id, 'twitter_handle', $twitter );
}
add_action( 'show_user_profile', 'db_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'db_add_custom_user_profile_fields' );
add_action( 'personal_options_update', 'db_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'db_save_custom_user_profile_fields' );


// Removes all tags that start with db- from displaying on the front end
function remove_db_tags($input) {
	$output = preg_replace('/<a href="\/tag\/db-[^\/]*\/" rel="tag">db-[^<]*<\/a>,*\s*/','',$input);
	if(strpos("<a",$output)===FALSE)
		$output = "";
	return $output;
}
add_filter('the_tags','remove_db_tags');

// Template tag to output multimedia post icons 
function multimedia_post_flag( $multimedia_type ) {
	$icon = "etc";
	$type = $multimedia_type;
	
	if($multimedia_type == "photo_gallery") {
		$icon = "photo";
		$type = "Photo Gallery";
	}
	else if($multimedia_type == "photo") {
		$icon = "photo";
		$type = "Photo";
	}
	else if ($multimedia_type == "audio") {
		$icon = "audio";
		$type = "Audio";
	}
	else if ($multimedia_type == "radio") {
		$icon = "audio";
		$type = "Radio";
	}
	else if ($multimedia_type == "graphic") {
		$icon = "etc";
		$type = "Graphic";
	}
	else if ($multimedia_type == "video") {
		$icon = "video";
		$type = "Video";
	}
	else if ($multimedia_type == "interactive") {
		$icon = "etc";
		$type = "Interactive Graphic";
	}
	
	$output = "<i class='micon-$icon'></i>";
	$output .= "<span class='multimedia-title'>$type</span>";

	echo $output;
}

// Fix issue with poll loading styles improperly
add_action('wp_enqueue_scripts','dequeue_polls_style',11);
function dequeue_polls_style() {
	wp_dequeue_style('wp-polls');
}


// Remove default WordPress Popular Posts stylesheet
add_action('wp_head', 'remove_wpp_stylesheet', 1); 
function remove_wpp_stylesheet() { 
	global $wp_widget_factory; 
	remove_action( 'wp_head', array($wp_widget_factory->widgets['WordPressPopularPosts'], 'wpp_print_stylesheet') ); 
}



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
		$items .="<li><a href='".$feed_url."'><i class='smicon-rss'></i></a> <a href=\"http://www.youtube.com/ucladailybruin\"><i class=\"smicon-youtube\"></i></a> <a href=\"http://www.twitter.com/dailybruin\"><i class=\"smicon-twitter\"></i></a> <a href=\"http://www.facebook.com/dailybruin\"><i class=\"smicon-fb\"></i></a></li>";
	return $items;
}
add_filter('wp_nav_menu_items', 'db_nav_menu_filter', 10, 2);