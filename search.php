<?php get_header(); ?>

  <div class="container content mt-3">
    <div class="row">
      <div class="col-md-8 p-sm-0 pr-md-2">
      <header class="card p-3">
        <h1>
          <?php printf( __( 'Search: %s', 'dwcr-support' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
        </h1>
      </header>
    
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <article class="card my-2">
        <?php if(get_the_post_thumbnail() !== '') { ?>
            <div class="img-fluid">
              <?php 
              // TODO - configure thumbnails for correct sizing
              the_featured_img_srcset(); ?>
            </div>
            <?php } ?>
                    
            <header class="p-2">
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
                <?php the_excerpt(); ?>
                <?php pnhuk_readmore_link(); ?>
            </header>

        </article>
        
        <?php endwhile; ?>

        <?php echo paginate_links();?>
 
      <?php else : ?>
      <?php echo apautop('Sorry, no posts were found'); ?>
      <?php endif; ?>
    </div>
      
      
    <aside class="col-md-4 pr-sm-0">
      <?php if(is_active_sidebar('news-posts-sidebar')) : ?>
        <?php dynamic_sidebar('news-posts-sidebar'); ?>
        <?php endif; ?>
    </aside>
    
  </div>
</div>
<?php get_footer(); ?>