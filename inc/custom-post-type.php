<?php

if ( current_user_can( 'edit_dashboard' ) && is_user_logged_in() ) {
    // Register Custom Post Type
    function custom_post_type_for_services()
    {

        $labels = array(
            'name'                  => _x( 'Services', 'Post Type General Name', 'avo' ),
            'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'avo' ),
            'menu_name'             => __( 'Services', 'avo' ),
            'name_admin_bar'        => __( 'Services', 'avo' ),
            'archives'              => __( 'Services', 'avo' ),
            'attributes'            => __( 'Services', 'avo' ),
            'parent_item_colon'     => __( 'Services', 'avo' ),
            'all_items'             => __( 'All Service', 'avo' ),
            'add_new_item'          => __( 'Add New Service', 'avo' ),
            'add_new'               => __( 'Add New', 'avo' ),
            'new_item'              => __( 'New Service', 'avo' ),
            'edit_item'             => __( 'Edit Service', 'avo' ),
            'update_item'           => __( 'Update Service', 'avo' ),
            'view_item'             => __( 'View Service', 'avo' ),
            'view_items'            => __( 'View Services', 'avo' ),
            'search_items'          => __( 'Search Service', 'avo' ),
            'not_found'             => __( 'Not found Services', 'avo' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'avo' ),
            'featured_image'        => __( 'Featured Image', 'avo' ),
            'set_featured_image'    => __( 'Set featured image', 'avo' ),
            'remove_featured_image' => __( 'Remove featured image', 'avo' ),
            'use_featured_image'    => __( 'Use as featured image', 'avo' ),
            'insert_into_item'      => __( 'Insert into Service', 'avo' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Service', 'avo' ),
            'items_list'            => __( 'Services list', 'avo' ),
            'items_list_navigation' => __( 'Services list navigation', 'avo' ),
            'filter_items_list'     => __( 'Filter Services list', 'avo' ),
        );
        $args = array(
            'label'               => __( 'Service', 'avo' ),
            'description'         => __( 'Services', 'avo' ),
            'labels'              => $labels,
            'supports'            => array( 'title' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'menu_icon'           => 'dashicons-hammer',
            'show_in_menu'        => true,
            'menu_position'       => 20,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'services', $args );

        // Register Custom Taxonomy

        $labels = array(
            'name'                       => _x( 'Services', 'Taxonomy General Name', 'avo' ),
            'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'avo' ),
            'menu_name'                  => __( 'Categories', 'avo' ),
            'all_items'                  => __( 'All Services', 'avo' ),
            'parent_item'                => __( 'Service', 'avo' ),
            'parent_item_colon'          => __( 'Service:', 'avo' ),
            'new_item_name'              => __( 'Service', 'avo' ),
            'add_new_item'               => __( 'Add New Service', 'avo' ),
            'edit_item'                  => __( 'Edit Service', 'avo' ),
            'update_item'                => __( 'Update Service', 'avo' ),
            'view_item'                  => __( 'View Service', 'avo' ),
            'separate_items_with_commas' => __( '', 'avo' ),
            'add_or_remove_items'        => __( 'Add or remove Service', 'avo' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'avo' ),
            'popular_items'              => __( 'Popular Service', 'avo' ),
            'search_items'               => __( 'Search Services', 'avo' ),
            'not_found'                  => __( 'Not Found', 'avo' ),
            'no_terms'                   => __( 'No Services', 'avo' ),
            'items_list'                 => __( 'Service list', 'avo' ),
            'items_list_navigation'      => __( 'Service list navigation', 'avo' ),
        );
        $args = array(
            'labels'            => $labels,
            'hierarchical'      => false,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
        );
        register_taxonomy( 'services_texonomy', array( 'services' ), $args );

        // Register Custom Post Type for Testimonial

        $labels_for_testimonial = array(
            'name'                  => _x( 'Testimonials', 'Post Type General Name', 'avo' ),
            'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'avo' ),
            'menu_name'             => __( 'Testimonial', 'avo' ),
            'name_admin_bar'        => __( 'Testimonials', 'avo' ),
            'archives'              => __( 'Testimonial Archives', 'avo' ),
            'attributes'            => __( 'Testimonial Attributes', 'avo' ),
            'parent_item_colon'     => __( 'Parent Testimonial', 'avo' ),
            'all_items'             => __( 'All Testimonials', 'avo' ),
            'add_new_item'          => __( 'Add New Testimonial', 'avo' ),
            'add_new'               => __( 'Add New', 'avo' ),
            'new_item'              => __( 'New Testimonial', 'avo' ),
            'edit_item'             => __( 'Edit Testimonial', 'avo' ),
            'update_item'           => __( 'Update Testimonial', 'avo' ),
            'view_item'             => __( 'View Testimonial', 'avo' ),
            'view_items'            => __( 'View Testimonials', 'avo' ),
            'search_items'          => __( 'Search Testimonial', 'avo' ),
            'not_found'             => __( 'Not found', 'avo' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'avo' ),
            'featured_image'        => __( 'Featured Image', 'avo' ),
            'set_featured_image'    => __( 'Set featured image', 'avo' ),
            'remove_featured_image' => __( 'Remove featured image', 'avo' ),
            'use_featured_image'    => __( 'Use as featured image', 'avo' ),
            'insert_into_item'      => __( 'Insert into Testimonial', 'avo' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'avo' ),
            'items_list'            => __( 'Testimonials list', 'avo' ),
            'items_list_navigation' => __( 'Testimonials list navigation', 'avo' ),
            'filter_items_list'     => __( 'Filter Testimonials list', 'avo' ),
        );
        $args = array(
            'label'               => __( 'Testimonial', 'avo' ),
            'description'         => __( 'Testimonial Post type', 'avo' ),
            'labels'              => $labels_for_testimonial,
            'supports'            => array( 'title' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 21,
            'menu_icon'           => 'dashicons-testimonial',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'testimonial', $args );

    }

    add_action( 'init', 'custom_post_type_for_services' );

}
