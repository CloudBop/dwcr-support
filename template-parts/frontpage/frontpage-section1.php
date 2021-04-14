<?php
// DATA FROM ACF  - https://support.advancedcustomfields.com/forums/topic/how-to-use-the-image-field-for-backgrounds/
$section1_image	= get_field('section1_image');

// Todo
/* <img class="img-fluid" src="<?php echo $section1_image['url']; ?>" alt="<?php echo $section1_image['alt']; ?>">*/
?>
<!-- Start Hero Section -->
<section class="col-12 p-0">
 
  <header id="hero-section" style="background-image: url(<?php the_field('section1_image'); ?>);">
    <div class="dark-overlay">
      <!-- main content -->
      <div class="hero-inner container d-flex">
        <div class="row align-self-center">
          <div class="col-md-6">
            <h1>
              <?php the_field('section1_title'); ?>
            </h1>
            <p>
              <?php the_field('section1_blurb'); ?>
            </p>
            <button class="btn btn-lg pnh-red-button"><?php the_field('section1_cta'); ?></button>
          </div>
        </div>
      </div>
    </div>
  </header>
</section>
<!-- End Hero section -->