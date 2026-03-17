<?php

/**
 * Bootstraps the Theme.
 *
 * @package Demo_Theme
 */

namespace Demo_Theme_THEME\Inc;

use Demo_Theme_THEME\Inc\Traits\Singleton;

class Demo_Theme_THEME
{
    use Singleton;

    protected function __construct() {
        
        Assets::get_instance();
		Menus::get_instance();
        $this->setup_hooks();
    } 

    protected function setup_hooks() {
        // action and filter
       		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
		add_theme_support( 'title-tag' );
    }
}
