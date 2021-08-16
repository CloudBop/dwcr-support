<?php /**
 * use for single.php
 */
?>
<article <?php echo post_class('bg-white mb-3');?> >

    <?php if(get_the_post_thumbnail() !== '') { ?>
            <?php 
            the_featured_img_srcset();
            // TODO - configure thumbnails for correct sizing
            // the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>       
    <?php } ?>

    <div class="p-1">

        <?php get_template_part('template-parts/post/header') ?>
    
        <?php if(is_single()) { ?>
            <?php 
                the_content(); 
                wp_link_pages();
            ?>
        <?php } else { ?>
            <?php the_excerpt(); ?>
        <?php } ?>

        <?php if(is_single( )) { ?>
            <?php  get_template_part('template-parts/post/footer') ?>
        <?php } ?>

        <?php  if(!is_single()) { pnhuk_readmore_link(); } ?>

    </div>

</article>