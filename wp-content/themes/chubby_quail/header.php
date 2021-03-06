<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>Chubby Quail | Cinematic Wedding Films</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="San Francisco Bay Area Cinematographer Mark Danial, is passionate about creating wedding films that tell your love story in a classic and cinematic way."/>
    	<meta name="keywords" content="San Francisco Bay Area Cinematographer, DP, Camera Operator, wedding videography, wedding films, filmmaker, San Francisco, California, Canon, HD"/>

		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.7.1.min.js"></script>
		<!-- Magnific Popup core CSS file -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/magnific-popup/magnific-popup.css"> 
		
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
			<div id="perspective" class="perspective effect-airbnb">
			    <div class="container">
			        <div class="wrapper"><!-- wrapper needed for scroll -->
		
				<!-- header -->
									<!-- <div class="bg-img"></div> -->
						<div id="header-vid" class="bg-img" data-vide-bg="<?php echo get_template_directory_uri(); ?>/img/video/grass" data-vide-options="loop: true, muted: true, position: 0% 0%">
							<div class="hero-text">
								<div class="btn">
								  <svg>
								    <rect x="0" y="0" fill="none" width="166" height="45"/>
								  </svg>
								  View Films
								</div>
							</div>	
						</div>
				<header class="header clearfix" role="banner">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/cq-logo.svg" class="logo"></a>
					<div class="header-text">cinematic wedding films</div>
					<div id="showMenu" class="burger-menu"></div>
				</header>
				<div class="clearfix"></div>

				<!-- /header -->
			
