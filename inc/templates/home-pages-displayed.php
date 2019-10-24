<!-- Posts Page -->
<section class="posts">
    
    <?php if(have_rows('home_pages_displayed', 'option')) : ?>

    <?php while(have_rows('home_pages_displayed', 'option')) : the_row(); ?>
    <article>

    <header>
        <h2><?php the_sub_field('hero_pages_title', 'option'); ?></h2>
        <p><?php the_sub_field('hero_pages_text', 'option'); ?></p>
        </header>
    <?php $image = get_sub_field('hero_pages_image', 'option') ?>
    <?php $link = get_sub_field('hero_pages_link', 'option') ?>

    <a href="<?php echo $link; ?>" class="image fit"><img src="<?php echo $image['url'];?>" alt=""></a>
    <ul class="actions special">
        <li><a href="<?php echo $link; ?>" class="button"><?php the_sub_field('hero_pages_button', 'option'); ?></a></li>
    </ul>
    </article>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
   
</section>