<article class="entry-content col" <?php post_class(); ?>>
    
    
        <?php 
            // Gutenberg block content
            the_content() 
        ?>
    
</article> 




<?php
/*

featured image

<div class="entry-image mb3">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
    <?php // custom template tag function 
    //    _themename_the_post_custom_thumbnail(
    //        get_the_ID(),
    //        $size = "featured-thumbnail",
    //        [
    //        'sizes' => '(max-width: 350px) 350px, 233px',
    //        'class' => 'attachment-featured-thumbnail size-featured-image'
    //        ]
    // ) ?>
    </a>
</div>
*/

?>