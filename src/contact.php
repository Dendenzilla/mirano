<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<div class="contact">
    <h1><?php the_title(); ?></h1>
    <div class="contact__container">
        <div class="img__holder"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-2.jpg');">
        </div>
        <aside>
            <div class="contact__form">
                <?php echo do_shortcode('[contact-form-7 id="9c38ded" title="Contact form 1"]'); ?>
            </div>
            <div class="contact__practical">
                <h4>Practical informations</h4>
                <p><a target="_blank" rel="noreferrer" referrerpolicy="no-referrer"
                        href="https://www.google.com/maps/place/Mirano+Brussels/@50.8494374,4.3692866,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3c362d32f0aa7:0x37ee1bb65160d203!8m2!3d50.8494374!4d4.3714753">
                        Chaussée de Louvain 38, 1210 Saint Josse</a></p>
                <ul>
                    <li>Easilly accessible by foot/metro</li>
                    <li>Close to various major road networks</li>
                    <li>Security assured by SAFE-T FIRST - insured against damages by Generali Belgium. Policy number
                        GC046746.</li>
                </ul>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>