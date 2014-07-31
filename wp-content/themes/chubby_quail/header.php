<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<!-- Magnific Popup core CSS file -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/magnific-popup/magnific-popup.css"> 
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- page-wrap for sticky footer-->
			<div class="page-wrap">
				<!-- wrapper -->
				<div class="wrapper">
				<!-- header -->
				<header class="header clear" role="banner">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<h1>Chubby Quail</h1>
								<h2>wedding films</h2>
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<ul>
								<li>About</li>
								<li>Packages</li>
								<li>Blog</li>
								<li>Contact</li>
							</ul>
						</nav>
						<!-- /nav -->

				</header>
				<!-- /header -->
