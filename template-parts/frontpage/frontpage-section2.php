<?php
// DATA FROM ACF
$section2_image	= get_field('section2_image');
?>
<!-- shrink to size if added to section
   style="background-image: url('../wp-content/themes/pnhuk-theme/assets/src/img/theme/image/mbr.jpg');" -->
<section class="header1 top-section-hero-image mbr-fullscreen" id="header1-1" style="background-image: url('../wp-content/themes/pnhuk-theme/assets/src/img/theme/image/mbr.jpg');">
  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

  <img class="img-fluid" src="<?php echo $section2_image['url']; ?>" alt="<?php echo $section2_image['alt']; ?>">
  
  
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6">
              <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong><?php echo get_field('section2_title'); ?></strong></h1>
              <p class="mbr-text mbr-fonts-style display-7">
                <?php echo get_field('section2_title'); ?>
              </p>
              <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="#"> <?php echo get_field('section2_title'); ?> </a>
              </div>
          </div>
      </div>
  </div>
</section>