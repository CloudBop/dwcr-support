<?php
// DATA FROM ACF
$section2_image	= get_field('section2_image');
?>
<!-- Welcome Section -->
<section id="welcome-section" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h2><?php the_field('section2_title'); ?></h2>
        <p class="lead">
          <?php the_field('section2_blurb'); ?>
        </p>
        <a href="" class="btn btn-lg pnh-red-button">
          <?php the_field('section2_cta'); ?>
        </a>
      </div>
      <div class="col-md-6">
         <?php // WP doesn't allow SVG... hardcoded asset the_field('section2_cta'); ?>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/src/img/svg/pnh-uk-map.svg" alt="" class="img-fluid mb-3" />
      </div>
    </div>
  </div>
</section>
<!-- End Welcome Section -->