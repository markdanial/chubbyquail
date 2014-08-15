<?php
/**
 * Template Name: Home
 *
 */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="home-wrapper">
			<div class="home-text-header">Congratulations on your upcoming wedding</div>
			<div class="home-text">
			<p>My goal as a film maker is to ensure your day is recorded with authenticity and beauty.
			It's a privilege to tell stories that evoke emotion and capture moments that can be treasured forever.</p> 
			<p>I look forward to working with you to create something special.</p>
			 <p>-Mark</p>	
			</div>
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
