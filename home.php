<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if(is_home() && !is_paged()) : ?>
        <!-- Main Featured Article -->
        <?php require get_template_directory() .'/inc/templates/home-main-hero.php'; ?>
        <!-- Aside input mail -->
        <?php require get_template_directory() .'/inc/templates/home-subscribe.php'; ?>
        <!-- Posts Page -->
        <?php require get_template_directory() .'/inc/templates/home-pages-displayed.php'; ?>
     <?php endif; ?>
     <!-- Aside -->
     <?php require get_template_directory() .'/inc/templates/home-aside.php'; ?>

    <!-- Posts Blog -->
    <?php require get_template_directory() .'/inc/templates/home-blog.php'; ?>

</div>

<?php get_footer(); ?>