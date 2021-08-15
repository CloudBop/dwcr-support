<?php /* Template Name: events-custom-page */

get_header(); 
?>
  
<div style="height:200px">
  <header class="entry-header">
    <!-- background image -->
    <h1 class="" style="z-index:100">
      Our Events
    </h1>   
  </header>
</div>

<div class="container-fluid mt-4">
  <div class="row">
    <?php if(have_posts()) { ?>
      <?php while(have_posts()) { ?>
        <?php // https://developer.wordpress.org/reference/functions/the_post/ 
          the_post(); ?>
          <div class="col-12">
            <main class="main-content">
              <article class="entry-content" <?php post_class(); ?>>
                  <?php the_content()  // EventsList Custom Plugin mkup ?>
                </article> 
            </main>
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
<?php get_footer(); ?> 
