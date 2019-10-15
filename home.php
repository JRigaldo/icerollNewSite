<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if(is_home() && !is_paged()) : ?>

    <!-- Ajax admin buttonfor add posts -->
    <!--?php require get_template_directory() .'inc/templates/add-posts-api.php'; ?-->

    <!-- Main article -->
    <?php require get_template_directory() .'/inc/templates/home-main-article.php'; ?>

    <?php endif; ?>

    <!-- Page articles -->
    <?php require get_template_directory() .'/inc/templates/home-article.php'; ?>

    <!-- Blog posts -->
    <?php require get_template_directory() .'/inc/templates/home-blog-posts.php'; ?>

</div>

<?php get_footer(); ?>