<!-- Add new post API -->
<!--article class="post featured">
    <header class="major">
        <?php  if(current_user_can('administrator')) : ?>
        <div class="admin-quick-add">
            <h3>Quick Add Post</h3>
            <input type="text" name="title" placeholder="Title">
            <input type="file" name="file">
            <textarea name="content" placeholder="Content"></textarea>
            <button id="quick-add-button">Create Post</button>
        </div>
        <?php endif; ?>

    </header>

        <button id="post-btn">Load blog posts</button>
        <div id="blog-posts-container"></div>
</article-->

<!-- Featured Page -->
<article class="post featured">
    <?php if(have_rows('home_feature', 'option')) : ?>

    <?php while(have_rows('home_feature', 'option')) : the_row(); ?>

    <header class="major">
        <h2><?php the_sub_field('hero_featured_title', 'option'); ?></h2>
        <p><?php the_sub_field('home_featured_text_bloc', 'option'); ?></p>
    </header>
    <?php $image = get_sub_field('home_featured_image', 'option') ?>
    <a href="<?php  ?>" class="image fit"><img src="<?php echo $image['url'];?>" alt=""></a>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</article>