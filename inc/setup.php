<?php

/* 

    // Package Massivly
    =======================
        SETUP THEME
    =======================

*/

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

    //Add comments
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'wp_setup');

function custom_excerpt(){
    return 15;
}
add_filter('excerpt_length', 'custom_excerpt');

function myWidgetsInit(){
    register_sidebar(array(
        'name' => 'form',
        'id' => 'footerform'
    ));
}

add_action('widgets_init', 'myWidgetsInit');


/* ======= in homepage show 4 posts ======= */ 

// function homepage_limits( $limits )
// {
//      if(!is_home()) {
//         return  'LIMIT 0, 8';;
//      }
//  return $limits;
// }

// add_filter('post_limits', 'homepage_limits' );




/* ======= Title lenght ======= */

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