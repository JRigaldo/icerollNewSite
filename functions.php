<?php

function resources(){
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('scrollex', get_stylesheet_directory_uri() . '/scripts/jquery.scrollex.min.js', array('jquery'));
    wp_enqueue_script('scrolly', get_stylesheet_directory_uri() . '/scripts/jquery.scrolly.min.js', array('jquery'));
    wp_enqueue_script('browser', get_stylesheet_directory_uri() . '/scripts/browser.min.js', array('jquery'));
    wp_enqueue_script('breakpoints', get_stylesheet_directory_uri() . '/scripts/breakpoints.min.js', array('jquery'));
    wp_enqueue_script('util', get_stylesheet_directory_uri() . '/scripts/util.js', array('jquery'));

}
add_action('wp_enqueue_scripts', 'resources');

function add_this_script_footer(){
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'));
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










?>