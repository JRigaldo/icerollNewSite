<section class="posts">


    <?php if(is_home() && !is_paged()) : ?>

    <?php $argspages = array(
            'post__in'   => array(
                '28',
                '38',
                '33',
                '35'

            ),
            'post_type' => 'page',
        ); ?>
    <?php $querypages = new WP_Query($argspages) ?>
    <?php if($querypages -> have_posts()):
            while($querypages -> have_posts()) :
            $querypages -> the_post(); 
            $count++;?>
    <article>

        <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail('small-thumbnail'); ?></a>
        <p><?php the_excerpt(); ?></p>
        <ul class="actions special">
            <li><a href="<?php the_permalink(); ?>" class="button">Voir l'article</a></li>
        </ul>
    </article>

    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

    <?php endif; ?>
</section>