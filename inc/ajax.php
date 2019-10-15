<?php

/* 

    // Package Massivly
    =======================
        AJAX FUNCTIONS
    =======================

*/

add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_load_more_posts', 'load_more_posts');

function load_more_posts(){
    $paged = $_POST["paged"]+1;
    // echo $paged;

    $query = new WP_Query(array(
        'post_type' => 'post',
        'paged' => $paged
    ));

    if($query->have_posts()) :
        while($query->have_posts()) : $query->the_post();
            get_template_part('content', get_post_format());
        endwhile;

    endif;
    wp_reset_postdata();
    die();
}

?>