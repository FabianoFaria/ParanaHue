<?php
/**
 * store functions and definitions
 *
 * @package ParanaHue
 */

function my_search_form( ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
		<div>
			<label class="screen-reader-text" for="s">' . __( '' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
		</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );



function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


?>