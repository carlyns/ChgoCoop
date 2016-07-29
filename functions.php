<?php

/* add post formats
add_theme_support( 'post-formats', array( 'aside', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', 'gallery' ) );
*/

// This theme uses wp_nav_menu() in one location.
function register_theme_menu() {
  register_nav_menus( 'primary', 'Coop Navigation' );
}

add_action( 'init', 'register_theme_menu' );


// Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
// Use [year] in your posts.
// from https://css-tricks.com/snippets/wordpress/year-shortcode

?>
