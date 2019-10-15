<?php

/* 

    // Package Massivly
    =======================
        ACF FUNCTIONS
    =======================

*/

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

/* ====== Google map ====== */ 

// function my_acf_init() {
	
// 	acf_update_setting('google_api_key', 'AIzaSyAUh7AntTFg-Og0Fgkv52EgugnGjA05c-k');
// }

// add_action('acf/init', 'my_acf_init');