<?php get_header(); ?>

<!-- Main -->
<div id="main">
    <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <article class="post">
        <header class="major">
            <span class="date border"><?php the_time('j F Y') ?></span>

            <h1><?php the_title(); ?></h1>
        </header>
        <div class="image main"><?php the_post_thumbnail('small-thumbnail'); ?></div>
        <p><?php the_content(); ?></p>

    </article>

    <aside>
    <!--?php comments_template(); ?-->
        <?php  
        
            if(comments_open()) :
                comments_template();
            endif;

        ?>
    </aside>


    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

</div>
<!-- <footer id="footer">
						<section-->


							<!--?php if ( shortcode_exists( 'contact-form-7' ) ) { echo do_shortcode('[contact-form-7 id="95" title="Formulaire de contact 1"]'); } ? -->


							<!-- form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form> -->
						<!-- </section> -->
<?php get_footer(); ?>