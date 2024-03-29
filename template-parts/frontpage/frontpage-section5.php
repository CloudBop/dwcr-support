<!-- Start Social Section -->
<section id="social-section">
  <div class="container text-center my-5">
    <h2 class="mb-2">Follow Us On</h2>
    <a href="<?php the_field("social_section_1"); ?>" class="fab fa-facebook-square p-4"></a>
    <a href="<?php the_field("social_section_2"); ?>" class="fab fa-twitter-square p-4"></a>
    <a href="<?php the_field("social_section_3"); ?>" class="fab fa-instagram-square p-4"></a>
  </div>
</section>
<!-- End Social Section -->

<section class="container">
  <div class="row">
    <div class="col-sm-6 entry-content">
      <?php dynamic_sidebar('sidebar-front-page');?>
    </div> 
    <div class="col-sm-6 entry-content d-flex">
      <?php  dynamic_sidebar('sidebar-twitter');?>
    </div>
  </div> 
</section>