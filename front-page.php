<?php 
/*
Template Name: Front page
*/
get_header(); ?>
<section class="hero">
    <div style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero_bg.jpg' );">
        <span></span>
        <h1>Mirano brussels</h1>
        <button>Upcoming events</button>
    </div>
</section>
<section class="center">
    <h2>Discover the mirano</h2>
    <p>The « Cine Mirano » cinema opened its doors in 1934, Closed down in 1978 to then be transformed into a nightclub
        in 1981.</br> In 2017, it closed its doors for 2 years for a major makeover and re-opened in 2019 under new
        management.</br> Now open with an urban programming from Thursday to Sunday.</br> Available for hire on request
    </p>
</section>
<section class="swipeContainer">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero_bg.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nguyen_rs.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/benoit_rs.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/retable.jpg" alt="">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</section>
<section class="after">
    <p>section</p>
</section>
<div class="container">
    <div class="description panel blue">
        <div>
            <h1>Horizontal snapping sections (VERY simple)</h1>
            <p>Scroll vertically to scrub the horizontal animation. It also dynamically snaps to the sections in an
                organic way based on the velocity. The snapping occurs based on the natural ending position after
                momentum is applied, not a simplistic "wherever it is when the user stops".</p>
            <div class="scroll-down">Scroll down<div class="arrow"></div>
            </div>
        </div>
    </div>


    <section class="panel red">
        ONE
    </section>
    <section class="panel orange">
        TWO
    </section>
    <section class="panel purple">
        THREE
    </section>
    <section class="panel green">
        FOUR
    </section>
    <section class="panel gray">
        FIVE
    </section>
    <section class="panel sky">
        SIX??
    </section>

</div>
<section class="after">
    <p>section</p>
</section>

<?php get_footer(); ?>