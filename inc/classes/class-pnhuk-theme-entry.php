<?php
/**
 * bootsraps theme, entry-point for invoking all classes
 * 
 * @package cgr-awpt
 */
namespace PNHUK_THEME\Inc;
// import singleton functionality
use PNHUK_THEME\Inc\Traits\Singleton;

class PNHUK_THEME_ENTRY {
  use Singleton;
  /**
   * constructor that loads all of our theme functionality
   */
  protected function __construct() {
    
    // instantiate classes, using singleton trait + autoloader 

    // enque webpack dist
    Assets::get_instance();

    // configure WP
    Menus::get_instance();
    Sidebars::get_instance();
    
    // - todo
    // Meta_Boxes::get_instance();
    // Clock_Widget::get_instance();
    // Block_Patterns::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks() {

    /**
     * Actions
     */
    add_action('after_setup_theme', [$this, 'setup_theme'], $priority=10, $accepted_args=1);

  }

  // - https://developer.wordpress.org/reference/functions/add_theme_support/
  public function setup_theme() {
    // todo load-theme-text-domain - internationalisation
    // let WordPress manage title
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'custom-logo', $defaults = array(
      // classnames 
      'header-text' => array( 'site-title', 'site-description' ),
      'height'      => 100,
      'width'       => 400,
      // add support for cropping image in WP-admin 
      'flex-height' => true,
      'flex-width'  => true,
    ));
    
    //
    // adds body.custom-background selector to body - wp-includes/class-wp-rest-themes-controller
    add_theme_support('custom-background', [
      'default-color' => '#654687',
      // 'default-image' => 
      'default-repeat' => 'no-repeat'
    ]);

    // featured-image to posts
    add_theme_support('post-thumbnails');

    // register image sizes
    add_image_size( 'featured-thumbnail', 350, 233, $crop_from_center=true );

    // https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
    add_theme_support('customize-selective-refresh-widgets');

    // - head meta
    add_theme_support('automatic-feed-links');

    // - html5 standards in default markup
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    
    // - custom css from tinymice 
    add_editor_style();
    // 
    add_theme_support('wp-block-styles');

    // align-wide and full-width imgs in gutenberg
    add_theme_support('align-wide');

    // add all styled for the admin-editor
    add_editor_style('assets/build/css/editor.css');

    // remove all core block patterns
    // remove_theme_support($feature='core-block-patterns');

    // 
    remove_theme_support("widgets-block-editor");

    // set wordpress global width 
    global $content_width;
    if( ! isset( $content_width ) ) {
        // px
        $content_width = 1240;
    }
  }
}