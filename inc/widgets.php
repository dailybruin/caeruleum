<?php

function roots_widgets_init() {
  // Register widgetized areas
  register_sidebar(array(
    'name' => __('Primary Sidebar', 'db'),
    'id' => 'sidebar-primary',
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  

  // Register widgets
  register_widget('DB_Text_More_Link');
  register_widget('Facebook_Recommends');
}
add_action('widgets_init', 'roots_widgets_init');


class DB_Text_More_Link extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_text_morelink', 'description' => __('Arbitrary text or HTML with a link to more'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('text_link', __('Text with link'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$text = apply_filters( 'widget_text_morelink', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
			<div class="textwidget"><?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?></div>
			<?php if(!empty($instance['more_link']) && !empty($instance['more_link_text'])): ?>
				<span class="sidebar-more"><a href="<?php echo $instance['more_link'] ?>"><?php echo $instance['more_link_text']; ?></a></span>
			<?php endif; ?>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['more_link'] = strip_tags($new_instance['more_link']);
		if ( current_user_can('unfiltered_html') )
		{
			$instance['text'] =  $new_instance['text'];
			$instance['more_link_text'] = $new_instance['more_link_text'];
		}
		else
		{
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
			$instance['more_link_text'] = strip_tags($new_instance['more_link_text']);
		}
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '', 'more_link' => '', 'more_link_text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = esc_textarea($instance['text']);
		$more_link = $instance['more_link'];
		$more_link_text = $instance['more_link_text'];
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
		
		
		<p><label for="<?php echo $this->get_field_id('more_link_text'); ?>"><?php _e('Link text:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('more_link_text'); ?>" name="<?php echo $this->get_field_name('more_link_text'); ?>" type="text" value="<?php echo esc_attr($more_link_text); ?>" /></p>

		
		<p><label for="<?php echo $this->get_field_id('more_link'); ?>"><?php _e('Link:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('more_link'); ?>" name="<?php echo $this->get_field_name('more_link'); ?>" type="text" value="<?php echo esc_attr($more_link); ?>" /></p>

<?php
	}
}


class Facebook_Recommends extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_fb_recommend', 'description' => __('Facebook recommend box'));
		$control_ops = array();
		parent::__construct('fb_recommend', __('Facebook recommend box'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
	?>
		<li class="sidebar-clean">
			<div class="fb-recommendations" data-site="dailybruin.com"  data-height="300" data-header="true"></div>
		</li><!-- end li.sidebar-clean -->
	<?php
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
	}
}

