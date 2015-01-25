<?php

// Custom functions

	function the_post_thumbnail_caption() {
	  global $post;

	  $thumbnail_id    = get_post_thumbnail_id($post->ID);
	  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

	  if ($thumbnail_image && isset($thumbnail_image[0])) {
	    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
	  }
	}
	
// Adds a link to the WordPress web production doc from the admin bar
function uploading_doc_link()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_node('ngg-menu');
    $wp_admin_bar->add_node( array(
        'id' => 'dailybruin',
        'title' => __('Uploading links'),
    ) );
    $wp_admin_bar->add_node( array(
        'id' => 'dailybruin_camayak',
        'parent' => 'dailybruin',
        'title' => __('Camayak production'),
        'href' => 'https://docs.google.com/document/d/10t6Fc2aMY5oRehM9Grx4sQI0w5_It-hB6LzQM6RpF3E/pub',
        'meta' => array(
            'target' => '_blank',
        ),
    ) );
    $wp_admin_bar->add_node( array(
        'id' => 'dailybruin_uploading',
        'parent' => 'dailybruin',
        'title' => __('Web production doc'),
        'href' => 'http://bit.ly/dailybruinuploading',
        'meta' => array(
            'target' => '_blank',
        ),
    ) );
    $wp_admin_bar->add_node( array(
        'id' => 'dailybruin_tweetsposts',
        'parent' => 'dailybruin',
        'title' => __('Meow'),
        'href' => 'http://meow.dailybruin.com/',
        'meta' => array(
            'target' => '_blank',
        ),
    ) );
    $wp_admin_bar->add_node( array(
        'id' => 'dailybruin_audits',
        'parent' => 'dailybruin',
        'title' => __('Audits'),
        'href' => 'https://docs.google.com/a/media.ucla.edu/spreadsheet/ccc?key=0AiQduRDt-18xdFM2LXY1SWRLRjB2aWtzLUdyN1k5TlE&usp=sharing#gid=49',
        'meta' => array(
            'target' => '_blank',
        ),
    ) );    
}
add_action( 'wp_before_admin_bar_render', 'uploading_doc_link' );


// Add the ability to link to external sites by creating a post
// in WordPress. It's not a symantically correct solution but it
// works just fine for what we need, especially in 9 lines of code.
function db_link_stories($permalink, $post, $leavename)
{
    if(!$post)
        global $post;
    $dblink = get_post_meta($post->ID,'db_link',true);    
    if($dblink)
        return $dblink;
    else
        return $permalink;
}
add_filter( 'post_link' , 'db_link_stories');


function the_blog_banner($blog_name)
{
	echo "<img src='/img/".$blog_name.".jpeg' alt='".single_cat_title('',false)."' />";
}


// Customize headline. Use this instead of the_title()
// This can only be used from within the loop
function the_headline()
{
	global $post;
	$articleFormats = wp_get_post_terms($post->ID,'article-format');
	if(isset($articleFormats[0]))
		$articleFormat = $articleFormats[0]->slug;
	if(empty($articleFormat) || $articleFormat === 'normal')
		$articleFormat = get_field('db_article_format');

	$headline = apply_filters('the_title',$post->post_title);

	if($articleFormat === "column" || 
		($articleFormat === 'default' && in_array('italic_headline', get_field('db_display_options'))))
	{
		echo '<em>'.$headline.'</em>';
	}
	else
	{
		echo $headline;
	}
}


// Add post formats (because WordPress won't let us do it ourselves)
function add_article_formats()
{
	register_taxonomy('article-format', 'post', array(
		'label' => 'Article format',
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_ui' => false,
		'show_admin_column' => false,
	));
	wp_insert_term('Normal','article-format', array('slug' => 'normal'));
	wp_insert_term('Column','article-format', array('slug' => 'column'));
	wp_insert_term('Brief', 'article-format', array('slug' => 'brief'));
}
add_action('init','add_article_formats', 0);



// Change column titles to italic
add_filter('the_title', 'title_italic');
function title_italic($title)
{
	if(substr($title, 0, 1) == '_' && substr($title, -1) == '_')
	{
		return '<em>'.substr($title, 1, strlen($title)-2).'</em>';
	}
	return $title;
}
// And make a minor fix to the page's title so underscores don't show
add_filter('wp_title', 'title_italic_head');
function title_italic_head($title)
{
	if(substr($title, 0, 1) == '_' && substr($title, -4, 1) == '_')
	{
		return substr($title, 1, strlen($title)-5)." | ";
	}
	return $title;
}

// Define a function to output bylines properly (and show/not show them)
function the_byline($displayBy=true) {
	global $post, $authordata, $wpdb;
	$authorid = $post->post_author;
		
	$articleFormats = wp_get_post_terms($post->ID,'article-format');
	if(isset($articleFormats[0]))
		$articleFormat = $articleFormats[0]->slug;
	
	if(empty($articleFormat) || $articleFormat === 'normal')
		$articleFormat = get_field('db_article_format');
		
    if ( $authorid == 0 || !isset($authorid) || $articleFormat == "brief"
    	|| (get_field('db_article_format') == 'default' && in_array('hide_byline', get_field('db_display_options'))))
            return false;

	// Get coauthors
	ob_start();
	coauthors_posts_links();
	$coauthors = ob_get_contents();
	ob_end_clean();
	

	// Code modified from WordPress core, wp-includes/author-template.php
    $by = "By ";
    if(!$displayBy)
    	$by = "";
    $link = '<h4>'.$by.$coauthors.'</h4>';
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
	if(strpos($output,'rel')===FALSE)
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
	if(isset($wp_widget_factory->widgets['WordPressPopularPosts']))
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WordPressPopularPosts'], 'wpp_print_stylesheet') ); 
}



// Remove the 'Continued' link at the end of excerpts
function new_excerpt_more($more) {
       global $post;
	return '&hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add an RSS button to the end of the top menu
function db_nav_menu_filter($items, $args) {
	$feed_url = get_bloginfo('rss2_url');
	return $items;
}
add_filter('wp_nav_menu_items', 'db_nav_menu_filter', 10, 2);

// Filter Template Hierarchy
function ww_new_subcat_hierarchy() {   
	// TODO: This needs a citation
    $category = get_queried_object();

    $parent_id = $category->category_parent;

    $templates = array();
    
    if ( $parent_id == 0 ) {
            // Use default values from get_category_template()
            $templates[] = "category-{$category->slug}.php";
            $templates[] = "category-{$category->term_id}.php";
            $templates[] = 'category.php';          
    } else {
            // Create replacement $templates array
            $parent = get_category( $parent_id );

            // Current first
            $templates[] = "category-{$category->slug}.php";
            $templates[] = "category-{$category->term_id}.php";

            // Parent second
            $templates[] = "category-{$parent->slug}.php";
            $templates[] = "category-{$parent->term_id}.php";
            $templates[] = 'category.php';  
    }
    return locate_template( $templates );
}

add_filter( 'category_template', 'ww_new_subcat_hierarchy' );
