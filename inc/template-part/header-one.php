<!-- Header -->
		<header id="header">
			<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/	images/logoIceRoll_300.png" alt=""></a>
		</header>
		<!-- Nav -->
		<nav id="nav">
			<?php $args = array(
					'theme_location' => 'primary'
				); ?>
			<?php wp_nav_menu($args); ?>


			<ul class="icons">
				<li><a href="https://twitter.com/IcerollLausanne" target="_blank" class="icon brands fa-twitter"><span
							class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/IcerollDelices" target="_blank" class="icon brands fa-facebook-f"><span
							class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/icerolldelice/?hl=fr" target="_blank" class="icon brands fa-instagram"><span
							class="label">Instagram</span></a></li>
				<li><a href="https://www.youtube.com/watch?v=9EMNQNuEY0M&feature=emb_title" target="_blank" class="icon brands fa-youtube"><span
							class="label">Youtube</span></a></li>
			</ul>
		</nav>