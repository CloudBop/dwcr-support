<?php get_header(); 
// render Page, ie NOT post 
?>

<div>
    
        <main class="main-content">
          <?php get_template_part('template-parts/components/page/entry-header'); ?>
          <?php get_template_part( 'wp-loop/loop', 'page' ); ?>
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