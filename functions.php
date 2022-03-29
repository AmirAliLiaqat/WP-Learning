<?php
/**
 * Functions file.
 *
 * @package wplearning
*/

add_theme_support('custom-logo');

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'wplearning' )
) );

function wplearning_theme_scripts() {
    wp_register_style('style', get_stylesheet_uri(), [], false, 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', [] , false , 'all');

    wp_register_script('script', get_template_directory_uri() . '/assets/js/main.js', []);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery']);

    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');

    wp_enqueue_script('script');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'wplearning_theme_scripts');

?>