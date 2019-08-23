<?php get_header(); ?>

<!-- Main -->
<div id="main">
    <!-- Posts -->
    <section class="posts">
        <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>
        
        <?php the_content(); ?>

        <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>
    </section>

</div>

<?php get_footer(); ?>