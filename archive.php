<?php get_header(); ?>
<header class="entry-header mb-3">
  <!-- background image -->
  <!-- <h1 class="" style="z-index:100">
    <?php the_title() ?>
  </h1>    -->
  <h1 class="text-center py-5" style="z-index:100">
    <?php
      // archive title
      if(is_category()){
        single_cat_title();
      } else if(is_author()){
        the_post();
        echo 'Archives By Author: ' .get_the_author();
        rewind_posts();
      } else if(is_tag()){
        single_tag_title();
      } else if(is_day()){
        echo 'Archives By Day: ' .get_the_date();
      } else if(is_month()){
        echo 'Archives By Month: ' .get_the_date('F Y');
      } else if(is_year()){
        echo 'Archives By Year: ' .get_the_date('Y');
      } else {
        echo 'Archives';
      }
    ?>
  </h1>
</header>
<div class="container">
  <div class="row">
    <div class="col-md-8 p-sm-0 pr-md-2">
      <main id="main" class="site-main" role="main">
        <?php if(have_posts()) { ?>
            <?php 
              // each blog post
              while(have_posts()) { ?>
              <?php the_post(); ?>
              <article <?php echo post_class('bg-white mb-3'); ?> >
                <?php if(get_the_post_thumbnail() !== '') { ?>
                    <div class="img-fixed">
                      <?php 
                      // TODO - configure thumbnails for correct sizing
                      the_featured_img_srcset();
                      // the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
                    </div>
                <?php } ?>
                <div class="p-1">
                  <?php get_template_part('template-parts/post/header') ?>  
                  <?php the_excerpt(); ?>
                  <?php pnhuk_readmore_link(); ?>
                </div>
              </article>
            <?php } ?>

          <?php } else { ?>
              <?php get_template_part('template-parts/post/content','none'); ?>
          <?php } ?>
      </main>
    </div>   
    <aside class="col-md-4 p-md-0">
      <?php dynamic_sidebar('page-sidebar'); ?>
    </aside>
  </div>

</div>

<?php get_footer(); ?>
