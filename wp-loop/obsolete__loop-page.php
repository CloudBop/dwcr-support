<?php // invoked on all Page templates  (page.php) ?>

<?php if(have_posts()) { ?>
  <?php while(have_posts()) { ?>

      <?php the_post(); ?>

      <?php //get_template_part('template-parts/components/page/entry-header'); ?>
      <?php get_template_part('template-parts/components/page/entry-content'); ?>
      <?php get_template_part('template-parts/components/page/entry-footer'); ?>

      <?php 
      // if (comments_open() || get_comments_number() ) {
      //     comments_template();
      // }
      ?>

  <?php } ?>

<?php } else { ?>
  <?php get_template_part('template-parts/post/content','none'); ?>
<?php } ?> 