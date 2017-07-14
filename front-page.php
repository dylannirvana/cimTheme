<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<!-- COVER -->
<?php get_template_part('custom-templates/cover') ?>

<!-- JUMBOTRON -->
<?php get_template_part('custom-templates/jumbotron') ?>

<!-- CAROUSEL -->
	<?php get_template_part('custom-templates/carousel') ?>

	<!-- ALBUM -->
	<?php get_template_part('custom-templates/album') ?>

	<!-- DASHBOARD -->



<?php
	get_footer();
 ?>
