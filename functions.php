<?php 
function theme_styles()  
{ 

	// Load all of the styles that need to appear on all pages
	// wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
	wp_enqueue_script("main", get_theme_file_uri('/js/main.js'));

}
add_action('wp_enqueue_scripts', 'theme_styles');

// 
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'main' ),
	    	'footer_menu'  => __( 'Footer Menu', 'main' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
	
function newland_init() {
    add_theme_support('post-thumbnails', array(
        'post',
        'page',
    ));
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'newland_init');


// drop down menus for desktop header
class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n<div class='desktop-sub-menu-holder'>$indent<ul class=\"drop-down deskChangeMe\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}


?>