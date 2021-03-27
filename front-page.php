<?php 
/** the frontpage template - when in wp admin area as static frontpage 
 * */ 

get_header(); ?>

<!-- Nothing to see here yet -->

<div class="not-in-use-main-wrapper">
    <?php 
      // 
        // get_template_part('template-parts/frontpage/frontpage','section1'); 
        // get_template_part('template-parts/frontpage/frontpage','section2'); 
        get_template_part('template-parts/frontpage/frontpage','section3'); 
      ?>
	</div>
<?php get_footer(); ?>