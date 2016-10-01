<?php
/* ENQUEING CSS AND JS FILES.
It helps load faster.  Better practice.  See Alessandro's videos.
This functions.php file triggers the css and js files to load up at the start in the header and in the footer.
For functions that need to be executed before the page loads rest of content.
Should this be done for google fonts with an external url?  */
/* TRY TO KEEP FUNCTION NAMES UNIQUE.  in case other developers happen to use the same names.  */
/* ----------- ALSO NOT WORKING HERE, JUST LIKE GINGARTE
function coop_script_enqueue () {
  // first of five parameters are reqd.  first can be made-up name.  second is location to search which needs to be absolute.  third holds dependencies, which we don't have so there's an empty array.  fourth is version number you can make up.  fifth is for media to specify what kind/all devices&scenarios.  fifth for printing js in the header or footer by default, it's in the header.
  wp_enqueue_style('coopstyle', get_template_directory_uri() . 'css/coop.css', array(), '1.0', 'all');
  wp_enqueue_style('gingjs', get_template_directory_uri() . 'js/coop.js', array(), '1.0', true);
}
add_action(wp_enqueue_scripts, 'coop_script_enqueue'); // hooks tells WP when to trigger the function you just made, i.e. when WP is when all scripts are being loaded, second: which function.  also, remember you need to add a hook to locate the header file.
---------------*/

/* add post formats
add_theme_support( 'post-formats', array( 'aside', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', 'gallery' ) );
*/

/*
// This theme uses wp_nav_menu() in one location.

function register_theme_menu() {
  register_nav_menus( 'primary', 'Coop Navigation' );
}
add_action( 'init', 'register_theme_menu' );
*/

function coop_theme_setup() {
  add_theme_support('menus');// This is the built in WP hook; but it's put in a function

  register_nav_menu('pullout', 'Main Coop Pullout Nav'); // first is made-up name in slug for, second is description
}
add_action('init', 'coop_theme_setup');


// Adding Post Thumbnails, so attached media can show up in other areas
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50);
add_image_size( 'full-size', 500, 500 ); // prob dont need this



// Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
// Use [year] in your posts.
// from https://css-tricks.com/snippets/wordpress/year-shortcode

?>
