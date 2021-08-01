<?php
// add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"tag\" ", $t);'));
// function wp_list_pages_filter($output){
//   $output = str_replace('page_item', 'page_item list-group-item', $output);
//   return $output;
// }
// 
// add_filter( 'wp_list_pages', 'wp_list_pages_filter' );
function pnhuk_get_family_tree($current_post){
  // <?php echo get_ancestors($post);
  global $post;
  // the current page navigated too
  // $currentPage = $current_post;
  //Does the current post have a parent
  if ( $current_post->post_parent ) { 
    
    //does this parent post have a parent
    $isChildPage = get_post($current_post->post_parent);
    
    // this page is a grandchild page
    if($isChildPage->post_parent!==0){      
      $title = get_the_title($isChildPage->post_parent);
      $pages = get_pages( array( 'child_of' => $isChildPage->post_parent, 'sort_order' => 'desc', 'sort-column'=>'menu_order' ) );
    } else {
      // an imeediate child
      // echo "immediate child: ".$isChildPage->post_title;
      $title = $isChildPage->post_title;
      $pages = get_pages( array( 'child_of' => $isChildPage->ID, 'sort_order' => 'desc', 'sort-column'=>'menu_order' ) );
    }
  } else {
    // current page is top level ancestor
    $title = get_the_title($current_post->ID);
    $pages = get_pages( array( 'child_of' => $current_post->ID, 'sort_order' => 'desc', 'sort-column'=>'menu_order' ) );
  }

  if ( $title ) : ?>
    <!-- style="width: 18rem;" -->
    <div class="card" >
      <div class="card-header">
      <?php //  is this current page
        if($title==$current_post->post_title  ) :
            echo "<strong>".$title."</strong>";
          else : ?>
          <strong>
            <a href="'.<?php get_page_link($title) ?>.'" class="widget-header"> <?php echo $title; ?> </a> 
          </strong>
        <?php endif; ?>
      </div>
      
      <ul class="list-group list-group-flush mx-1">
        <?php
        //
        foreach ($pages as $page) {
          echo '<li class="list-group-item" >';
          if($page->post_title==$current_post->post_title  ) :
              echo "<strong>". strip_tags($current_post->post_title)."</strong>";
            else :
              $pageTitle = $page->post_title;
              $link = get_page_link($page);
              echo "<a href=".$link."> ".$pageTitle."</a>";
          endif; 
          echo '</li>';
        } ?>
      </ul>
    </div>
  <?php endif; 
}