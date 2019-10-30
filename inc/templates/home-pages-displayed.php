<!-- Posts Page -->
<section class="posts">
    <?php if(have_rows('home_pages_displayed', 'option')) : ?>

    <?php while(have_rows('home_pages_displayed', 'option')) : the_row(); ?>
    <article class="post">

        <?php $image = get_sub_field('hero_pages_image', 'option'); ?>
        <?php $link = get_sub_field('hero_pages_link', 'option'); ?>
        <a href="<?php echo $link; ?>">
            <div class="card">
                <header>
                    <img src="<?php echo $image['url'];?>" alt="">
                </header>

                <div class="card-container">
                    <h2><?php the_sub_field('hero_pages_title', 'option'); ?></h2>

                    <p><?php the_sub_field('hero_pages_text', 'option'); ?></p>

                    <ul class="actions special">
                        <li><span class="button"><?php the_sub_field('hero_pages_button', 'option'); ?></span></li>
                    </ul>
                </div>
            </div>
        </a>
        
    </article>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</section>
    
   