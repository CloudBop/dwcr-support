<?php /* Template Name: with-sticky-contents-sidebar */
get_header(); 
// render Page, ie NOT post 
?>
  <?php get_template_part('template-parts/page/entry-header'); ?>
  
  <div class="container">
    <div class="row">
      <?php if(have_posts()) { ?>
        <?php while(have_posts()) { ?>
          <?php // https://developer.wordpress.org/reference/functions/the_post/ 
            the_post(); ?>
            <div class="col-sm-8 p-0">
              <main class="main-content">
                <?php //get_template_part('template-parts/components/page/entry-header'); ?>
                <?php get_template_part('template-parts/page/entry-content'); ?>
                <?php get_template_part('template-parts/page/entry-footer'); ?>
                <!-- <small>page-template</small> -->
              </main>
            </div>

            <aside class="col-sm-4 pr-0 page-sidebar">
            
              <?php
                dynamic_sidebar('contents-sidebar');
                // echo do_shortcode("[toc]");
              ?>                        
            
            </aside>
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
<?php get_footer(); ?> 
