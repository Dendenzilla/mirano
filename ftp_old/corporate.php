<?php 
/*
Template Name: Corporate
*/
get_header(); ?>

<div class="corpo">
    <h1><?php the_title(); ?></h1>
    <div class="corpo__container">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>