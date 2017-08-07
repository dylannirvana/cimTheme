<!-- $ wp post create --post_title='album' --post_type='page'
$ wp post generate --count=9  then manually set cats
-->

<!-- ALBUM -->
	<div id="album" class="scene">

<!-- WP-Query ties in PAGE with album slug -->
			<?php
				$query = new WP_Query( 'pagename=album');
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						echo '<section class="jumbotron text-center">';
						echo '<div class="container">';
						echo '<h1 class="jumbotron-heading">';
						the_title();
						echo '</h1>';
						echo '<p lead text-muted>';
						the_content();
						echo '</p>';
						echo '<p><a href="#" class="btn btn-primary">Main call to action</a></p>';
						echo '</div>';
						echo '</section>';
					}
				}
				wp_reset_postdata();
			?>
<!-- END WP_Query -->

<div class="album text-muted">
	<div class="container">

			<div class="row">
<!-- WP-Query ties in POSTS with album category -->
			<?php
				$query = new WP_Query( 'category_name=album&posts_per_page=9');
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						echo '<div class="card col-sm-6 col-md-4">';
						the_post_thumbnail();
						echo '<h3 class="card-title">';
						the_title();
						echo '</h3>';
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
</div> <!-- END scene -->
