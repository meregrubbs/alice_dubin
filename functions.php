<?php

// STYLESHEETS
function load_stylesheets() {
    // Montserrat Font
    wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap', array(), 1, 'all');
    wp_enqueue_style('font');

    // Bootstrap
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    // Stylesheet
    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', "load_stylesheets");

// SCRIPTS
function addjs() {
    // jquery
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', '', 1, 1, 1);
    wp_enqueue_script('jquery');

    // popper
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', '', 1, 1, 1);
    wp_enqueue_script('popper');

    // bootstrap
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', '', 1, 1, 1);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'addjs');

// MENU
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'alicedubin'),
        'bottom-menu' => __('Bottom Menu', 'alicedubin'),
    )
    );

// BOOTSTRAP NAVWALKER
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// ACF REMOVE P TAGS FROM WYSIWYG
function my_acf_add_local_field_groups() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');
?>