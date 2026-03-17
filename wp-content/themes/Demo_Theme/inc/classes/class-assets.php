<?php

/**
 * Enqueue theme assets
 *
 * @package Demo_Theme
 */

namespace Demo_Theme_THEME\Inc;

use Demo_Theme_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        // Assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // action and filter
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        wp_register_style('style-css', Demo_Theme_DIR_URI, [], filemtime(Demo_Theme_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', Demo_Theme_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {
        wp_register_script('main-js', Demo_Theme_DIR_URI . '/assets/main.js', [], filemtime(Demo_Theme_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', Demo_Theme_DIR_URI   . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
