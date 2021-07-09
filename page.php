<?php get_header(); 
// render Page, ie NOT post 
?>
<main class="main-content">
  <?php get_template_part('template-parts/components/page/entry-header'); ?>
  <div class="container">
    <div class="row">
    <?php if(have_posts()) { ?>
      <?php while(have_posts()) { ?>
        <?php // https://developer.wordpress.org/reference/functions/the_post/ 
        the_post(); ?>
            <div class="col">
              <?php //get_template_part('template-parts/components/page/entry-header'); ?>
              <?php get_template_part('template-parts/components/page/entry-content'); ?>
              <?php get_template_part('template-parts/components/page/entry-footer'); ?>
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
