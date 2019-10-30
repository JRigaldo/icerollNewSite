<?php if(have_rows('pages_display')) : ?>
<?php while(have_rows('pages_display')) : the_row(); ?>
<?php $imageleft = get_sub_field('page_image_left'); ?>
<?php $imageright = get_sub_field('page_image_right'); ?>
<h3><?php the_sub_field('page_title_left'); ?></h3>
<p>
    <span class="image left">
        <img src="<?php echo $imageleft['url'];?>">
    </span>
    <?php the_sub_field('page_text_right'); ?>
</p>
<h3><?php the_sub_field('page_title_right'); ?></h3>
<p>
    <span class="image right">
        <img src="<?php echo $imageright['url'];?>">
    </span>
    <?php the_sub_field('page_text_left'); ?>
</p>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>