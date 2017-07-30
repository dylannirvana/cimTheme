<?php
// Thanks to Tom McFarlin https://tommcfarlin.com/programmatically-create-categories/
// These are default categories for the Bootstrap4 UI tying in custom-templates to wp-admin
function example_insert_category() {
	wp_insert_term(
		'Newalbum',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'album'
		)
	);
	wp_insert_term(
		'Carousel',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'carousel'
		)
	);
	wp_insert_term(
		'Carousel',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'marketing'
		)
	);
	wp_insert_term(
		'Carousel',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'featurettes'
		)
	);
	wp_insert_term(
		'Cover',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'cover'
		)
	);
	wp_insert_term(
		'Dashboard',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'dashboard'
		)
	);
	wp_insert_term(
		'Jumbotron',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'jumbotron'
		)
	);
	wp_insert_term(
		'Jumbotron',
		'category',
		array(
		  'description'	=> 'This category aligns with the Bootstrap4 UI.',
		  'slug' 		    => 'mumbotron'
		)
	);
}
add_action( 'after_setup_theme', 'example_insert_category' );

 ?>
