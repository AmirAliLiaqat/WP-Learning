<?php
/**
 * Functions file.
 *
 * @package wplearning
*/

/************** Function using for adding theme supports **************/
function wplearning_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 640, 400, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    $args = array (
      'default-image' => get_template_directory_uri() . '\assets\img\header1.jpg',
      'default-text-color'  => '000',
      'width'              =>  1920,
      'height'             => 400,
      'flex-width'       => true,
      'flex-height'      => true,
    );

    add_theme_support('custom-header', $args);
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wplearning' )
    ) );
}
add_action('after_setup_theme', 'wplearning_theme_setup');

/************** Function using for adding styles and scripts links **************/
function wplearning_theme_scripts() {
    wp_register_style('style', get_stylesheet_uri(), [], false, 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', [] , false , 'all');
    wp_register_style('owl-carousel', get_template_directory_uri() . '/owl-carousel/assets/owl.carousel.min.css', [] , false , 'all');

    wp_register_script('script', get_template_directory_uri() . '/assets/js/main.js', []);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery']);
    wp_register_script('owl-carousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js');

    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('owl-carousel');

    wp_enqueue_script('script');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('owl-carousel');
}
add_action('wp_enqueue_scripts', 'wplearning_theme_scripts');

/************** Function using for adding sidebar widgets **************/
function wplearning_widgets_init() {
    register_sidebar( array(
        'name'                 =>  __( 'Primary Sidebar', 'wplearning' ),
        'id'                      =>  'sidebar-1',
        'description'        =>  'Main Sidebar on Right Side',
        'before_widget'  =>  '<aside id="%1$s" class="widget %2$s">',
        'after_widget'    =>  '</aside>',
        'before_title'     =>  '<h3 class="widget-title">',
        'after_title'       =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Secondary Sidebar', 'wplearning' ),
        'id'                     =>  'sidebar-2',
        'before_widget' =>  '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</li></ul>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 1', 'wplearning' ),
        'id'                     =>  'footer-1',
        'before_widget' =>  '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</li></ul>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 2', 'wplearning' ),
        'id'                     =>  'footer-2',
        'before_widget' =>  '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</li></ul>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 3', 'wplearning' ),
        'id'                     =>  'footer-3',
        'before_widget' =>  '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</li></ul>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
}
add_action('widgets_init', 'wplearning_widgets_init');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Inculde Customizer
require get_template_directory() . '/inc/customizer.php';

// Inculde Custom Post Types
require get_template_directory() . '/inc/services.php';
require get_template_directory() . '/inc/projects.php';

?>