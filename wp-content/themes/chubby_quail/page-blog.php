<?php
/**
 * Template Name: Blog
 *
 */

get_header(); 

// The Query
$args = array(
	'post_type' => 'post'
);
$the_query = new WP_Query( $args );

?>

	<main role="main">
		<!-- section -->
		<section class="home-wrapper">
			
			<?php 

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<div class="post-block">';
					echo '<div class="post-title">' . get_the_title() . '</div>';
					echo '<div class="post-content">' . get_the_content() . '</div>';
					echo '<div class="post-date">' . get_the_date() . '</div>';
					echo '</div>';
				}
			} 
			else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
