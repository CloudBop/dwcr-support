<?
/**
 * generic loop template 
 * where name overrides loop eg loop-name
 * - using get_template_part('loop', 'name')
 */
?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <?php get_template_part('template-parts/blog-list/blog', 'content'); ?>
    <?php } ?>
    <?php the_posts_pagination( ); ?>
    <?php //not in use - do_action('_themename_after_pagination') ?>
<?php } else { ?>
    <?php get_template_part('template-parts/post/content','none'); ?>
<?php } ?>