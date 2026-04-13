<?php
// Template Name: Front Page

get_header(); ?>

<div class="hero-section">
    <h1>Welcome to Garden Outdoor</h1>
    <p>Your guide to outdoor living.</p>
    <a href="#" class="hero-button">Learn More</a>
</div>

<div class="editor-picks">
    <h2>Editor's Picks</h2>
    <div class="posts">
        <?php // Loop for editor's picks ?>
    </div>
</div>

<div class="trending-posts">
    <h2>Trending Posts</h2>
    <div class="posts">
        <?php // Loop for trending posts ?>
    </div>
</div>

<div class="category-sections">
    <h2>Explore by Category</h2>
    <?php
    $categories = [
        'Hardscape Structures',
        'Maintenance',
        'Protection',
        'Outdoor Living Design',
        'Sustainable Landscaping'
    ];
    foreach ($categories as $category): ?>
        <div class="category-section">
            <h3><?php echo $category; ?></h3>
            <div class="posts">
                <?php // Loop posts for each category ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>