<?php

/**
 * 
 * Menu Feature.
 * 
 * @package Demo_Theme
 */


namespace Demo_Theme_THEME\Inc;

use Demo_Theme_THEME\Inc\Traits\Singleton;

class Menus
{
  use Singleton;

  protected function __construct()
  {
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('init', [$this, 'register_menus']);
  }

  public function register_menus()
  {
    register_nav_menus(
      array(
        'header-menu' => esc_html__('Header Menu', 'Demo_Theme'),
        'extra-menu' => esc_html__('Extra Menu', 'Demo_Theme')
      )
    );
  }
}
