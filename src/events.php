<?php 
/*
Template Name: Events
*/
get_header(); ?>

<h1>Events</h1>
<div class="events__container">
    <?php 
    $posts = get_posts( array(
        'post_type' => 'post',
        'meta_key'  => 'date_picker',
        'orderby'   => 'meta_value_num',
        'order'     => 'ASC',
        'posts_per_page'=> '-1',
        'meta_query'=> array(
            array(
                'key' => 'date_picker',
                'compare' => '>',
                'value' => date("Y-m-d"),
                'type' => 'DATE'
            )
        ),
    ));

    $group_posts = array();
    
    if( $posts ) {
        foreach( $posts as $post ) {
            $date = get_field('date_picker', $post->ID, false);
            $date = new DateTime($date);
            $year = $date->format('Y');
            $month = $date->format('F');
            $group_posts[$year][$month][] = array($post, $date);
        }
        foreach ($group_posts as $yearKey => $years) {
            foreach ($years as $monthKey => $months) {
                ?> <h2> <?php echo $monthKey; ?> </h2><?php
                
                foreach ($months as $postKey => $posts) {
                    while ( have_posts() ) : the_post(); ?>
    <div class="event">

        <div class="event__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
        <div class="event__holder">
            <div class="event__infos">
                <h3><?php the_title();?> – <?php echo $posts[1]->format('d/m');?></h3>

                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png"
                        alt="event time icon"><?php echo esc_html( get_field('time_picker')); ?></p>
                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png"
                        alt="event location icon"><?php echo esc_html( get_field('location')); ?></p>
            </div>
            <div class="event__tickets">
                <?php if( get_field('facebook_url')){ ?>
                <a href="<?php echo esc_html(get_field('facebook_url')); ?>" target="_blank" rel="noreferrer"
                    referrerpolicy="no-referrer">Voir l'event</a>
                <?php } if( get_field('tickets_url')){ ?>
                <button><a href="<?php echo esc_html(get_field('tickets_url')); ?>" target="_blank" rel="noreferrer"
                        referrerpolicy="no-referrer">Acheter des tickets</a></button>
                <?php } elseif( get_field('tickets_tbd')){ ?>
                <p>Tickets en vente bientôt</p>
                <?php } else { ?>
                <p>Tickets en vente à l'entrée</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php endwhile;
        }
    
        }
    
        }
        wp_reset_postdata();
    }

    


    ?>
</div>

<?php get_footer(); ?>