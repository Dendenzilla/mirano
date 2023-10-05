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
        management.</br> Now open with an urban programming from Thursday to Sunday.</br>Available for
        hire on request</br></br><span class="section__end__cta">Find out more here</span>
    </p>
</section>
<section class="swipeContainer">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-slider-4.jpg" alt="">
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
<section class="timeline">
    <div class="panel-container">
        <div class="static-date">
            <div class="first-date">
                <span>1</span><span>9</span><span>1</span><span>2</span>
            </div>
            <div class="date-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.png" alt="">
            </div>
            <div class="second-date">
                <span>2</span><span>0</span><span>2</span><span>3</span>
            </div>
        </div>
        <div class="description panel blue" style="height:65%">
            <div>
                <p>The “Ciné Mirano” cinema opened its doors in 1934, closed down in 1978 to then be transformed into a
                    nightclub in 1981.</p>
                <p>In 2017, it closed its doors again for 2 years for a major makeover and re-opened
                    in 2019 under new management.</p>
                <p>Now open for business every Friday & Saturday.</p></br>
                <p>Available for hire on request.</p>
                <p>Scroll down to learn more</p>
            </div>
        </div>


        <section class="panel">
            <div class="panel__container">
                <div class="panel__container__text --large">
                    <h3>1912</h3>
                    <p>From 1912, brasserie-cinema-event space 'A la Girafe' at no 38. In 1931 transformed into a
                        cinema, first under the name of Casino de Saint-Josse, then in 1942, under the current name of
                        Mirano. It was at this time that the entrance was adapted to the style of the time by the
                        architect R. AJOUX, who also drew the plans for the Century cinema in 1938 and a 1st project,
                        not finished, for the Marignan.</p>
                    <p>After the demolition of buildings 5, 38 and 40, it was reconstructed in 1951. Until 1976, managed
                        by the company Les Cinés de Saint-Josse, which also operates the Marignan. In 1977, taken over
                        by the S.P.R.L. Les Cinés Madou. Originally, a capacity of 600 over the parterre and the
                        balcony. The last showing took place in 1978.</p>
                </div>
                <div class="panel__container__img"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/1912.png');">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1912.png" alt=""> -->
                </div>
            </div>
        </section>
        <section class="panel">
            <div class="panel__container">
                <div class="panel__container__text">
                    <h3>1981</h3>
                    <p>Renovated again in 1981, the Mirano Continental opened as a nightclub.</p>
                </div>
                <div class="panel__container__img"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/1989.jpeg');">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1912.png" alt=""> -->
                </div>
            </div>
        </section>
        <section class="panel">
            <div class="panel__container">
                <div class="panel__container__text">
                    <h3>2019</h3>
                    <p>In 2017, it closed its doors again for 2 years for a major makeover and re-opened in 2019 under
                        new management. From the gold/black colour codes to the choice of materials such as limestone or
                        wooden panelling and the (re)introduction of neon lights, everything possible has been done to
                        return the place to its former glory. Now open every weekend.</p>
                </div>
                <div class="panel__container__img"
                    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/2019.jpg');">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1912.png" alt=""> -->
                </div>
            </div>
        </section>

    </div>
</section>
<section class="after">
    <p>section</p>
</section>

<?php get_footer(); ?>