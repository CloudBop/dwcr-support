<?php
// DATA FROM ACF  - https://support.advancedcustomfields.com/forums/topic/how-to-use-the-image-field-for-backgrounds/
$section2_image	= get_field('section2_image');
$section1_image	= get_field('section1_image');
?>

<!-- Start Hero Section -->
<section class="col-12 p-0">
  <?php //  <!-- <img class="img-fluid" src="" alt=""> --> ?>
  <header id="hero-section"  style="background-image: url(<?php the_field('section1_image'); ?>);">
    <div class="dark-overlay">
      <!-- main content -->
      <div class="hero-inner container d-flex">
        <div class="row align-self-center">
          <div class="col-md-6">
            <h1 class="display-4">Rare Together</h1>
            <p class="lead">
              We are a community of people living with PNH (and their family
              members) in England, Wales and Northern Ireland supporting one
              other, sharing our experiences and engaging together with the
              stakeholders in our world.
            </p>
            <button class="btn btn-lg pnh-red-button">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </header>
</section>
<!-- End Hero section -->