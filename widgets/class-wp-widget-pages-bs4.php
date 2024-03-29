<?php
/**
 * Widget API: WP_Widget_Pages class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

/**
 * Core class used to implement a Pages widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Pages_BS4 extends WP_Widget {

	/**
	 * Sets up a new Pages widget instance.
	 *
	 * @since 2.8.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_pages card',
			'description'                 => __( 'A list of the current page hierarchy, if no hierarchy the list will not be rendered' ),
			'customize_selective_refresh' => true,
			'show_instance_in_rest'       => true,
			// don't seem to be passed to widget
			// 'before_title'								=> '<div class="card">',
			// 'after_title'									=> '</div>'
		);
		parent::__construct( 'bs4-pages', __( 'BS4 Pages' ), $widget_ops );
	}

	/**
	 * Outputs the content for the current Pages widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Pages widget instance.
	 */
	public function widget( $args, $instance ) {
		
		$default_title = __( 'Page Heirarchy' );
		$title         = ! empty( $instance['title'] ) ? $instance['title'] : $default_title;

		/**
		 * Filters the widget title.
		 *
		 * @since 2.6.0
		 *
		 * @param string $title    The widget title. Default 'Pages'.
		 * @param array  $instance Array of settings for the current widget.
		 * @param mixed  $id_base  The widget ID.
		 */
		// $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$currentPage = get_post();
		$pagesToArchive=[];

		if( $currentPage->post_parent===0){
			// this page has no parent -> does page have children?
			$pagesToArchive = get_pages( array( 'child_of' => $currentPage->ID, 'sort_order' => 'asc', 'sort_column'=>'menu_order' ) );
			$title = "<strong>".$currentPage->post_title."</strong>";
		} else {
			// get array of ancestor ids
			$ancestors=get_post_ancestors($currentPage->ID);
			// var_dump($ancestors);
			// echo count($ancestors);
			$root=count($ancestors);
			// get_the_title();
			// get_the_title();
			// the root id
			$grandParent = get_post($ancestors[$root-1]);
			// current page is an ancestor of something, don't worry about grandchild pages for the moment. 
			$title = "<strong> <a href=".get_permalink($ancestors[$root-1]).">".  get_the_title($ancestors[$root-1]) ."</a>  </strong>";
			$pagesToArchive = get_pages( array( 'child_of' => $ancestors[$root-1], 'sort_order' => 'asc', 'sort_column'=>'menu_order' ) );
		}
		$args['before_title'] = "<div class='card-header'>";
		$args['after_title'] = "</div>";
		// there is a heirachal connection with this page
		if(count($pagesToArchive)>0) {
			echo $args['before_widget'];
			if ( true) {
				echo $args['before_title'] . $title . $args['after_title'];
			} else {
				// echo $args['before_title'] . $title . $args['after_title'];
			} ?>
				
				<ul class="list-group list-group-flush mx-1">
        <?php
        //
        foreach ($pagesToArchive as $page) {
          echo '<li class="list-group-item" >';
          if($page->post_title==$currentPage->post_title  ) :
              echo "<strong>". strip_tags($currentPage->post_title)."</strong>";
            else :
              $pageTitle = $page->post_title;
              $link = get_page_link($page);
              echo "<a href=".$link."> ".$pageTitle."</a>";
          endif; 
          echo '</li>';
        } ?>
      </ul>

			<?php
				// if ( 'html5' === $format ) {
				// 	echo '</nav>';
				// }

				echo $args['after_widget'];
			


		// if( $currentPost->post_parent===0){
		// 	echo 'top-level';
		// 	echo "<br>";
		// 	$hasChildren = get_pages(array(
		// 		'child_of'=>$currentPost->ID,
		// 		'sort_order' => 'asc', 'sort_column'=>'menu_order'
		// 	)); // could try get_children(), but rcurrently retusn other child objs eg events
			
		// 	// bailout here
		// 	if(count($hasChildren)===0){
		// 		echo 'no children';
		// 		// the page is not a child or a parent
		// 		return false;
		// 	}
		// }
		// // this page is a child, and part of a heirachy. 
		// else {
		// 	echo "not top level";
		// 	echo "<br>";
		// 	$ancestors=get_post_ancestors($post->ID);
		// 	echo count($ancestors);
		// 	echo "<br>";
		// 	print_r($ancestors);

		// }
		
		// $output = wp_list_pages(
		// 	/**
		// 	 * Filters the arguments for the Pages widget.
		// 	 *
		// 	 * @since 2.8.0
		// 	 * @since 4.9.0 Added the `$instance` parameter.
		// 	 *
		// 	 * @see wp_list_pages()
		// 	 *
		// 	 * @param array $args     An array of arguments to retrieve the pages list.
		// 	 * @param array $instance Array of settings for the current widget.
		// 	 */
		// 	apply_filters(
		// 		'widget_pages_args',
		// 		array(
		// 			'title_li'    => '',
		// 			'echo'        => 0,
		// 			'depth'				=> 3,
		// 			'sort_column' => $sortby,
		// 			'exclude'     => $exclude,
		// 		),
		// 		$instance
		// 	)
		// );

		

			// remnants from original
			// $format = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml';
			/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */
			// $format = apply_filters( 'navigation_widgets_format', $format );
			// if ( 'html5' === $format ) {
			// 	// The title may be filtered: Strip out HTML and make sure the aria-label is never empty.
			// 	$title      = trim( strip_tags( $title ) );
			// 	$aria_label = $title ? $title : $default_title;
			// 	echo '<nav role="navigation" aria-label="' . esc_attr( $aria_label ) . '">';
			// }
		} else {
			// there should be no output
			// echo 'there should be not output';
		}
	}

	/**
	 * Handles updating settings for the current Pages widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		if ( in_array( $new_instance['sortby'], array( 'post_title', 'menu_order', 'ID' ), true ) ) {
			$instance['sortby'] = $new_instance['sortby'];
		} else {
			$instance['sortby'] = 'menu_order';
		}

		$instance['exclude'] = sanitize_text_field( $new_instance['exclude'] );

		return $instance;
	}

	/**
	 * Outputs the settings form for the Pages widget.
	 *
	 * @since 2.8.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		// Defaults.
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'sortby'  => 'post_title',
				'title'   => '',
				'exclude' => '',
			)
		);
		?>
		<p>
			A list of the current page hierarchy, if no hierarchy the list will not be rendered
		</p>

		<!-- **** -->
		<?php
	}

}


/**
 * <p>
 * <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			<label for="<?php echo esc_attr( $this->get_field_id( 'sortby' ) ); ?>"><?php _e( 'Sort by:' ); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'sortby' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'sortby' ) ); ?>" class="widefat">
				<option value="post_title"<?php selected( $instance['sortby'], 'post_title' ); ?>><?php _e( 'Page title' ); ?></option>
				<option value="menu_order"<?php selected( $instance['sortby'], 'menu_order' ); ?>><?php _e( 'Page order' ); ?></option>
				<option value="ID"<?php selected( $instance['sortby'], 'ID' ); ?>><?php _e( 'Page ID' ); ?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>"><?php _e( 'Exclude:' ); ?></label>
			<input type="text" value="<?php echo esc_attr( $instance['exclude'] ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'exclude' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>" class="widefat" />
			<br />
			<small><?php _e( 'Page IDs, separated by commas.' ); ?></small>
		</p>
 */