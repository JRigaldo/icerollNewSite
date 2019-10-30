/*

Template Name: Page Layout Left Right

*/
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

        endif; ?>

    <!-- Custom Field Left Ryght Layout -->
    <?php if(have_rows('pages_displayed')) : ?>
    <?php while(have_rows('pages_displayed')) : the_row(); ?>


    <h3><?php the_sub_field('page_title'); ?></h3>
    <p>
      <span class="image left">
      </span>
      <?php the_sub_field('page_text_right'); ?>
    </p>
    <p>
      <span class="image right">
      </span>
      <?php the_sub_field('page_text_left'); ?>
    </p>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>

  </section>

</div>

<?php get_footer(); ?>