<?php get_header(); ?>

<div class="container content">
		<div class="main block">
       <header class="feed-heading">
          <h1>
            <?php printf( __( 'Search: %s', 'dwcr-support' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
          </h1>
      </header>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				
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



				<?php endwhile; ?>
			<?php else : ?>
				<?php echo apautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>

		<div class="side">
			<?php if(is_active_sidebar('page-sidebar')) : ?>
				<?php dynamic_sidebar('page-sidebar'); ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>