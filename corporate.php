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
    <div class="corpo__view">
        <h2>Virtual visit</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow360.png" alt="">
        <p>Explore the Mirano in our Virtual Visit</p>
        <iframe width="853" height="480" src="https://matterport.com/discover/space/LwF6cE5DYFT" frameborder="0"
            allowfullscreen allow="xr-spatial-tracking"></iframe>

    </div>
</div>

<?php get_footer(); ?>