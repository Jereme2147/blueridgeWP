<?php 
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
function  brp_theme_support() {
// wp_enqueue_style('style.css'); 
wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
// wp_enqueue_script('main', get_theme_file_uri('main.js'), NULL, microtime(), true);
wp_enqueue_script("main", get_theme_file_uri('/js/main.js'));
// wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
/* post formats */
add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

/* post thumbnails */
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

/* HTML5 */
add_theme_support( 'html5' );

/* automatic feed links */
add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'brp_theme_support' );

// wp_nav_menu( array $args = array(
// 	'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
// 	'menu_class'		=> "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
// 	'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
// 	'container'			=> "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
// 	'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
// 	'container_id'		=> "", // (string) The ID that is applied to the container.
// 	'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
// 	'before'			=> "", // (string) Text before the link markup.
// 	'after'				=> "", // (string) Text after the link markup.
// 	'link_before'		=> "", // (string) Text before the link text.
// 	'link_after'		=> "", // (string) Text after the link text.
// 	'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
// 	'depth'				=> "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
// 	'walker'			=> "", // (object) Instance of a custom walker class.
// 	'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
// 	'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
// 	'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
// ) );

?>