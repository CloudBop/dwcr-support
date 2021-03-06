<?php /* Template Name: with-sidebar-one */  ?>
<?php get_header(); ?>
<main class="main-content">
  <?php get_template_part('template-parts/page/entry-header'); ?>
  <div class="container">
    <div class="row">
    <?php if(have_posts()) { ?>
      <?php while(have_posts()) { ?>
        <?php the_post(); ?>
            <div class="col-sm-8">
              <?php //get_template_part('template-parts/page/entry-header'); ?>
              <?php get_template_part('template-parts/page/entry-content'); ?>
              <?php get_template_part('template-parts/page/entry-footer'); ?>
            </div>
          <?php 
          // if (comments_open() || get_comments_number() ) {
          //     comments_template();
          // }
          ?>
    <?php } // end while?>
    <?php } else {?>
        <div class="col-sm-8">
            <?php get_template_part('template-parts/post/content','none'); ?>
        </div>
    <?php }  // end if else ?>
    
        <div class="col-sm-4">
            <?php get_template_part('template-parts/page/entry-sidebar'); ?>
        </div>
    </div>
  </div>
</main>

        <?php /* 
        <aside class="col-sm-4 sidebar-content danger">
              <?php dynamic_sidebar('sidebar-1'); ?>
              This is where the sidebar goes, no registered sidebars as of yet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci veritatis cupiditate cumque ad quidem placeat! A doloribus nobis nostrum fugit quidem aliquam error assumenda, harum dolore totam necessitatibus placeat? Officiis?
        </aside> ?/*/?>
</div>
<?php get_footer(); ?>