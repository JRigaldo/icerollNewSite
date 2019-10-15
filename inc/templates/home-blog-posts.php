<section class="posts load-more-posts-container">
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
        <ul class="actions">
            <li>
                <a class="button primary load-more" data-page="This is awesome"
                    data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                    <i class="fa fa-arrow-circle-down"></i>
                    Afficher
                    <i class="fa fa-plus-circle"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>