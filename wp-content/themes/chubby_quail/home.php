<?php
/**
 * Template Name: Home
 *
 */

get_header(); ?>
	<?php include_once("analyticstracking.php") ?>
	<main role="main">
		<!-- section -->
		<section class="home-wrapper">
			<div class="featured" id="featured">Highlight Films</div>
			<div class="film clare">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Clare &amp; Jonathan</div>
				</div>
			</div>
			<div class="splats">
				<img src="<?php echo get_template_directory_uri(); ?>/img/splats.svg" alt="">
			</div>
			<div class="film hollen">
				<div class="play"></div>
				<div class="overlay">
					<div class="film-title">Hollen &amp; Uri</div>
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
