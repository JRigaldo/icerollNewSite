<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if(is_home() && !is_paged()) : ?>

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

    <?php endif; ?>

    <!-- Posts Page -->
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

         <!-- <aside class="intermiss">
            <h2>kubwefkjbwef fewiuhfewhioh fweinefw</h2>
        </aside> -->

    <!-- Posts Blog -->
    <!--get_template_part('content', get_post_format()); -->
    <section class="posts">


        <?php 
        
            if(have_posts()):
                while(have_posts()) : the_post(); 
                $do_not_duplicate[] = $post->ID;
      
                get_template_part('content', get_post_format());

                endwhile; wp_reset_query(); 
                $post__not_in = ($do_not_duplicate) ? implode(',', $do_not_duplicate) : ''; 

            else : echo '<p>No content found</p>';

            endif;

        ?>
    </section>

    <?php echo do_shortcode('[ajax_load_more css_classes="posts" post__not_in="'. $post__not_in .'" post_type="post" pause="true" scroll="false" transition_container="false" [ajax_load_more post_type="post" button_label="Afficher les anciens posts"]]'); ?>


</div>

<?php get_footer(); ?>