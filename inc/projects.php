<?php
    // Register Custom Post Type Project
    function create_project_cpt() {

        $labels = array(
            'name' => _x( 'Projects', 'Post Type General Name', 'wplearning' ),
            'singular_name' => _x( 'Project', 'Post Type Singular Name', 'wplearning' ),
            'menu_name' => _x( 'Projects', 'Admin Menu text', 'wplearning' ),
            'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'wplearning' ),
            'archives' => __( 'Project Archives', 'wplearning' ),
            'attributes' => __( 'Project Attributes', 'wplearning' ),
            'parent_item_colon' => __( 'Parent Project:', 'wplearning' ),
            'all_items' => __( 'All Projects', 'wplearning' ),
            'add_new_item' => __( 'Add New Project', 'wplearning' ),
            'add_new' => __( 'Add New', 'wplearning' ),
            'new_item' => __( 'New Project', 'wplearning' ),
            'edit_item' => __( 'Edit Project', 'wplearning' ),
            'update_item' => __( 'Update Project', 'wplearning' ),
            'view_item' => __( 'View Project', 'wplearning' ),
            'view_items' => __( 'View Projects', 'wplearning' ),
            'search_items' => __( 'Search Project', 'wplearning' ),
            'not_found' => __( 'Not found', 'wplearning' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'wplearning' ),
            'featured_image' => __( 'Featured Image', 'wplearning' ),
            'set_featured_image' => __( 'Set featured image', 'wplearning' ),
            'remove_featured_image' => __( 'Remove featured image', 'wplearning' ),
            'use_featured_image' => __( 'Use as featured image', 'wplearning' ),
            'insert_into_item' => __( 'Insert into Project', 'wplearning' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Project', 'wplearning' ),
            'items_list' => __( 'Projects list', 'wplearning' ),
            'items_list_navigation' => __( 'Projects list navigation', 'wplearning' ),
            'filter_items_list' => __( 'Filter Projects list', 'wplearning' ),
        );
        $args = array(
            'label' => __( 'Project', 'wplearning' ),
            'description' => __( 'This is custom carousel', 'wplearning' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-admin-post',
            'supports' => array('title', 'excerpt', 'thumbnail'),
            'taxonomies' => array(),
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
        register_post_type( 'project', $args );

    }
    add_action( 'init', 'create_project_cpt', 0 );
?>