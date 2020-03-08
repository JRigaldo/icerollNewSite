<!-- Posts Page -->
<section class="posts">
    <?php if(have_rows('gallery_icecream', 'option')) : ?>

    <?php while(have_rows('gallery_icecream', 'option')) : the_row(); ?>
    <article class="post">
        <?php $image = get_sub_field('picture_icecream', 'option'); ?>
        <h3><?php the_sub_field('title_icecream', 'option'); ?></h3>
        <img src="<?php echo $image['url'];?>" alt="">
    </article>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</section>
<section class="gallery-text">
    <?php $link = get_field('gallery_link', 'option') ?>
    <ul class="actions special">
        <li><a href="<?php echo $link; ?>" class="button"><?php the_field('gallery_button', 'option'); ?></a></li>
    </ul>
</section>
    
   