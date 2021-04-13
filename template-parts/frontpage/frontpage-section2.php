<?php
// DATA FROM ACF
$section2_image	= get_field('section2_image');
?>
<!-- Welcome Section -->
<section id="welcome-section" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center welcome-breakpoint">
        <h2><?php the_field('section2_title'); ?></h2>
        <p class="">
          <?php the_field('section2_blurb'); ?>
        </p>
        <button class="btn btn-lg btn-danger">  <?php the_field('section2_cta'); ?></button>
      </div>
      <div class="col-md-6">
         <?php // WP doesn't allow SVG... hardcoded asset the_field('section2_cta'); ?>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/src/img/svg/pnh-uk-map.svg" alt="" class="img-fluid mb-3 welcome-image" />
      </div>

      <!-- <div class="col-sm-6 col">

      </div> -->
    </div>
  </div>
</section>
<!-- End Welcome Section -->