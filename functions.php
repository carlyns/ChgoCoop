<?php
/* should enqueue CSS AND JS FILES */


function coop_theme_setup() {
  add_theme_support('menus');// This is the built in WP hook; but it's put in a function.  Allows Menus to show up in WP dashboard.

  register_nav_menu('primary', 'Main Coop Nav'); // first is made-up name in slug for, second is description

  register_nav_menu('mobile', 'Mobile Coop Nav'); // first is made-up name in slug for, second is description

  register_nav_menu('secondary', 'Footer Coop Nav'); // first is made-up name in slug for, second is description

}
add_action('init', 'coop_theme_setup');


// Adding Post Thumbnails, so attached media can show up in other areas
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500,500);
add_image_size( 'tool-icon', 75, 75 ); // prob dont need this


// Trying to show ALL posts (both regular and CPT) on a query either on the banded sections or on an archive page.
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','tool');
    $query->set('post_type',$post_type);
	return $query;
    }
}

// Year Shortcode from https://css-tricks.com/snippets/wordpress/year-shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

?>
