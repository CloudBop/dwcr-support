<?php /* Template Name: full-width-no-sidebar */
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
            <div class="col-12">
              <main class="main-content">
                <?php get_template_part('template-parts/page/entry-content'); ?>
                <?php get_template_part('template-parts/page/entry-footer'); ?>
              </main>
            </div>
      <?php } // end while?>

    <?php } else {?>
        <div class="col">
          <?php get_template_part('template-parts/post/content','none'); ?>
        </div>
    <?php }  // end if else ?>
    </div>
  </div>
  <div id="stop-table-of-contents" class="clearfix"> </div>
<?php get_footer(); ?> 
