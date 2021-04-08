<?php
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
// - entrypoint 
function pnhuk_get_theme_instance() {
  // - load parent class of theme.
  \PNHUK_THEME\Inc\PNHUK_THEME_ENTRY::get_instance();
}
pnhuk_get_theme_instance();
// end of initialization


function _themename_readmore_link(){
  echo '<a class="c-post__readmore" href=" '.get_the_permalink().' " title="'. the_title_attribute([ 'echo'=>'false' ]).'">';

  printf(
    // interpolate string and escape html
    wp_kses(
      // %s === get_the_title
      __ ('Read more <span class="u-screen-reader-text">About %s </span> ', '_themename'),
      // , with exception to this element
      [
        'span' => [
          // and this attribute
          'class' => []
        ]
      ]

    ),
    get_the_title()
  );
  echo '</a>';
}