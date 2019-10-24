<article class="post">
    <header class="major">
        <span class="date"><?php the_time('j F Y') ?></span>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <a href="#" class="image fit"><?php the_post_thumbnail('small-thumbnail'); ?></a>
    <p><?php the_excerpt(); ?></p>
    <ul class="actions special">
        <li><a href="<?php the_permalink(); ?>" class="button">Voir l'article</a></li>
    </ul>
</article>
