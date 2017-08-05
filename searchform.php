<?php
/**
 * Template for displaying search forms in Beach Basic
 *<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
 	*<label>
 	*	<span class="screen-reader-text">Search for:</span>
 	*	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
 	*</label>
 *	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
* </form>

 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
    <span class="input-group-label"><i class="fi-magnifying-glass"></i></span>
    <input class="input-group-field search-field" type="search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
    <div class="input-group-button">
      <input type="submit" class="button" value="Submit">
    </div>
  </div>
</form>
