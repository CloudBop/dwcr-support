<?php get_header(); 
// render single-post, ie NOT page template 
?>

<div class="container danger">
    <div class="row">
        <main class="col-sm-8 main-content">
            <?php get_template_part( 'wp-loop/loop', 'single' ); ?>
        </main>
        <aside class="col-sm-4 sidebar-content danger">
            <?php dynamic_sidebar('sidebar-1'); ?>
            This is where the sidebar goes, no registered sidebars as of yet.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci veritatis cupiditate cumque ad quidem placeat! A doloribus nobis nostrum fugit quidem aliquam error assumenda, harum dolore totam necessitatibus placeat? Officiis?
        </aside>
    </div>
</div>
<?php get_footer(); ?> 
<?php //get_template_part( 'loop', 'page' ); ?>
<?php  //get_sidebar(); ?>