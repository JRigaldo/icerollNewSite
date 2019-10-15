<?php

/* 

    // Package Massivly
    =======================
        SCRIPT ENGUEUE
    =======================

*/

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
    wp_enqueue_script('my_loadMore', get_stylesheet_directory_uri() . '/scripts/loadMore.js', array('jquery'), 1.0, false);
    // wp_enqueue_script('frontwp', get_template_directory_uri() . '/scripts/frontwp.js', NULL , 1.0, true);


    wp_localize_script('frontwp', 'magicalData', array(
        'nonce' => wp_create_nonce('wp_rest'),
        'siteURL' => get_site_url()
    ));
}

add_action('wp_footer', 'add_this_script_footer');