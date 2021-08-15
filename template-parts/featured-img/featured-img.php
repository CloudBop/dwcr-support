<?php 
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

<?php // notes https://unicorntears.dev/posts/wp-srcset/
/*
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)
Handy tip: WordPress also generates a 'medium_large' thumbnail even though it is not explicitly shown in the visual interface. By default it is tablet size(768px wide) and I've actually found it super handy in many cases. For more in depth info, I suggest reading up on the codex. 
https://codex.wordpress.org/Post_Thumbnails#Thumbnail_Sizes
?>