<?php get_header(); 
// render single-post, ie NOT page template 
?>

<div class="container mt-3">
    <div class="row">
        <main class="col-sm-8 main-content">
            <?php get_template_part( 'wp-loop/loop', 'single' ); ?>
        </main>
        <aside class="col-sm-4 sidebar-content">
            <?php dynamic_sidebar('news-posts-sidebar'); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?> 
<?php //get_template_part( 'loop', 'page' ); ?>
<?php  //get_sidebar(); ?>