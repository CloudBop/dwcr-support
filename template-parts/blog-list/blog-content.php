<article id="post<?php the_ID(); ?>" <?php post_class( 'mb-5') ?>>

  <?php
  get_template_part('template-parts/components/blog-list/entry-header');
  get_template_part('template-parts/components/blog-list/entry-meta');
  get_template_part('template-parts/components/blog-list/entry-content');
  // get_template_part('template-parts/components/blog-list/entry-footer');
  ?>

</article>
