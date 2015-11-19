<?php
/**
 * Twenty Fourteen Child Theme (Right Futures) functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );


show_admin_bar( false );

//Conditional Declaration
//if ( ! function_exists( 'theme_special_nav' ) ) {
    //function theme_special_nav() {
        //  Do something.
    //}
//}

//WP Jobs Board Override
function override_wbjobboard_style() {
 wp_enqueue_style( 'wpjobboard_override', get_stylesheet_directory_uri() . '/wpboard-overrides.css', array('wpjb-css') );
}
add_action( 'wp_enqueue_scripts', 'override_wbjobboard_style' );



// Add Excerpts fields
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Add New Footer Menu //
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );


//Add New Widget Area //

register_sidebar(array(
	'name'=> 'Recent Posts',
	'id' => 'recent-posts',
	'description' => __( 'Recent Posts', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Twitter',
	'id' => 'twitter',
	'description' => __( 'Right Futures Twitter Feed', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Clients Image',
	'id' => 'clients',
	'description' => __( 'Clients Image', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Candidates Image',
	'id' => 'candidates',
	'description' => __( 'Candidates Image', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Vacancies Image',
	'id' => 'vacancies',
	'description' => __( 'Vacancies Image', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Our Methodology Image',
	'id' => 'method',
	'description' => __( 'Our Methodology Image', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Footer Logo',
	'id' => 'footer_logo',
	'description' => __( 'Footer Logo', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Connected',
	'id' => 'connected',
	'description' => __( 'Connected', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Client Services',
	'id' => 'client_services',
	'description' => __( 'Client Services', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Candidate Services',
	'id' => 'candidate_services',
	'description' => __( 'Candidate Services', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'LinkedIn',
	'id' => 'linkedin',
	'description' => __( 'Right Futures LinkedIn Feed', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Search',
	'id' => 'Search',
	'description' => __( 'Right Futures Search Feed', 'text_domain' ),
));

register_sidebar(array(
	'name'=> 'Google Maps',
	'id' => 'google_maps',
	'description' => __( 'Right Futures Maps', 'text_domain' ),
));
