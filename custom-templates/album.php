<!-- ALBUM -->
	<div id="album" class="album text-muted">
    <div class="container">

<!- TK create pages manually -->
<!-- Meanwhile, to use this template, you must create 'album' PAGE and POSTS -->

<!-- WP-Query ties in PAGE with album slug -->
			<?php
				$query = new WP_Query( 'pagename=album');
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						echo '<div>';
						echo '<h3>';
						the_title();
						echo '</h3>';
						echo '<p>';
						the_content();
						echo '</p>';
						echo '</div>';
					}
				}
				wp_reset_postdata();
			?>
<!-- END WP_Query -->

			<div class="row">
<!-- WP-Query ties in POSTS with album category -->
			<?php
				$query = new WP_Query( 'category_name=album&posts_per_page=9');
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						echo '<div class="card">';
						the_post_thumbnail();
						echo '<h6 class="card-title">';
						the_title();
						echo '</h6>';
						echo '<p class="card-text">';
						the_content();
						echo '</p>';
						echo '</div>';
					}
				}
				wp_reset_postdata();
			?>
<!-- END WP_Query -->

<!-- This was the HTML -->
        <!-- <div class="card"> THERE WERE 9 OF THESE...
          <img data-src="holder.js/100px280/thumb" alt="Card image cap">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div> -->

      </div> <!-- END row -->
    </div> <!-- END container -->
  </div> <!-- END album -->
