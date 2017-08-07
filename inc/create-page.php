<?php
/**
* A function used to programmatically create a post in WordPress. The slug, author ID, and title
* are defined within the context of the function.
*
* @returns -1 if the post was never created, -2 if a post with the same title exists, or the ID
*          of the post if successful.
*/
function programmatically_create_post($title, $cat) {

	// Initialize the page ID to -1. This indicates no action has been taken.
	// $post_id = -1;
	
	$category = get_category_by_slug( $cat );

	// If the page doesn't already exist, then create it
	if( get_page_by_title( $title ) != null ) {

		return;

		// Otherwise, we'll stop
	} else {
			function insert_post() {

				// Set the post ID so that we know the post was created successfully
				wp_insert_post(
					array(
						'comment_status'	=>	'closed',
						'ping_status'		=>	'closed',
						// 'post_author'		=>	$author_id,
						// 'post_name'		=>	$slug,
						'post_title'		=>	$title,
						'post_category'		=>	array($category->term_id),
						'post_status'		=>	'draft',
						'post_type'		=>	'post'
					)
				);
			}

	} // end if

}; // end programmatically_create_post

add_filter( 'after_setup_theme', 'programmatically_create_post' );

?>
