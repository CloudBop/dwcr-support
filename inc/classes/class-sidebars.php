<?php
/**
 * registers sidebars
 * 
 * @package dwcr-support
 */
// theme namespace
namespace PNHUK_THEME\Inc;
// import singleton functionality for autoloading
use PNHUK_THEME\Inc\Traits\Singleton;
//
class Sidebars {
  // only instantiate once
  use Singleton;

  protected function __construct() {
    //load class
    //wp_die($message="hello", $title, $args);
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    /**
     * Actions
     */
    add_action( 'widgets_init', [$this, 'register_sidebars']);
    // add_action( 'widgets_init', [$this, 'register_clock_widget']);


  }

  public function register_sidebars(){
    //
    register_sidebar(array(
      'name'          => esc_html__( 'Sidebar', 'pnhuk-theme'),
      'id'            => 'sidebar-1',
      'description'   => __( 'Main Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s class="widget widget-sidebar %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));

    register_sidebar(array(
      'name'          => esc_html__( 'Footer sb', 'pnhuk-theme'),
      'id'            => 'sidebar-2',
      'description'   => __( 'Footer Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s class="widget widget-footer cell column %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));


    register_sidebar(array(
      'name'          => esc_html__( 'News sb', 'pnhuk-theme'),
      'id'            => 'sidebar-3',
      'description'   => __( 'News Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s class="widget widget-footer cell column %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));

    register_sidebar(array(
      'name'          => esc_html__( 'Page sb', 'pnhuk-theme'),
      'id'            => 'sidebar-4',
      'description'   => __( 'Page Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s class="widget widget-footer cell column %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  }


  // register custom widget
  // public function register_clock_widget() {
  //   register_widget('CGR_AWPT\Inc\Clock_Widget');
  // }
}