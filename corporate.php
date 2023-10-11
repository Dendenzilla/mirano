<?php 
/*
Template Name: Corporate
*/
get_header(); ?>

<div class="corpo">
    <h1><?php the_title(); ?></h1>
    <div class="corpo__container">
        <div class="img__holder"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/corpo.jpg');">
        </div>
        <div class="txt__holder">
            <h4>Art blanc</h4>
            <p>This former cinema offers a breathtaking setting for your corporate events. Its steps, podiums, and its
                famous rotating dance floor promise to bring back the most beautiful evenings to life! The motorized
                dance floor takes a central place and allows you to stage a product launch or a show. The balcony under
                the awning also enables you to showcase your brand and products.</p>
            <p>Mirano provides flexible spaces including a 95m² stage, a 210m² main room, a 59m² meeting room, and the
                64m² Mirano café. Additionally, there are 160m² of extra space with three levels of balconies. The venue
                features five bars and three private dressing rooms.</p>
            <p>Mirano offers the opportunity to collaborate with five exclusive caterers, selected for their quality and
                expertise.</p>
            <p>Mirano has the capability to organize spectacular artistic and musical shows, create breathtaking floral
                decorations, and capture these moments with professional photographers. It's also possible to co-produce
                or script your events. Feel free to share all your wildest desires and specific requests with us.</p>
            <a href="https://www.artblanc.be/content/uploads/2019/07/MIRANO-CORPORATE-PRESENTATION-2022.pdf"
                target="_blank">For more information, please refer to the brochure</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ab_logo-full.png" alt="art blanc logo">
        </div>
    </div>
</div>

<?php get_footer(); ?>