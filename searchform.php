<div class="container p-2">
  <form role="search" method="get" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
      <span class="sr-text">
      	<?php _x('Search for:', 'label', 'dwcr-support'); ?>
      </span>
      <input 
	      name="s" 
	      type="text" 
	      class="form-control" 
	      name="s" 
	      placeholder="<?php echo esc_attr_x('Search', $context='placeholder', $domain="dwcr-support");?>" value="<?php the_search_query(); ?>">
      <span class="input-group-btn">
        <button type="submit" value="Search" class="btn btn-danger" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
      </span>
    </div>
    </form>
</div>