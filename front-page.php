<?php
/**
 * @package understrap
 */
 get_header(); ?>

 <!- Bootstrap Templates -->
<!-- COVER -->
<?php get_template_part('custom-templates/cover'); ?>

<!-- Utility class whites out bg for fixed elements like video, bg img -->
<div class="site-white">

<!-- CAROUSEL -->
<?php get_template_part('custom-templates/carousel'); ?>

<!-- JUMBOTRON -->
<?php get_template_part('custom-templates/jumbotron'); ?>

<!-- ALBUM -->

<!-- END bootstrap templates -->

<?php get_footer(); ?>
</div> <!-- END site-white -->
