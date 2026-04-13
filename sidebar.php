<?php
// Register widget areas for the sidebar
function garden_outdoor_sidebar_widgets() {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'garden-outdoor'),
        'id' => 'primary-sidebar',
        'description' => __('Main sidebar that appears on the right side.', 'garden-outdoor'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Sidebar', 'garden-outdoor'),
        'id' => 'footer-sidebar',
        'description' => __('Sidebar that appears in the footer area.', 'garden-outdoor'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'garden_outdoor_sidebar_widgets');
?>