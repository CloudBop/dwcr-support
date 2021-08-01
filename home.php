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
<header class="entry-header">
  <!-- background image -->
  <h1 class="" style="z-index:100"> 
    News
  </h1>
</header>

  <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <main id="main" class="site-main" role="main">
          <?php if(have_posts()) { ?>
            
            <?php 
              // each blog post
              while(have_posts()) { ?>
              <?php the_post(); ?>
              <article <?php echo post_class('mt-2'); ?> >
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
      <aside class="col-12 col-md-4 mt-2">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside>
    </div>
  </div>
</div>
<?php get_footer();?>