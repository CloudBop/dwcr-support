<?php
function cgr_awpt_pagination() {

  $allowed_tags = [ 
    'a' => [ 
      'class'=>[],
      'href'=>[]
    ], 
    'span' => [ 
      'class'=>[]
    ]
  ];
  
  // wrapper tag
  $args = [
    'before_page_number' => '<span class="btn border btn-pnhorg border-secondary mr-2 mb-2">',
    'after_page_number' => '</span>'
  ];
  
  printf( 
    '<nav class="cgr-awpt-pagination clearfix">%s</nav>', 
    wp_kses( paginate_links($args), $allowed_tags )  
  );
}
// add extra text to screen reads - Google Lighthouse approves
function pnhuk_readmore_link() {

  echo '<a class="blog-post__readmore btn btn-pnhorg mx-auto" href=" '.get_the_permalink().' " title="'. the_title_attribute([ 'echo'=>false ]).'">';
  printf(
    // interpolate string and escape html
    wp_kses(
      // %s === get_the_title
      __ ('Read more <span class="u-screen-reader-text sr-only">About %s </span> ', '_themename'),
      // , with exception to this element
      [
        'span' => [
          // and this attribute
          'class' => []
        ]
      ]

    ),
    get_the_title()
  );
  echo '</a>';
}

// invoked in The Loop.
function pnhuk_get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = []){

  $custom_thumbnail = '';

  if( null === $post_id ) {
    $post_id = get_the_ID();
  }

  if ( has_post_thumbnail($post_id)) {
    // new browser functions for lazy loading - is default in wp-5.5
    $default_attributes = [
      'loading'=> 'lazy'
    ];
    $attributes = array_merge( $additional_attributes, $default_attributes );

    $custom_thumbnail = wp_get_attachment_image(
      get_post_thumbnail_id($post_id), 
      $size, 
      $icon=false, 
      $attr=$attributes
    );
  }

  return $custom_thumbnail;
}

//
function pnhuk_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = []){
  //
  echo pnhuk_get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}


function pnhuk_posted_on() {
  // using <time> better for screen readers
  $time_string = '<time class="entry-date published updated" datetime="%1$s"> %2$s </time>';

  // post is modified ( when post published time !== to post modified time )
  if ( get_the_time($d='U') !== get_the_modified_time($d='U' ) ) {
    $time_string = '<time class="entry-date published" datetime="%1$s"> %2$s </time>';
    // for better SEO
    $time_string .= '<time class="updated" datetime="%3$s"> %4$s </time>';
  }

  $time_string = sprintf( $time_string,
    // see time formats
    esc_attr( get_the_date( DATE_W3C ) ),
    esc_attr( get_the_date() ),
    esc_attr( get_the_modified_date( DATE_W3C ) ),
    esc_attr( get_the_modified_date() ),
  );

  $posted_on = sprintf(
    // $ctx = ctx info for translators

    //FIXME: $s doesn't work as interpolator.

    esc_html_x( 'Posted on %s', $ctx='post date', 'pnhuk-theme' ),
    '<a href="'. esc_url( get_permalink() ) .'" rel="bookmark">'. $time_string .'</a>'
  );

  echo '<span class="posted-one text-secondary">'. $posted_on .'</span>';
}

function pnhuk_posted_by() {
  $byline = sprintf(
    // translate escape+user ctx
    esc_html_x( 'by %s', 'post author', 'pnhuk-theme'),
    '<span class="author vcard"> 
      <a href="'. esc_url( get_author_posts_url($author_id = get_the_author_meta('ID') ) ) .'">'. esc_html( get_the_author() ) .'</a>
    </span>'
  );

  echo '<span class="byline text-secondary">' . $byline . '</span>';
}

function pnhuk_the_excerpt( $trim_charachter_count=0 ) {
  
  // if excerpt is set
  if ( ! has_excerpt() || 0 === $trim_charachter_count ) {
    // echos 
    the_excerpt();
    return;
  }
  // else use custom excerpt
  $excerpt = wp_strip_all_tags($string = get_the_excerpt(), $remove_breaks=null);
  $excerpt = substr( $excerpt, 0, $trim_charachter_count);
  // truncate @ space before last word - filter out final word in case it's incomplete
  $excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ));
  //  
  echo $excerpt . '[...]';
}


function pnhuk_excerpt_more() {
  // - don't need on single
  if ( ! is_single() ) {

    $more = sprintf(
      '<a class="cgr-awpt-read-more text-white" href="%1$s">
        <button class="mt-4 btn btn-pnhorg">
          %2$s
       </button>
       </a>',
      get_permalink( get_the_ID() ),
      __( 'Read more', 'pnhuk-theme')
    );

  }

  return $more ."    testing";
}

