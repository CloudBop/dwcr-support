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
  <main id="main" class="site-main mt-5" role="main">
    <div class="container">
      <h1 class="text-center py-5">News</h1>
      <div class="row">
        <div class="col-12 col-md-8">
          
        <?php if(have_posts()) { ?>
          <?php while(have_posts()) { ?>
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

                <?php if(is_single( )) { ?>
                    <h1> tester </h1>
                        <?php the_content(); 
                        wp_link_pages();
                        ?>
                    
                <?php } else { ?>
                    
                    <?php the_excerpt(); ?>
                    
                <?php } ?>

                <?php if(is_single( )) { ?>
                    <?php  get_template_part('template-parts/post/footer') ?>
                <?php } ?>

                <?php  if(!is_single()) { 
                  pnhuk_readmore_link(); 
                } 
                ?>

            </article>
          <?php } ?>
        <?php } else { ?>
            <?php get_template_part('template-parts/post/content','none'); ?>
        <?php } ?>
        </div>
        
        <!-- <div class="col-12 col-md-4" 
        style="background-color: #c8d1c5; border:3px dotted olive;">
        test</div> -->
        <aside class="col-12 col-md-4 aside-home">
          <?php dynamic_sidebar('sidebar-3'); ?>
        </aside>
      </div>
    </div>
    
    
  </main>
</div>

<?php 
get_footer();


/*

 <?php if ( have_posts() ) : ?>
      <div class="container">

        <?php if( is_home() && ! is_front_page() ) { ?>

          <header class="mb-5">
              <h1 class="page-title screen-reader-text">
                <?php single_post_title(); ?>
              </h1>
          </header>
        
        <?php } // endif ?>

        <div class="row">
          <?php 
            $index=0;
            $no_of_columns=3;
            while ( have_posts() ) : the_post();

              if ( 0 === $index % $no_of_columns ) {
                ?>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                  
                <?php
              }

              // get_template_part( 'template-parts/content');

              $index++;
              if ( 0 !== $index && 0 === $index % $no_of_columns) {
                ?>
                  </div>

              <?php }
              
              endwhile;
              ?>
        </div>
      </div>  <!-- end container -->

      <?php 
        else : 
          // get_template_part('template-parts/content-none');  
        endif;
        // cgr_awpt_pagination();
      ?>*/
      ?>