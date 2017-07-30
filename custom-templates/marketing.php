
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div id="marketing" class="container marketing">

			<?php
			$query = new wp_query( 'pagename=marketing');
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

					echo '<h1 >';
					the_title();
					echo '</h1>';
					echo '<p class="mainFont">';
					the_content();
					echo "</p>";

				}
			}
			wp_reset_postdata();
			?>


      <!-- Three columns of text below the carousel -->
      <div class="row">

				<?php
				$query = new wp_query( 'category_name=marketing');
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						echo '<div class="col-lg-4">';
						the_post_thumbnail( array('class' => 'rounded-circle')); // NOTE THIS PATTERN
						echo '<h2>';
						the_title();
						echo '</h2>';
						echo '<p>';
						the_content();
						echo "</p>";
						echo "</div>";

					}
				}
				wp_reset_postdata();
				?>

        <!-- <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div> -->

      </div><!-- /.row -->
		</div> <!-- END marketing -->
