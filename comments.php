<?php

if(post_password_required()){
    return;
}

?>

<?php
    if(have_comments()): ?>

    <h3 class="comment-title">
        <?php 
            printf(
                esc_html( _nx('Un commentaire sur &ldquo;%2$s&rdquo;', '%1$s commentaires pour &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'Massive iceroll')),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            );
        ?>
    </h3>

    <ol class="comment-list">

    <?php 
    
    $args = array(
        'walker' => null,
        'max_depth' => '',
        'sytle' => 'ol',
        'callback' => null,
        'end-callback' => null,
        'type' => 'all',
        'reply_text' => 'Répondre',
        'page' => '',
        'per_page' => '',
        'avatar_size' => 45,
        'reverse_top_level' => null,
        'reverse_children' => '',
        'format' => 'html5',
        'short_ping' => false,
        'echo' => true

    ); 
    ?>

    <?php wp_list_comments($args);  ?>
    </ol>

    <!--?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?-->
        <!--?php esc_html_e('Comment navigation', 'Massivly iceroll'); ?-->
            <!--?php previous_comments_link( esc_html__('Older comments', 'Massive iceroll')); ?-->
            <!--?php next_comments_link( ecs_html__('Newer comments', 'Massive iceroll')) ?-->

    <!--?php endif; ?-->


        <?php if(!comments_open() && get_comments_number()): ?>

            <p class="no-comments"><?php esc_html_e('Comment are closed', 'Massive iceroll'); ?></p>

        <?php endif; ?>


<?php    
    endif; ?>

<?php comment_form(); ?>