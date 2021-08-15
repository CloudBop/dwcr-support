<header>
    <?php if (is_single()) { ?>
        <h1> <?php the_title() ?> </h1>
    <?php } else { ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?>
            </a>
        </h2>
    <?php } ?>
    <div>
        <?php _themename_post_meta(); ?>
    </div>
</header>