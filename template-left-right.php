<?php
/*
Template Name : Left rigth
*/
?>


<?php get_header(); ?>


<!-- Main -->
<div id="main">

    <!-- Post -->
    <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <section class="post">
        <header class="major">
            <span class="date"><?php the_time('j F Y') ?></span>
            <h1><?php the_title(); ?></h1>
            <!-- <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                    facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                    amet nullam sed etiam veroeros.</p> -->
        </header>
        <div class="image main"><img src="images/pic01.jpg" alt="" /></div>
        <p><?php the_content(); ?></p>
    </section>

    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

</div>


<?php get_footer(); ?>