// allow function to overridden by child
if( ! function_exists('_themename_post_meta') ){
  function _themename_post_meta(){
    printf(
      // %s is data
      esc_html__($text='Posted on %s', $domain = '_themename'),
      // ISO 8601 - for best browser meta
      // '<a href="' . esc_url(get_permalink()). '">'.
      '<time datetime="' . esc_attr(get_the_date('c')) .'">' . esc_html(get_the_date()) . "</time>" //</a>"
    );
    // printf(
    //   // %s is author
    //   esc_html__(' By %s ', '_themename'),
    //   '<a href="'. esc_url( get_author_posts_url($authorID=get_the_author_meta("ID") )) .'">'. esc_html( get_the_author()) .'</a>'
    // );
    
  }
}

/**
 * Plugin Name: Tango Breadcrumb
 * Plugin URI: http://weibenfalk.com
 * Description: Creates a breadcrumb trail for the Tango Brand Alliance website
 * Version: 1.0
 * Author: Thomas Weibenfalk
 * Author URI: http://weibenfalk.com
 */

//  styles should be embedded in theme
// function wbn_brdcrmb_register_stylesheet(){
// 	wp_register_style( 'wbn_brdcrmb_stylesheet', plugins_url( '/styles/style.css', __FILE__ ) );
// 	wp_enqueue_style( 'wbn_brdcrmb_stylesheet' );
// }

// // Load the styles
// add_action( 'wp_enqueue_scripts', 'wbn_brdcrmb_register_stylesheet' );

function pnhuk_breadcrumb(){ 
	
				global $post;
	
				$divider = "/";
				
				$blogurl = get_bloginfo('url');
				$blogname = get_bloginfo('name');				
				$output = '<span class="tango-brdcrmb-blogname"><a href="' . $blogurl . '">' . $blogname . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>'; ?>
				
				<div class="tango-brdcrmb">
				
				<?php
						
						if (is_page()):
						
						// Check if the page has any parent page and add that to the breadcrumb trail
						if ($post->post_parent):
							$parent_title = get_the_title( $post->post_parent );
							$parent_url = get_permalink( $post->post_parent);
						
							$output .= '<span class="tango-brdcrmb-parent"><a href="' . $parent_url . '">' . $parent_title . '</a></span><span class="tango-brdcrmb-divider">' . $divider .'</span>'; 
						endif;
						
						$pagename = get_the_title();
						$output .= '<span class="tango-brdcrmb-currentpage">' . $pagename . '</span>';		
						echo $output;
				
					
					  elseif (is_category()): 
						
						// Get the category Base for building the Category Archive Link
						  
						$category_base = ucfirst(get_option( 'category_base' )); // ucfirst make the first letter Capital
						$category_title = single_cat_title( '', false );
					
						$output .= '<span class="tango-brdcrmb-catbase"><a href="' . $blogurl . '/trendspaningar/alla-trendspaningar/">' . $category_base . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>';
					
						echo $output;
					
					  elseif (is_single()):
	
						// Get the category Base for building the Category Archive Link
						  
						$category_base = ucfirst(get_option( 'category_base' )); // ucfirst make the first letter Capital
						$category_post_title = get_the_title();
					
						$output .= '<span class="tango-brdcrmb-catbase"><a href="' . $blogurl . '/trendspaningar/alla-trendspaningar/">' . $category_base . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>';
					
						echo $output;
	
					  endif;
				?> 
					
				</div>

<?php } ?>


<?php 

function the_featured_img_srcset(){
  $img_id = get_post_thumbnail_id();
  $size = 'large';
  $img_src = wp_get_attachment_image_url( $img_id, $size );
  $img_srcset = wp_get_attachment_image_srcset( $img_id, $size );
  $title = get_post($img_id)->post_title;
  $alt = isset(get_post_meta($img_id, '_wp_attachment_image_alt')[0]) ? get_post_meta($img_id, '_wp_attachment_image_alt')[0] : $title;
  $caption = wp_get_attachment_caption($img_id);
?>
<figure class="imge-wrapper">
    <img src="<?php echo esc_url( $img_src ); ?>"
    srcset="<?php echo esc_attr( $img_srcset ); ?>"
    sizes="
    (max-width: 768px) 800px,
    (max-width: 1200px) 1400px,
    (max-width: 2000px) 2000px"
    alt="<?php echo $alt; ?>"
    class="img"
    loading="lazy">
</figure>
<?php
};
// notes https://unicorntears.dev/posts/wp-srcset/
/*
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)
Handy tip: WordPress also generates a 'medium_large' thumbnail even though it is not explicitly shown in the visual interface. By default it is tablet size(768px wide) and I've actually found it super handy in many cases. For more in depth info, I suggest reading up on the codex. 
https://codex.wordpress.org/Post_Thumbnails#Thumbnail_Sizes
*/?>

