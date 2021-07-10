<article <?php echo post_class();?> >

    <?php if(get_the_post_thumbnail() !== '') { ?>
        <div class="">
            <?php 
            // TODO - configure thumbnails for correct sizing
            the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
        </div>
    <?php } ?>

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

    <?php
        echo ":  ".is_page();
        echo ":   ".is_single();
    ?>

</article>