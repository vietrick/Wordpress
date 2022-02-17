<?php
//Xoa Gutenberg Block Library CSS khỏi Wordpress
function vietrick_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'vietrick_remove_wp_block_library_css', 100 );
