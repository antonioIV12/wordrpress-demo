<?php 
/**
 * Theme Functions 
 * 
 * @package Demo_Theme
 */


function Demo_Theme_enqueue_style() {
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style-css') . 'all' );
    wp_enqueue_style( 'style-css' );

    add_action( 'wp_enqueue_style');
}
