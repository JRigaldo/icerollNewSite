<?php get_header(); ?>
<?php 
/*

Template Name: Map template

*/
?>

<!-- Main -->
<div id="main">
    <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <article class="post">
        <header class="major">
            <h1><?php the_title(); ?></h1>
        </header>
        <div class="image main">


          <?php 

            $location = get_field('map');

            if( !empty($location) ):
            ?>
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <?php endif; ?>

        </div>
        <p><?php the_content(); ?></p>
        

    </article>


    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

</div>

<?php get_footer(); ?>