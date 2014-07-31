<?php
/**
 * Template Name: Home
 *
 */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<h2>wedding films</h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
