<?php get_header(); ?>

<div class="container content">
  <header class="">
     <h1>
       <?php printf( __( 'Search: %s', 'dwcr-support' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
     </h1>
 </header>
  <div class="row">
  <div class="col-sm-8">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <article class="card my-2 p-1">
        <?php if(get_the_post_thumbnail() !== '') { ?>
            <div class="img-fluid">
              <?php 
              // TODO - configure thumbnails for correct sizing
              the_post_thumbnail( 'pnhuk-theme-blog-image' ); ?>
            </div>
            <?php } ?>
            
            <?php get_template_part('template-parts/post/header') ?>  
            <?php the_excerpt(); ?>
            <?php pnhuk_readmore_link(); ?>
          </article>
          <?php endwhile; ?>
        <?php echo paginate_links();?>
      <?php else : ?>
        <?php echo apautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
      </div>
      
      
      <aside class="col-sm-4 pr-0 page-sidebar">
        <?php if(is_active_sidebar('page-sidebar')) : ?>
          <?php dynamic_sidebar('page-sidebar'); ?>
          <?php endif; ?>
        </aside>
      </div>
      
    </div>
<?php get_footer(); ?>