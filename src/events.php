<?php 
/*
Template Name: Events
*/
get_header(); ?>

<h2>Events</h2>
<div class="events__container">
    <?php 
    $posts = get_posts( array(
        'post_type' => 'post',
        'meta_key'  => 'date_picker',
        'orderby'   => 'meta_value_num',
        'order'     => 'ASC',
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
            // $titre = the_title();

        }

        foreach ($group_posts as $yearKey => $years) {

            foreach ($years as $monthKey => $months) {
    
                echo $monthKey;
                echo '<br>';
                echo '<br>';
                
                foreach ($months as $postKey => $posts) {
                    while ( have_posts() ) : the_post(); ?>
    <h4><?php the_title();?></h4>
    <?php echo get_the_post_thumbnail(); ?>
    <?php echo $posts[1]->format('d-m-Y');?>
    <br>
    <?php endwhile;
        }
    
        }
    
        }
        wp_reset_postdata();
    }

    


    ?>
</div>

<?php get_footer(); ?>