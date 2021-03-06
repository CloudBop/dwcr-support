<?php
/**
 * Enqueue theme assets
 * 
 * @package cgr-awpt
 */
// theme namespace
namespace PNHUK_THEME\Inc;
// import singleton functionality for autoloading
use PNHUK_THEME\Inc\Traits\Singleton;
//
class Assets {
  // will only instantiate once
  use Singleton;

  protected function __construct() {
    //wp_die($message="hello", $title, $args);

    // load class in wordpress when constructor invoked
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    /**
     * WordPress Actions - tell wordpress to include these in head
     */ 
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles() {
    // - use filemtime for timestamp, only changes if file is modified - gets around browser cacheing
    // - register with WP - new WordPress 5.5 feature :- can enqueue programatically, for page_template() || gutenberg || plugin 
    // register styles
    wp_register_style($handle = 'bootstrap-css', PNHUK_DIR_URI.'/assets/src/library/css/bootstrap.min.css' , [], false, $media= 'all');
    wp_register_style($handle = 'main-css', PNHUK_BUILD_CSS_URI . '/main.css' , ['bootstrap-css'], filemtime(PNHUK_BUILD_CSS_DIR_PATH . '/main.css'), $media= 'all');
    // -create google font set - https://google-webfonts-helper.herokuapp.com/fonts
    // - bundled in webpack
    // wp_register_style($handle = 'fonts-css', CGR_AWPT_DIR_URI.'/assets/src/library/fonts/fonts.css' , [], false, $media= 'all');
    //
    // enqeue styles
    wp_enqueue_style($handle='bootstrap-css');
    wp_enqueue_style($handle='main-css');
  }

  public function register_scripts() {
    // register JS
    $tmp2 = PNHUK_BUILD_JS_DIR_PATH . '/main.js';
    wp_register_script($handle = 'main-js', PNHUK_BUILD_JS_URI . '/main.js', ['jquery'], $ver = filemtime($tmp2), $in_footer=true);
    wp_register_script($handle = 'bootstrap-js', PNHUK_DIR_URI.'/assets/src/library/js/bootstrap.min.js' , ['jquery'], false, $in_footer=true);
    //
    wp_enqueue_script($handle='main-js');
    wp_enqueue_script($handle='bootstrap-js');
  }

}