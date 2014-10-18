<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>
	<?php include_once("analyticstracking.php") ?>
	<div class="contact-header">Say Hello!</div>
	<?php echo do_shortcode('[contact-form-7 id="32" title="Untitled"]'); ?>

<?php get_footer(); ?>
