<?php get_header(); 
// render Page, ie NOT post 
?>

<div>
    
        <main class="main-content">
        <?php get_template_part('template-parts/components/page/entry-header'); ?>



        <div class="container">
          <div class="row">
          <?php if(have_posts()) { ?>
            <?php while(have_posts()) { ?>
              <?php the_post(); ?>
                  <div class="col">
                    <?php //get_template_part('template-parts/components/page/entry-header'); ?>
                    <?php get_template_part('template-parts/components/page/entry-content'); ?>
                    <?php get_template_part('template-parts/components/page/entry-footer'); ?>
                  </div>
                <?php 
                // if (comments_open() || get_comments_number() ) {
                //     comments_template();
                // }
                ?>
            <?php } // end while?>
          <?php } else {?>

              <div class="col">
                <?php get_template_part('template-parts/post/content','none'); ?>
              </div>
          <?php }  // end if else ?>
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
<?php //get_template_part( 'loop', 'page' ); ?>
<?php  //get_sidebar(); ?>