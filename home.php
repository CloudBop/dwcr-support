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
<header class="entry-header mb-3">
  <!-- background image -->
  <h1 class="" style="z-index:100"> 
    News
  </h1>
</header>

  <div class="container pnhuk-main">
      <div class="row">
        <div class="col-md-8 p-sm-0 pr-md-2">
          <main id="main" role="main">
          <?php if(have_posts()) { ?>
            
            <?php 
              // each blog post
              while(have_posts()) { ?>
              <?php the_post(); ?>
              <article <?php echo post_class('news-post'); ?> >
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                  <?php if(get_the_post_thumbnail() !== '') { ?>
                      <div class="img-fluid">
                        <?php 
                        // TODO - configure thumbnails for correct sizing
                        the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
                      </div>
                  <?php } ?>
                  <h2 class="px-2 mb-1">
                    <?php echo get_the_title(); ?>
                  </h2>
                </a>
                <div class="news-post-list-meta p-2">
                  <?php _themename_post_meta(); ?>    
                  <div class="excerpt">
                    <?php the_excerpt(); ?>
                    <?php pnhuk_readmore_link(); ?>
                  </div> 
                </div>
              </article>
            <?php }
            cgr_awpt_pagination();
            ?>
            
          <?php } else { ?>
              <?php get_template_part('template-parts/post/content','none'); ?>
          <?php } ?>
          </main>
        </div>
      <aside class="col-md-4 p-md-0">
        <?php dynamic_sidebar('news-posts-sidebar'); ?>
      </aside>
    </div>
  </div>
</div>
<?php get_footer();?>