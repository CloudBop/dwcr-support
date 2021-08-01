<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

<form class="form-inline" role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
    <label for="s" class="sr-only">Search</label>
    <div class="input-group">
        <input type="search" class="form-control" aria-label="Search" id="s" name="s" placeholder="Search..."<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </span>
    </div> <!-- .input-group -->
</form>