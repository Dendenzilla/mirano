<?php 
/*
Template Name: Front page
*/
get_header(); ?>
<section class="after">
    <p>section</p>
</section>
<div class="container">
    <div class="description panel blue">
        <div>
            <h1>Horizontal snapping sections (VERY very simple)</h1>
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