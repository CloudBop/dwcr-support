<!-- Start Card Section -->
<section id="card-section">
  <div class="container">
    <div class="row my-5 card-row">
      <div class="col-sm-6 align-self-center card-order-text">
        <h3><?php the_field('card_title_1'); ?></h3>
        <p><?php the_field('card_desc_1'); ?></p>

        <a href="<?php the_field('card_url_1'); ?>" class="btn btn-lg btn-pnhorg">Read More</a>
      </div>

      <div class="col-sm-6 card-order-image card-image-margin">
        <?php echo wp_get_attachment_image(get_field('card_img_1'), 'full');?>
      </div>
    </div>

    <div class="row my-5 card-row">
      <div class="col-sm-6 align-self-center card-image-margin">
        <?php echo wp_get_attachment_image(get_field('card_img_2'), 'full');?>
      </div>

      <div class="col-sm-6 align-self-center">
        <h3><?php the_field('card_title_2'); ?></h3>
        <p><?php the_field('card_desc_2'); ?></p>
        <a href="<?php the_field('card_url_2'); ?>" class="btn btn-lg btn-pnhorg">Read More</a>
      </div>
    </div>

    <div class="row my-5 card-row">
      <div class="col-sm-6 align-self-center card-order-text">
        <h3><?php the_field('card_title_3'); ?></h3>
        <p><?php the_field('card_desc_3'); ?></p>
        <a href="<?php the_field('card_url_3'); ?>" class="btn btn-lg btn-pnhorg"><?php the_field('card_cta_3'); ?></a>
      </div>

      <div class="col-sm-6 align-self-center card-order-image card-image-margin">
        <?php echo wp_get_attachment_image(get_field('card_img_3'), 'full');?>
      </div>
    </div>
  </div>
</section>
<!-- End Card Section -->

    