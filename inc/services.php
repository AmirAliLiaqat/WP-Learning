<?php
    // Register Custom Post Type Service
    function create_service_cpt() {

        $labels = array(
            'name' => _x( 'Services', 'Post Type General Name', 'wplearning' ),
            'singular_name' => _x( 'Service', 'Post Type Singular Name', 'wplearning' ),
            'menu_name' => _x( 'Services', 'Admin Menu text', 'wplearning' ),
            'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'wplearning' ),
            'archives' => __( 'Service Archives', 'wplearning' ),
            'attributes' => __( 'Service Attributes', 'wplearning' ),
            'parent_item_colon' => __( 'Parent Service:', 'wplearning' ),
            'all_items' => __( 'All Services', 'wplearning' ),
            'add_new_item' => __( 'Add New Service', 'wplearning' ),
            'add_new' => __( 'Add New', 'wplearning' ),
            'new_item' => __( 'New Service', 'wplearning' ),
            'edit_item' => __( 'Edit Service', 'wplearning' ),
            'update_item' => __( 'Update Service', 'wplearning' ),
            'view_item' => __( 'View Service', 'wplearning' ),
            'view_items' => __( 'View Services', 'wplearning' ),
            'search_items' => __( 'Search Service', 'wplearning' ),
            'not_found' => __( 'Not found', 'wplearning' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'wplearning' ),
            'featured_image' => __( 'Featured Image', 'wplearning' ),
            'set_featured_image' => __( 'Set featured image', 'wplearning' ),
            'remove_featured_image' => __( 'Remove featured image', 'wplearning' ),
            'use_featured_image' => __( 'Use as featured image', 'wplearning' ),
            'insert_into_item' => __( 'Insert into Service', 'wplearning' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Service', 'wplearning' ),
            'items_list' => __( 'Services list', 'wplearning' ),
            'items_list_navigation' => __( 'Services list navigation', 'wplearning' ),
            'filter_items_list' => __( 'Filter Services list', 'wplearning' ),
        );
        $args = array(
            'label' => __( 'Service', 'wplearning' ),
            'description' => __( 'Custom Post Type for services', 'wplearning' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-awards',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
            'taxonomies' => array('category', 'post_tag'),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type( 'service', $args );

    }
    add_action( 'init', 'create_service_cpt', 0 );
?>