<?php get_header(); 
// render Page, ie NOT post 
?>
<main class="main-content">
  <?php get_template_part('template-parts/page/entry-header'); ?>
  <div class="container">
    <div class="row">
      <?php if(have_posts()) { ?>
        <?php while(have_posts()) { ?>
          <?php // https://developer.wordpress.org/reference/functions/the_post/ 
        the_post(); ?>
            <div class="col-sm-8">
              <?php //get_template_part('template-parts/components/page/entry-header'); ?>
              <?php get_template_part('template-parts/page/entry-content'); ?>
              <?php get_template_part('template-parts/page/entry-footer'); ?>
              <small>page-template</small>
            </div>

            <div class="col-sm-4">
              <?php
              if ( $post->post_parent ) {
                  $children = wp_list_pages( array(
                      'title_li' => '',
                      'child_of' => $post->post_parent,
                      'echo'     => 0
                  ) );
                  $title = get_the_title( $post->post_parent );
              } else {
                  $children = wp_list_pages( array(
                      'title_li' => '',
                      'child_of' => $post->ID,
                      'echo'     => 0
                  ) );
                  $title = get_the_title( $post->ID );
              }
               
              if ( $children ) : ?>
                <div style="background-color: lavender;">
                  <h2><?php echo $title; ?></h2>
                  <ul>
                      <?php echo $children; ?>
                  </ul>
                </div>
              <?php endif; ?>

              <?php dynamic_sidebar('sidebar-4') ?>

            </div>
          <?php 
          // if (comments_open() || get_comments_number() ) {
          //     comments_template();
          // }
          ?>
      <?php } // end while?>
    <?php } else {?>
        <div class="col">
          <?php get_template_part('template-parts/post/content','none'); ?>
        </div>
    <?php }  // end if else ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 
