<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <!-- Posts -->
    <section class="posts">
        <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>
        
        <h2>
            <?php
                if(is_category()){
                    single_cat_title();
                }elseif(is_tag()){
                    single_tag_title();
                }elseif(is_author()){
                    the_post();
                    echo 'Author Archives: ' . get_the_author();
                    rewind_posts();
                }elseif(is_day()){
                    echo 'Daily Archives: '. get_the_date();
                }elseif(is_month()){
                    echo 'Monthly Archives: '. get_the_date('F Y');
                }elseif(is_year()){
                    echo 'Monthly Archives: '. get_the_date('Y');
                }else{
                    echo 'Archives: ';
                }
            ?>
        </h2>

        <article>

            <header>
                <div class="meta">
                    <span class="date"><?php the_time('j F Y') ?></span>
                    <span class="post_category">
                        <?php
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = '';
                        if($categories){
                            foreach($categories as $category){
                                $output .= '<a href="' . get_category_link($category->term_id) . '">'. $category->cat_name . '</a>'. $separator;
                            }
                            echo trim($output, $separator);
                        }
                        ?>
                    </span>
                </div>
                
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <a href="#" class="image fit"><img src="<?php  ?>'" alt="" /></a>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions special">
                <li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
            </ul>
        </article>

        <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>
    </section>

    <!-- Footer -->
    <footer>
        <div class="pagination">
            <a href="#" class="previous">Prev</a>
            <a href="#" class="page active">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <span class="extra">&hellip;</span>
            <a href="#" class="page">8</a>
            <a href="#" class="page">9</a>
            <a href="#" class="page">10</a>
            <a href="#" class="next">Next</a>
        </div>
    </footer>

</div>

<?php get_footer(); ?>