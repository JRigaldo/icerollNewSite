<?php get_header(); ?>

<!-- Main -->
<div id="main">
    <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <article class="post">
        <header class="major">
            <span class="date border"><?php the_time('j F Y') ?></span>

            <h1><?php the_title(); ?></h1>
        </header>
        <div class="image main"><?php the_post_thumbnail('small-thumbnail'); ?></div>
        <p><?php the_content(); ?></p>

    </article>


    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

</div>

<?php get_footer(); ?>