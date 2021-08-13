<!-- Start Zoom Section -->
<section id="zoom-section" style="background-image: url(<?php echo get_field('section_5_image')['url']; ?>);">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php the_field('section_5_title'); ?></h2>
        <p><?php the_field('section_5_blurb'); ?></p>
        <a href="<?php the_field('section_5_cta_url'); ?>" class="btn btn-lg btn-pnhorg"><?php the_field('section_5_cta_text'); ?></a>
      </div>
    </div>
  </div>
</section>
<!-- End Zoom Section -->