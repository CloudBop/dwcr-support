<?php
// DATA FROM ACF  - https://support.advancedcustomfields.com/forums/topic/how-to-use-the-image-field-for-backgrounds/
$section_1_image_demo2	= get_field('section_1_image_demo2');
// Todo
/* <img class="img-fluid" src="<?php echo $section1_image['url']; ?>" alt="<?php echo $section1_image['alt']; ?>">*/

//
// http://pnhukorg-org.stackstaging.com
//

// <section>
//   <pre>
//     <?php echo print_r($section1_image); ?<  
//   </pre>
// </section>
//style="background-image: url(<?php  $section1_image['url'];
?>
<!-- Start Hero Section -->
<section class="col-12 p-0">
  <header id="hero-section"> 
    <?php echo wp_get_attachment_image($section_1_image_demo2, 'full'); ?>
    <div class="dark-overlay">
      <!-- main content -->
      <div class="hero-inner container d-flex">
        <div class="row align-self-center">
          <div class="col-md-6">
            <h1>
              <?php the_field('section_1_title_demo2'); ?>
            </h1>
            <p>
              <?php the_field('section_1_blurb_demo2'); ?>
            </p>
            <a href="<?php the_field('section_1_cta_url_demo2'); ?>" class="btn btn-lg btn-pnhorg"><?php the_field('section_1_cta_text_demo2'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>
</section>
<!-- End Hero section -->