<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if(is_home() && !is_paged()) : ?>
        <!-- Main Featured Article -->
        <?php require get_template_directory() .'/inc/templates/home-main-hero.php'; ?>
        <!-- Posts Page -->
        <?php require get_template_directory() .'/inc/templates/home-pages-displayed.php'; ?>
     <?php endif; ?>

    <!-- Posts Blog -->
    <?php require get_template_directory() .'/inc/templates/home-blog.php'; ?>

</div>

<?php get_footer(); ?>