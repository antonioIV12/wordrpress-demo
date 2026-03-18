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
        'Demo_Theme-header-menu' => esc_html__('Header Menu', 'Demo_Theme'),
        'Demo_Theme-footer-menu' => esc_html__('Extra Menu', 'Demo_Theme')
      )
    );
  }
  public function get_menu_id($location)
  {

    // Get all locations
    $locations = get_nav_menu_locations();

    // echo '<pre>';
    // print_r( $locations );
    // wp_die();
    $menu_id = $locations[$location];
    //  ! empty($locations[$location]) ? $locations[$location] : '';
 
    return ! empty($menu_id) ? $menu_id : '';
  }

  public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menus = [];

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}

}
