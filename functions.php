<?php 
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
?>