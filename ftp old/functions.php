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