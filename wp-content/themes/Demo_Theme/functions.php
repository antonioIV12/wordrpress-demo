<?php 
/**
 * Theme Functions 
 * 
 * @package Demo_Theme
 */

if ( ! defined( 'Demo_Theme_DIR_PATH' ) ) {
	define( 'Demo_Theme_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'Demo_Theme_DIR_URI' ) ) {
	define( 'Demo_Theme_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}   

require_once Demo_Theme_DIR_PATH . '/inc/helpers/autoloader.php';

require_once get_template_directory() . '/inc/classes/class-Demo_Theme-theme.php';
function Demo_Theme_THEME_get_instance() {
    \Demo_Theme_THEME\Inc\Demo_Theme_THEME::get_instance();
}

Demo_Theme_THEME_get_instance();