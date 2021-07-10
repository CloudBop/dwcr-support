<?php
/**
 * Header - template
 * 
 * @package cgr-awpt
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes($doctype = "html") ?>>
<head>
  <meta charset="<?php bloginfo($show ='' )?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  //  Let WordPress manage title -->
  // <!-- <title> pnhuk WordPress Theme</title> -->
  // <!-- <title> <?php bloginfo('name'); ?phpclose  </title> -->
  ?>
  <?php wp_head()?>  
</head>
<body <?php body_class(); ?>>

<?php 
  if ( function_exists('wp_body_open') ){
    // new in WP-5.2
    wp_body_open(); 
  }
?>
<div id="page" class="site">
  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part( 'template-parts/header/nav' ); ?>
  </header>
  <div class="site-content" id="content">