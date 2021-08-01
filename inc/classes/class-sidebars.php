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
    // register_sidebar(array(
    //   // Primary
    //   'name'          => esc_html__( 'Sidebar', 'pnhuk-theme'),
    //   'id'            => 'sidebar',
    //   'description'   => __( 'Main Sidebar', 'pnhuk-theme'),
    //   'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
    //   'after_widget'  => '</div>',
    //   'before_title'  => '<h3 class="widget-title">',
    //   'after_title'   => '</h3>',
    // ));

    register_sidebar(array(
      'name'          => esc_html__( 'News/Posts sidebar', 'pnhuk-theme'),
      'id'            => 'news-posts-sidebar',
      'description'   => __( 'News Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s" class="widget  %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));

    register_sidebar(array(
      'name'          => esc_html__( 'Pages Sidebar', 'pnhuk-theme'),
      'id'            => 'page-sidebar',
      'description'   => __( 'Page Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<header class="widget-title">',
      'after_title'   => '</header>',
    ));
    // footers
    register_sidebar(array(
      // footer quick links
      'name'          => esc_html__( 'Footer sb', 'pnhuk-theme'),
      'id'            => 'sidebar-footer',
      'description'   => __( 'Footer Sidebar', 'pnhuk-theme'),
      'before_widget' => '<div id="%1$s class="widget widget-footer cell column %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
    register_sidebar(array(
      // footer quick links
      'name'          => esc_html__( 'Footer-legal sb', 'pnhuk-theme'),
      'id'            => 'sidebar-footer-legal',
      'description'   => __( 'Footer Sidebar', 'pnhuk-theme'),
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