<article class="post featured">
    <header class="major">

        <?php
                $hero = array(
                    'p' => 38,
                    'post_type' => 'any',
                    'post_per_page' => 1
                );
            ?>

        <?php
                $queryhero = new WP_Query($hero);
                if($queryhero->have_posts()) :
                    while($queryhero->have_posts()) :
                        $queryhero->the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <p><?php the_field('hero_text', 'option'); ?></p>
    </header>
    <a href="<?php the_permalink(); ?>" class="image main"><?php the_post_thumbnail('banner-image'); ?></a>
    <ul class="actions special">
        <li><a href="#" class="button large">Voir l'article</a></li>
    </ul>

    <?php endwhile;
                else : echo '<p>No content found</p>';
                endif;

            ?>
</article>