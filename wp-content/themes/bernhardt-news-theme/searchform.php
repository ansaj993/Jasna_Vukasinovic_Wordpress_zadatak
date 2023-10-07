<div class="search-form-block">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" value="<?php echo get_search_query() ?>" name="s">
        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form> 
</div>