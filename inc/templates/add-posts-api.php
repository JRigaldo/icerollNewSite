<!-- Add new post API -->
<article class="post featured">
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
</article>