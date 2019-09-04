<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,700,700i&display=swap|Oleo+Script+Swash+Caps:700&display=swap">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		
		 <?php if(is_home() && !is_paged()) : ?>

		<!-- Intro -->
		<div id="intro">
			<h1><?php bloginfo('name') ?></h1>
			<p><?php bloginfo('description') ?></p>
			<div class="embed">
				<div class="embed-container">
				<?php the_field('video', 'option'); ?>
 			</div>
			</div>
			<ul class="actions">
				<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
			</ul>
		</div>
		<?php endif; ?>



		<!-- Header -->
		<header id="header">
			<a href="<?php echo home_url(); ?>" class="logo"><img
					src="<?php bloginfo('stylesheet_directory'); ?>/	images/logoIceRoll_300.png" alt=""></a>
		</header>
		<!-- Nav -->
		<nav id="nav">
			<?php $args = array(
					'theme_location' => 'primary'
				); ?>
			<?php wp_nav_menu($args); ?>


			<ul class="icons">
				<li><a href="https://twitter.com/IcerollLausanne" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/iceroll.lausanne.5" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/icerolldelice/?hl=fr" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.youtube.com" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
			</ul>
		</nav>