<?php
/*
Template Name: Page Template
*/

get_header(); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <div class="page-body">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>