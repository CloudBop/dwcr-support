<?php get_header(); ?>
  <?php get_template_part('template-parts/page/entry-header'); ?>
  <div class="container">
    <div class="row">
      <?php if(have_posts()) { ?>
        <?php while(have_posts()) { ?>
          <?php // https://developer.wordpress.org/reference/functions/the_post/ 
            the_post(); ?>
            <div class="col-md-8 p-sm-0 pr-md-2">
              <main class="main-content">
                <article class="entry-content mb-3 p-2" <?php post_class(); ?>>

                    <?php // TODO
                      //    the_post_custom_thumbnail(
                      //        get_the_ID(),
                      //        $size = "featured-thumbnail",
                      //        [
                      //        'sizes' => '(max-width: 350px) 350px, 233px',
                      //        'class' => 'attachment-featured-thumbnail size-featured-image'
                      //        ]
                      //    )
                    ?>
                    <?php the_content()  // Gutenberg block content ?>
                  </article> 
              </main>
            </div>

            <aside class="col-md-4 p-sm-0">
              <?php dynamic_sidebar('page-sidebar'); ?>                        
            </aside>
          
          <?php // if (comments_open() || get_comments_number() ) {
          //     comments_template();
          // } ?>
      <?php } // end while?>

    <?php } else {?>
        <div class="col">
          <?php get_template_part('template-parts/post/content','none'); ?>
        </div>
    <?php }  // end if else ?>
    </div>
  </div>
<?php get_footer(); ?> 





 <?php /* if ( have_posts() ) : ?>
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