<?php
/**
 * main template
 * 
 * end of template heirarchy
 * https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package cgr-awpt
 */ 
?>

<?php get_header();?>

<div id="primary">
  <main id="main" class="site-main mt-5" role="main">


    <section class="header1 top-section-hero-image mbr-fullscreen" id="header1-1">
      <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

      <div class="container">
          <div class="row">
              <div class="col-12 col-lg-6">
                  <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Rare Together</strong></h1>

                  <p class="mbr-text mbr-fonts-style display-7">
                      We are a community of people living with PNH (and their family members) in England, Wales and
                      Northern Ireland supporting one other, sharing our experiences and engaging together with the
                      stakeholders in our world.</p>
                  <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="#">Learn More</a>
                  </div>
              </div>
          </div>
      </div>
    </section>


  

   

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