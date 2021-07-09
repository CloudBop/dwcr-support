<?php
/**  - the news list page
 * home.php 
 * - the page template for displaying list of blog posts 
 * - ignore filename, home.php refers to the page with all blog posts
 * end of template heirarchy
 * https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package cgr-awpt
 */
?>
<?php get_header();?>
<div id="primary">
  <div class="container">
    <h1 class="text-center py-5">News</h1>
      <div class="row">
        <div class="col-12 col-md-8">
          <main id="main" class="site-main" role="main">
          <?php if(have_posts()) { ?>
            
            <?php 
              // each blog post
              while(have_posts()) { ?>
              <?php the_post(); ?>
              <article <?php // echo post_class(); ?> >
                <?php if(get_the_post_thumbnail() !== '') { ?>
                    <div class="">
                      <?php 
                      // TODO - configure thumbnails for correct sizing
                      the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
                    </div>
                <?php } ?>

                <?php get_template_part('template-parts/post/header') ?>  
                <?php the_excerpt(); ?>
                <?php pnhuk_readmore_link(); ?>
              </article>
            <?php } ?>

          <?php } else { ?>
              <?php get_template_part('template-parts/post/content','none'); ?>
          <?php } ?>
          </main>
        </div>
      <!-- <div class="col-12 col-md-4" 
      style="background-color: #c8d1c5; border:3px dotted olive;">
      test</div> -->
      <aside class="col-12 col-md-4 aside-home">
        <?php dynamic_sidebar('sidebar-3'); ?>
      </aside>
    </div>
  </div>
</div>
<?php get_footer();?>