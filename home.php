<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if(is_home() && !is_paged()) : ?>

    <!-- Add new post API -->
    <article class="post featured">
        <header class="major">
            
            <div class="admin-quick-add">
                <h3>Quick Add Post</h3>
                <input type="text" name="title" placeholder="Title">
                <textarea name="content" placeholder="Content"></textarea>
                <button id="quick-add-button">Create Post</button>
            </div>

        </header>
        <button id="post-btn">Load blog posts</button>
        <div id="blog-posts-container"></div>
    ></article>

    <!-- Featured Post -->
    <article class="post featured">
        <header class="major">

            <?php
                $hero = array(
                    'p' => 102,
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
                        <p><?php the_content(); ?></p>
                    </header>
                    <!--div href="#" class="image main"--><!--?php the_field('hero_text'); ?--><!--/div-->

                    <?php endwhile;
                else : echo '<p>No content found</p>';
                endif;

            ?>

        <!--ul class="actions special">
            <li><a href="#" class="button large">Full Story</a></li>
        </ul-->
    </article>

    <?php endif; ?>

    <!-- Posts -->
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
                <li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
            </ul>
        </article>

        <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

        <?php endif; ?>

        <?php 
        
            if(have_posts()):
                while(have_posts()) : the_post(); 

                get_template_part('content', get_post_format()); 

                endwhile;
        
            else : echo '<p>No content found</p>';

            endif;

        ?>
    </section>

    <!-- Footer -->
    <footer>
        <div class="pagination">

            <?php 
        
            if(have_posts()):
                while(have_posts()) : the_post(); ?>
            <?php endwhile;

            echo paginate_links();

            else : echo '<p>No content found</p>';

            endif;

            ?>
        </div>
    </footer>

</div>

<?php get_footer(); ?>