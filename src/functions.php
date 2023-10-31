<?php
// register a menu 
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

//add featured image
add_theme_support( 'post-thumbnails' );

// disable block frontend wrapper.

add_filter( 'lzb/block_render/allow_wrapper', '__return_false' );


// WIDGET TEST
// WIDGET TEST
// WIDGET TEST

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home intro content',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
    'id'          => 'before-post',
    'name'        => 'Before Posts Widget',
    'description' => __( 'Your Widget Description.', 'text_domain' ),
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// widget area
// widget area
// widget area