<?php
/*  Copyright 2008  Mitchell Bundy  (email : mitch@bundy.ca)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
	
	Links to the author's website should remain where they are and cannot be
	removed without permission from the author.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/* Part of the "Radio Taxonomy" plugin by Mitchell Bundy */

if (!class_exists('Walker_Category_RadioList')):
class Walker_Category_RadioList extends Walker {
	var $tree_type = 'category';
	var $db_fields = array ('parent' => 'parent', 'id' => 'term_id'); //TODO: decouple this

	function start_lvl(&$output, $depth = 0, $args = Array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent<ul class='children'>\n";
	}

	function end_lvl(&$output, $depth = 0, $args = Array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}

	function start_el(&$output, $object, $depth = 0, $args = Array(), $current_object_id = 0) {
		extract($args);
		if ( empty($taxonomy) )
			$taxonomy = 'category';

		if ( $taxonomy == 'category' )
			$name = 'post_category';
		else
			$name = 'tax_input['.$taxonomy.']';

		$class = in_array( $category->term_id, $popular_cats ) ? ' class="popular-category"' : '';
		$output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit"><input value="' . $category->slug . '" type="radio" name="'.$name.'[]" id="in-'.$taxonomy.'-' . $category->term_id . '"' . checked( in_array( $category->term_id, $selected_cats ), true, false ) . disabled( empty( $args['disabled'] ), false, false ) . ' /> ' . esc_html( apply_filters('the_category', $category->name )) . '</label>';
	}

	function end_el(&$output, $object, $depth = 0, $args = Array()) {
		$output .= "</li>\n";
	}
}
endif;
?>