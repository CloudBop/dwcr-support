<?php
/**
 * Register theme menus
 * 
 * @package cgr-awpt
 */
// theme namespace
namespace PNHUK_THEME\Inc;
// import singleton functionality for autoloading
use PNHUK_THEME\Inc\Traits\Singleton;
//
class Menus {
  // only instantiate once
  use Singleton;

  protected function __construct() {
    //load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    /**
     * Actions
     */
    add_action( 'init', [$this, 'register_menus' ] );
  }

  public function register_menus() {
    // set wordpress appearances/Menus
    register_nav_menus(
      array(
        // why is it better to use esc_html__ ???
        'pnhuk-theme-header-menu' => esc_html__( 'Header Menu', $Text_Domain = 'pnhuk-theme' ),
        'pnhuk-theme-footer-menu' => esc_html__( 'Footer Menu', 'pnhuk-theme' )
       )
     );
  }

  public function get_menu_id( $location ) {
    // return all currently set locations = ['primary',...]
    $locations = get_nav_menu_locations();  

    // get menu object id by assoc key
    $menu_id = $locations[$location]; 
    // if !empty return 
    return ! empty($menu_id) ? $menu_id : '';   
  }

  public function get_child_menu_items( $menu_array, $parent_id) {
    // store child menus
    $child_menus = [];   
    // error handling
    if ( !empty ($menu_array) && is_array($menu_array)) {
      // loop through header menu again
      foreach ($menu_array as $menu) {
        // var_dump($menu);
        // echo '<br>';
        // intval - force int. get all the menus that are children of this parent.
        if(intval( $menu->menu_item_parent) === $parent_id) {
          //
          array_push( $child_menus, $menu);
        }
      }
    }
  
    return $child_menus;
  }
}