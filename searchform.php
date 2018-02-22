<?php
/**
 *	The template for displaying the search form in sidebar.
 *
 *	@package WordPress
 *	@subpackage illdy
 */

$txt_id_search = "Szukaj...";
$txt_id_search_for = "Szukaj";

?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="search-form-box">
    	<input type="submit" id="searchsubmit" value="" />
        <input type="search" id="s" 
        	placeholder="<?php echo esc_attr_x( $txt_id_search, 'placeholder', 'illdy' ); ?>" 
        	value="<?php echo esc_attr(get_search_query()); ?>" name="s" 
        	title="<?php echo esc_attr_x( $txt_id_search_for, 'label', 'illdy' ); ?>" 
        />
    </div><!--/.search-form-box-->
</form><!--/.search-form-->