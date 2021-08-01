<?php
require_once('widgets/class-wp-widget-recent-posts.php');
require_once('widgets/class-wp-widget-archives-bs4.php');
require_once('widgets/class-wp-widget-pages-bs4.php');
// Set constants these are global and be used within any classes
//
if ( !defined( 'PNHUK_DIR_PATH') ) {
  // - get theme dir - app/public/wp-content/themes/cgr-awpt
  define( 'PNHUK_DIR_PATH' , untrailingslashit( $string=get_template_directory() ) );
}

if ( !defined( 'PNHUK_DIR_URI') ) {
  // - get_template_directory_uri 
  define( 'PNHUK_DIR_URI' , untrailingslashit( $string=get_template_directory_uri() ) );
}

if ( !defined( 'PNHUK_BUILD_JS_URI') ) {
  // - get build folder 
  define( 'PNHUK_BUILD_JS_URI' , untrailingslashit( $string=get_template_directory_uri() ) . '/assets/build/js' );
}
if ( !defined( 'PNHUK_BUILD_JS_DIR_PATH') ) {
  // - get build folder 
  define( 'PNHUK_BUILD_JS_DIR_PATH' , untrailingslashit( $string=get_template_directory() ) . '/assets/build/js' );
}
if ( !defined( 'PNHUK_BUILD_CSS_URI') ) {
  // - get build folder 
  define( 'PNHUK_BUILD_CSS_URI' , untrailingslashit( $string=get_template_directory_uri() ) . '/assets/build/css' );
}
if ( !defined( 'PNHUK_BUILD_CSS_DIR_PATH') ) {
  // - get build folder 
  define( 'PNHUK_BUILD_CSS_DIR_PATH' , untrailingslashit( $string=get_template_directory() ) . '/assets/build/css' );
}

// autoload all classes 
require_once PNHUK_DIR_PATH .'/inc/helpers/autoloader.php';

// template tags - helpers
require_once PNHUK_DIR_PATH .'/inc/helpers/template-tags.php';

// - entrypoint 
function pnhuk_get_theme_instance() {
  // - load parent class of theme.
  \PNHUK_THEME\Inc\PNHUK_THEME_ENTRY::get_instance();
}
pnhuk_get_theme_instance();
// end of initialization

// Register Widgets
function pnhuk_register_widgets(){
	register_widget('WP_Widget_Recent_Posts_Custom');
	register_widget('WP_Widget_Archives_BS4');
	register_widget('WP_Widget_Pages_BS4');
	// register_widget('WP_Widget_Recent_Comments_Custom');
	// register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init','pnhuk_register_widgets');