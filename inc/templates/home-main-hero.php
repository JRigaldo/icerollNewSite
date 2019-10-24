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
    <?php if(have_rows('home_hero', 'option')) : ?>

    <?php while(have_rows('home_hero', 'option')) : the_row(); ?>

    <?php $link = get_sub_field('hero_link', 'option') ?>
    <a href="<?php echo $link; ?>">
        <header class="major hero">
            <h2><?php the_sub_field('home_hero_title', 'option'); ?></h2>
            <h3><?php the_sub_field('home_hero_subtitle', 'option'); ?></h3>

        </header>
        <?php $image = get_sub_field('home_hero_image', 'option') ?>
        <img src="<?php echo $image['url'];?>">
    </a>
    <nav>
        <ul class="icons">
            <li>
                <a href="phone:+41 78 672 54 02" class="icon fa fa-mobile-alt">
                    <span class="label">Phone</span>
                </a>
            </li>
            <li>
                <a href="mailto:info@icerolllausanne.ch" class="icon fa fa-envelope-open">
                    <span class="label">Mail</span>
                </a>
            </li>
        </ul>
        <ul class="icons">
            <li><a href="https://twitter.com/IcerollLausanne" class="icon brands fa-twitter"><span
                        class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/iceroll.lausanne.5" class="icon brands fa-facebook-f"><span
                        class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/icerolldelice/?hl=fr" class="icon brands fa-instagram"><span
                        class="label">Instagram</span></a></li>
            <li><a href="https://www.youtube.com" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
        </ul>
    </nav>
    <p><?php the_sub_field('home_hero_text', 'option'); ?></p>
    
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</article>