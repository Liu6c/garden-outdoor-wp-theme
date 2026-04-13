<?php

// functions.php

// Theme setup for Elementor support
function garden_theme_setup() {
    // Add support for Elementor
    add_theme_support('elementor');

    // Register custom post types
    register_post_type('custom_post', array(
        'labels' => array(
            'name' => __('Custom Posts'),
            'singular_name' => __('Custom Post'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    // Register taxonomies
    register_taxonomy('custom_taxonomy', 'custom_post', array(
        'label' => __('Custom Taxonomy'),
        'rewrite' => array('slug' => 'custom_taxonomy'),
        'hierarchical' => true,
    ));

    // Add additional theme features
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'garden_theme_setup');

?>