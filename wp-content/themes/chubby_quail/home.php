<?php
/**
 * Template Name: Home
 *
 */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="home-wrapper">
			<div class="featured">Featured Films</div>
			<div class="film clare">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Clare &amp; Jonathan</div>
				</div>
			</div>
			<div class="splats">
				<img src="<?php echo get_template_directory_uri(); ?>/img/splats.svg" alt="">
			</div>
			<div class="film lindsay">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Lindsay &amp; Carlos</div>
				</div>	
			</div>
			<div class="splats">
				<img src="<?php echo get_template_directory_uri(); ?>/img/splats.svg" alt="">
			</div>
			<div class="film rosie">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Rosie &amp; Philip</div>
				</div>	
			</div>
			<div class="splats">
				<img src="<?php echo get_template_directory_uri(); ?>/img/splats.svg" alt="">
			</div>
			<div class="film julie">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Julie &amp; Joe</div>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
