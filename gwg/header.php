<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="//use.typekit.net" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		
		<script src="https://use.typekit.net/kyn0gps.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>
	<body <?php body_class(); ?>>

		<div class="page">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="container">
					<a class="logo clear" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						<span>Get&nbsp;Well Gamers</span>
					</a>
					<nav class="nav" role="navigation">
						<a href="#" id="mobileTrigger" class="mobile-trigger">Menu</a>
						<?php html5blank_nav(); ?>
					</nav>
				</div>
			</header>
			<!-- /header -->
