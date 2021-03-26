<?php 
/** the frontpage template - when in wp admin area as static frontpage 
 * */ 

get_header(); ?>

<!-- Nothing to see here yet -->

<div class="container-fluid">
    <?php 
      // 
        get_template_part('frontpage/frontpage','section1'); 
        get_template_part('frontpage/frontpage','section2'); 
      ?>
	</div>
<?php get_footer(); ?>