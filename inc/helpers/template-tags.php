<?php

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

// invoked in The Loop.
function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = []){

  $custom_thumbnail = '';

  if( null === $post_id ) {
    $post_id = get_the_ID();
  }

  if ( has_post_thumbnail($post_id)) {
    // new browser functions for lazy loading - is default in wp-5.5
    $default_attributes = [
      'loading'=> 'lazy'
    ];
    $attributes = array_merge( $additional_attributes, $default_attributes );

    $custom_thumbnail = wp_get_attachment_image(
      get_post_thumbnail_id($post_id), 
      $size, 
      $icon=false, 
      $attr=$attributes
    );
  }

  return $custom_thumbnail;
}

function _themename_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = []){
  //
  echo get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}
