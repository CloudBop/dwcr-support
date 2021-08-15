<section>
  <div class="container">
    <header class="text-center entry-content p-3 my-3">
      <h2>Recent News</h2>
      </header>
    <div class="contact-wrapper text-center">
      
<?php

// WP_Query arguments
$args = array(
    'posts_per_page'    => 3,
    'post_type'     => 'post',  //choose post type here
    'order' => 'DESC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>
<article class="my-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="card d-block">

    <header class="news-item-header d-flex align-content-center">
      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h-entry__image-link flex-shrink-0 my-auto">
            <div class="">
              <?php the_post_thumbnail(array(100,100)); // Declare pixel size you need inside the array ?>
            </div>    
          </a>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <div class="p-1 ml-3 text-left">
        <!-- post title -->
        <h4 class="p-name">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h4>
        <!-- /post title -->     
        <!-- post details -->
        <time datetime="<?php the_time('Y-m-j'); ?>" class="dt-published"><?php the_time('jS F Y'); ?></time>
        <!-- /post details -->
      </div> 
    </header>

    <div class="">


      <?php // html5wp_summary('html5wp_index'); // Build your custom callback length in functions.php
        // the_excerpt();
       ?>

      <!-- <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="arrow-link">Read the full article</a></p> -->

      <?php edit_post_link(); ?>
    </div>
  </div>
</article>
<!-- /article -->
<?php
    }
} else {
    // no posts found
}
// Restore original Post Data
wp_reset_postdata();?>
    </div>
  </div>
</section>
