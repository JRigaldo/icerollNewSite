<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <!-- Featured Post -->
    <article class="post featured">
        <header class="major">
            <h2><a href="#">And this is a<br />
                    massive headline</a></h2>
            <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                amet nullam sed etiam veroeros.</p>
        </header>
        <a href="#" class="image main"><?php the_post_thumbnail('small-thumbnail'); ?></a>
        <ul class="actions special">
            <li><a href="#" class="button large">Full Story</a></li>
        </ul>
    </article>


    <section class="posts">

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
            <a href="#" class="image fit"><?php the_post_thumbnail('small-thumbnail'); ?></a>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions special">
                <li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
            </ul>
        </article>

        <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>


        <?php  

        $ourCurrentPage = get_query_var('page');

        $frontpage = new WP_Query(array(
            'posts_per_page' => 4,
            'page' => $ourCurrentPage
        ));

        ?>
    
        <?php

        if($frontpage -> have_posts()) :
        while($frontpage -> have_posts()) :
            $frontpage -> the_post(); 

        ?>

        <article>
            <header>
                <span class="date"><?php the_time('j F Y') ?></span>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <a href="#" class="image fit"><?php the_post_thumbnail('small-thumbnail'); ?></a>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions special">
                <li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
            </ul>
        </article>

        <?php

        endwhile;

        endif;

        ?>

    </section>
    <footer>
        <div class="pagination">

        <?php

        if(have_posts()) :
        while(have_posts()) :
            the_post(); 

        ?>

        <?php

        endwhile;

        echo paginate_links(array(
            'total' => $frontpage->max_num_pages,
            'format' => 'blog/page/%#%'
        ));

        endif;

        ?>



        </div>
    </footer>

</div>

<?php get_footer(); ?>

 <?php 

            if(is_home() && !is_paged()) :

                $postspaged = new WP_Query('posts_per_page=8');
        
                if($postspaged -> have_posts()):
                    while($postspaged -> have_posts()) : $postspaged -> the_post(); 

                    echo paginate_links();

                    endwhile;
                else : echo '<p>No content found</p>';
                endif;

            elseif(!is_home() && is_paged()) :

                $postsfront = new WP_Query('posts_per_page=4');

                if($postsfront -> have_posts()):
                    while($postsfront -> have_posts()) : $postsfront -> the_post();

                    echo paginate_links();

                    endwhile;
                else : echo '<p>No content found</p>';
                endif;

            endif; ?>