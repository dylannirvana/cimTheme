<?php
// Thanks to Tom McFarlin https://tommcfarlin.com/programmatically-create-categories/
// These are default categories for the Bootstrap4 UI tying in custom-templates to wp-admin
function example_insert_post() {
	wp_insert_post(
		array(
		  'post_title'	   => 'cookie',
		  'post_type' 	   => 'post',
      'post_category'  => array(8)
		)
	);


}
add_action( 'after_setup_theme', 'example_insert_post' );

 ?>
