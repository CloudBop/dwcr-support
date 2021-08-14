<article <?php echo post_class('card');?> >

    <?php if(get_the_post_thumbnail() !== '') { ?>
        <div class="">
            <?php 
            // TODO - configure thumbnails for correct sizing
            the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
        </div>
    <?php } ?>

    <div class="main-text-area">
        <?php get_template_part('template-parts/post/header') ?>
        <?php if(is_single()) { ?>
            <?php 
                the_content(); 
                
                // for multi-page post or pages
                wp_link_pages();
            ?>
        <?php } else { ?>
            <?php the_excerpt(); ?>
        <?php } ?>

        <?php if(is_single( )) { ?>
            <ul>
                <li class="previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></li>
                <li class="next"><?php next_post_link( '%link', '%title &rarr;' ); ?></li>
            </ul>
            <?php  get_template_part('template-parts/post/footer') ?>
        <?php } ?>

        <?php  if(!is_single()) { pnhuk_readmore_link(); } ?>

        <?php
            // echo ":  ".is_page();
            // echo ":   ".is_single();
        ?>
    </div>
</article>