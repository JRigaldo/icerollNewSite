<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php bloginfo('pingback_url'); ?>">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		
		 <?php if(is_home() && !is_paged()) : ?>

		<!-- Intro -->
		<div id="intro">
			<h1><?php bloginfo('name') ?></h1>
			<p><?php bloginfo('description') ?></p>
			<ul class="actions">
				<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
			</ul>
		</div>
		<?php endif; ?>



		<!-- Header -->
		<header id="header">
			<a href="index.html" class="logo"><img
					src="<?php bloginfo('stylesheet_directory'); ?>/	images/logoIceRoll_300.png" alt=""></a>
		</header>
		<!-- Nav -->
		<nav id="nav">
			<?php $args = array(
					'theme_location' => 'primary'
				); ?>
			<?php wp_nav_menu($args); ?>


			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
			</ul>
		</nav>