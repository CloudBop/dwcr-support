<?php 
/** the frontpage template - when in wp admin area as static frontpage 
 * 
 * */ 
get_header(); ?>
<div class="landing-wrapper">
  <?php 
    get_template_part('template-parts/frontpage/frontpage','section1');
    get_template_part('template-parts/frontpage/frontpage','section2');
    get_template_part('template-parts/frontpage/frontpage','section3');

    get_template_part('template-parts/frontpage/frontpage','section4');
    get_template_part('template-parts/frontpage/frontpage','section5');
    // get_template_part('template-parts/frontpage/frontpage','section6');
    // get_template_part('template-parts/frontpage/frontpage','section7');
    get_template_part('template-parts/frontpage/frontpage','section8');
  ?>
</div>
<?php get_footer(); ?>