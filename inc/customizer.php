<?php
/**
 * WP Learnig Customizer.
 *
 * @package wplearning
*/

function wplearning_customize_register($wp_customize) {

    $wp_customize->add_panel('wplearning_settings', array(
        'title' => _('WPlearning Settings'),
        'description' => '', //Include html tags such as <p>.
        'priority' => 10, // Mixed with top-level-section hierarchy.
    ) );
    $wp_customize->add_section('wplearning_colors', array(
        'title' => 'Colors',
        'panel' => 'wplearning_settings',
    ) );
    $wp_customize->add_section('wplearning_labels', array(
        'title' => 'Labels',
        'panel' => 'wplearning_settings',
    ) );
    $wp_customize->add_section('wplearning_misc', array(
        'title' => 'Misc Setting',
        'panel' => 'wplearning_settings',
    ) );

    /***************** Setting for navbar background color *******************/
    $wp_customize->add_setting('wplearning_nav_bg_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '#2ca358',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control('wplearning_nav_bg_color', array(
        'label' => 'Menu Background',
        'type' => 'color',
        'section' => 'wplearning_colors',
    ) );

    /**************** Setting for body background color *********************/
    $wp_customize->add_setting('wplearning_body_bg_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '#fff',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control('wplearning_body_bg_color', array(
        'label' => 'Body Background',
        'type' => 'color',
        'section' => 'wplearning_colors',
    ) );

    /***************** Setting for feature box 1 title *******************/
    $wp_customize->add_setting('wplearning_featured_block_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => 'Latest From Techonolgy',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
    ) );
    $wp_customize->add_control('wplearning_featured_block_1', array(
        'label' => 'Feature Box 1 Title',
        'type' => 'text',
        'section' => 'wplearning_labels',
    ) );

    /***************** Setting for feature box 2 title *******************/
    $wp_customize->add_setting('wplearning_featured_block_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => 'Latest From Social Media',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
    ) );
    $wp_customize->add_control('wplearning_featured_block_2', array(
        'label' => 'Feature Box 2 Title',
        'type' => 'text',
        'section' => 'wplearning_labels',
    ) );

    /***************** Setting for home page banner *******************/
    $wp_customize->add_setting('wplearning_home_banner', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
    ) );
    $wp_customize->add_control('wplearning_home_banner', array(
        'label' => 'Show/Hide Home Banner',
        'type' => 'radio',
        'section' => 'wplearning_misc',
        'choices' => array (
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ) );
    
}
add_action('customize_register', 'wplearning_customize_register');

?>