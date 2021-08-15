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

            <aside class="col-md-4 p-0">
              <?php
                dynamic_sidebar('contents-sidebar');
                // echo do_shortcode("[toc]"); - there's another plugin utilising similar implementation
              ?>                        
            </aside>

            <div class="col-md-8 p-sm-0 pl-md-2">
              <main class="main-content">
                <article class="entry-content col" <?php post_class(); ?>>

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
