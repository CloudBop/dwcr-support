<!-- Start PNH What Is Section -->
<?php $section_3_image	= get_field('section_3_image'); ?>
<section id="what-is-section" style="background-image: url(<?php echo $section_3_image['url']; ?>);">
  <div class="dark-overlay">
    <div class="container">
        <div class="text-center d-flex flex-column mx-auto">
          <h2><?php the_field('section_3_title'); ?></h2>
          <p>
            <?php the_field('section_3_blurb'); ?>
          </p>
          <a href="<?php the_field('section_3_cta_url'); ?>" class="btn btn-lg btn-pnhorg">  <?php the_field('section_3_cta_text'); ?></a>
        </div>
    </div>
  </div>
</section>
<!-- End PNH What Is Section -->