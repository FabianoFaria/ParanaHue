<?php
/**
 * store functions and definitions
 *
 * @package ParanaHue
 */


// Get BootStrap Walker....
require_once('bootstrap_walker.php');            // core functions (don't remove)


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;



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

// this is the fallback for header menu
function wp_bootstrap_main_nav_fallback() { 
	// Figure out how to make this output bootstrap-friendly html
	//wp_page_menu( 'show_home=Home&menu_class=nav' ); 
}

//Função copiada de outro projeto, com o objetivo de fazer com que o menu canvas funcione

function wp_bootstrap_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu( 
    	array( 
    		'menu' => 'main_nav', /* menu name */
    		'menu_class' => 'nav navbar-nav',
    		'theme_location' => 'main_nav', /* where in the theme it's assigned */
    		'container' => 'false', /* container class */
    		'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
    		// 'depth' => '2',  suppress lower levels for now 
    		'walker' => new Bootstrap_walker()
    	)
    );
}


function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );



?>