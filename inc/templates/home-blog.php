<!-- Posts Blog -->
<section class="posts">
    <?php 

        if(have_posts()):
            while(have_posts()) : the_post(); 
            $do_not_duplicate[] = $post->ID;
      
            get_template_part('inc/template-part/content', get_post_format());

            endwhile; wp_reset_query(); 
            $post__not_in = ($do_not_duplicate) ? implode(',', $do_not_duplicate) : ''; 

        else : echo '<p>No content found</p>';

        endif;

    ?>
</section>
<!-- Load More Button -->
<?php echo do_shortcode('[ajax_load_more css_classes="posts" post__not_in="'. $post__not_in .'" post_type="post" pause="true" scroll="false" transition_container="false" [ajax_load_more post_type="post" button_label="Afficher les anciens posts"]'); ?>