<?php get_header(); 
// render Page, ie NOT post 
?>
<main class="main-content">
  <?php get_template_part('template-parts/page/entry-header'); ?>
  <div class="container">
    <div class="row">
      <?php if(have_posts()) { ?>
        <?php while(have_posts()) { ?>
          <?php 
          // https://developer.wordpress.org/reference/functions/the_post/ 
        the_post(); ?>
            <div class="col-sm-8">
              <?php pnhuk_breadcrumb(); ?>
              
              <?php //get_template_part('template-parts/components/page/entry-header'); ?>
              <?php get_template_part('template-parts/page/entry-content'); ?>
              <?php get_template_part('template-parts/page/entry-footer'); ?>
              <small>page-template</small>
            </div>

            <div class="col-sm-4">


            <?php 
            // wp_list_pages(array(
            //   'child_of'=>$post->ID,
            //   'title_li'=>$post->post_title,
          
            // ));
             ?>
             <?php
              // if ( $post->post_parent ) {
              //   $title = get_the_title($post->post_parent);
              //     $children = wp_list_pages( array(
              //         'title_li' => '<span>'.$title.'</span>',
              //         'child_of' => $post->post_parent,
              //         'echo'     => 0
              //     ) );
              // } else {
                
              //     $children = wp_list_pages( array(
              //         'title_li' => the_title(),
              //         'child_of' => $post->ID,
              //         'echo'     => 0
              //     ) );
              // }
              // if ( $children ) : ?>
              <?php
              //     <ul>
              //         <?php echo $children; ?
              //     </ul>
              // ?php endif; ?>


              <?php
              if ( $post->post_parent ) {
                  $children = wp_list_pages( array(
                      'title_li' => '',
                      'child_of' => $post->post_parent,
                      'echo'     => 0
                  ) );
                  $title = get_the_title( $post->post_parent );
              } else {
                  $children = wp_list_pages( array(
                      'title_li' => '',
                      'child_of' => $post->ID,
                      'echo'     => 0
                  ) );
                  $title = get_the_title( $post->ID );
              }
              
              if ( $children ) : ?>
                  <h2><?php echo $title; ?></h2>
                  <ul>
                      <?php echo $children; ?>
                  </ul>
              <?php endif; ?>



              <?php dynamic_sidebar('sidebar-1'); ?>              
            <?php
            // Your functions.php content
             // https://gist.github.com/lukaszklis/1247306/2028bfc72b10be1a00e2e46db843ebd593879658
            function has_children() {
              global $post;
              
              $pages = get_pages('child_of=' . $post->ID);
              
              if (count($pages) > 0):
                return true;
              else:
                return false;
              endif;
            }

            function is_top_level() {
              global $post, $wpdb;
              
              $current_page = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = " . $post->ID);
              
              return $current_page;
            }


            // Somewhere in your template

            echo '<ul>';

              $base_args = array(
                'hierarchical' => 0
              );

              if (has_children()):
                $args = array(
                  'child_of' => $post->ID,
                  'parent' => $post->ID
                );
              else:
                if (is_top_level()):
                  $args = array(
                    'parent' => $post->post_parent
                  );
                else:
                  $args = array(
                    'parent' => 0
                  );
                endif;
              endif;
              
              $args = array_merge($base_args, $args);
              
              $pages = get_pages($args);
              
              foreach ($pages as $page):

                echo '<li><a href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';

              endforeach;

            echo '</ul>';
            
            ?>
            </div>
          <?php 
          // if (comments_open() || get_comments_number() ) {
          //     comments_template();
          // }
          ?>
      <?php } // end while?>
    <?php } else {?>
        <div class="col">
          <?php get_template_part('template-parts/post/content','none'); ?>
        </div>
    <?php }  // end if else ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 
