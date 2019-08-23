<?php get_header(); ?>

<!-- Main -->
<div id="main">
  <section class="post">

     <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <!-- Featured Post -->
        <header class="major">
            <h2><?php the_title(); ?></h2>
        </header>
        <div class="image main"><?php the_post_thumbnail('banner-image'); ?></div>
        <p><?php the_content(); ?></p>

      <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>
  </section>

</div>

<?php get_footer(); ?>