<?php get_header(); ?>

<!-- Main -->
<div id="main">


    <!-- Posts -->
    <section class="posts">
        <?php 
        
            if(have_posts()):
                while(have_posts()) : the_post(); 

                get_template_part('/inc/template-part/content', get_post_format()); 

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