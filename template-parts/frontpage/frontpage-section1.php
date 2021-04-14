<?php
// DATA FROM ACF  - https://support.advancedcustomfields.com/forums/topic/how-to-use-the-image-field-for-backgrounds/
$section1_image	= get_field('section_1_image');
// Todo
/* <img class="img-fluid" src="<?php echo $section1_image['url']; ?>" alt="<?php echo $section1_image['alt']; ?>">*/
?>
<!-- Start Hero Section -->
<section class="col-12 p-0">
 
  <header id="hero-section" style="background-image: url(<?php echo $section1_image['url']; ?>);">
    <div class="dark-overlay">
      <!-- main content -->
      <div class="hero-inner container d-flex">
        <div class="row align-self-center">
          <div class="col-md-6">
            <h1>
              <?php the_field('section_1_title'); ?>
            </h1>
            <p>
              <?php the_field('section_1_blurb'); ?>
            </p>
            <a href="<?php the_field('section_1_cta_url'); ?>" class="btn btn-lg pnh-red-button"><?php the_field('section_1_cta_text'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>
</section>
<!-- End Hero section -->