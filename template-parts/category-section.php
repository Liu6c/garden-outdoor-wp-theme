<?php
// Template part for displaying category cards

$categories = [
    [
        'name' => 'Hardscape Structures',
        'description' => 'Expert maintenance and installation for hardscape features.',
        'image' => 'path_to_hardscape_image.jpg',
        'link' => '/category/hardscape-structures',
    ],
    [
        'name' => 'Maintenance Protection',
        'description' => 'Comprehensive maintenance services for your outdoor space.',
        'image' => 'path_to_maintenance_image.jpg',
        'link' => '/category/maintenance-protection',
    ],
    [
        'name' => 'Outdoor Living Design',
        'description' => 'Design beautiful outdoor living spaces that inspire.',
        'image' => 'path_to_outdoor_living_image.jpg',
        'link' => '/category/outdoor-living-design',
    ],
    [
        'name' => 'Sustainable Landscaping',
        'description' => 'Landscape designs that are good for the planet.',
        'image' => 'path_to_sustainable_image.jpg',
        'link' => '/category/sustainable-landscaping',
    ],
];

foreach ($categories as $category) {
    echo '<div class="category-card">';
    echo '<h2>' . esc_html($category['name']) . '</h2>';
    echo '<img src="' . esc_url($category['image']) . '" alt="' . esc_attr($category['name']) . '" />';
    echo '<p>' . esc_html($category['description']) . '</p>';
    echo '<a href="' . esc_url($category['link']) . '">Learn More</a>';
    echo '</div>';  
}
?>