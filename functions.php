<?php

function resources(){
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('scrollex', get_template_directory_uri() . '/scripts/jquery.scrollex.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('scrolly', get_template_directory_uri() . '/scripts/jquery.scrolly.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('browser', get_template_directory_uri() . '/scripts/browser.min.js', array('jquery'), 1.0, false);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/scripts/breakpoints.min.js', array('jquery'), 1.0, false);
    wp_enqueue_script('util', get_template_directory_uri() . '/scripts/util.js', array('jquery'), 1.0, false);
    
}
add_action('wp_enqueue_scripts', 'resources');




function add_this_script_footer(){
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'), 1.0, false);
    // wp_enqueue_script('frontwp', get_template_directory_uri() . '/scripts/frontwp.js', NULL , 1.0, true);


    wp_localize_script('frontwp', 'magicalData', array(
        'nonce' => wp_create_nonce('wp_rest'),
        'siteURL' => get_site_url()
    ));
}

add_action('wp_footer', 'add_this_script_footer');

function wp_setup(){
     // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

    //Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 508, 310, true); 
    add_image_size('banner-image', 1008, 491, true);

    //Add post format
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme', 'wp_setup');

function custom_excerpt(){
    return 15;
}
add_filter('excerpt_length', 'custom_excerpt');

// function short_title( $title ) {
//     $newTitle = substr( $title, 0, 25 ); // Only take the first 20 characters

//     return $newTitle . "[&hellip;]"; // Append the elipsis to the text (...) 
// }
// add_filter( 'the_title', 'short_title', 10, 1 );

// function max_title_length( $title ) {
//     $max = 20;
//     if( strlen( $title ) > $max ) {
//     return substr( $title, 0, $max ). "[&hellip;]";
//     } else {
//     return $title;
//     }
// }

// add_filter( 'the_title', 'max_title_length');

function myWidgetsInit(){
    register_sidebar(array(
        'name' => 'form',
        'id' => 'footerform'
    ));
}

add_action('widgets_init', 'myWidgetsInit');


// in homepage show 4 posts

function homepage_limits( $limits )
{
     if(!is_home()) {
        return  'LIMIT 0, 8';;
     }
 return $limits;
}

add_filter('post_limits', 'homepage_limits' );



// Get image through WP JSON API
add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}

// options ACF
if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
}

// Google map
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAUh7AntTFg-Og0Fgkv52EgugnGjA05c-k');
}

add_action('acf/init', 'my_acf_init');

// Script pour google map
wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAUh7AntTFg-Og0Fgkv52EgugnGjA05c-k', array(), '3', true );
wp_enqueue_script( 'google', get_template_directory_uri() . '/scripts/google.js', array('google-map', 'jquery'), '0.1', true );










?>