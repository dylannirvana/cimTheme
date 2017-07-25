<div id="carousel" class="scene container" >

		<?php
		$query = new wp_query( 'pagename=carousel');
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				echo '<h1>';
				the_title();
				echo '</h1>';
				echo '<p class="mainFont">';
				the_content();
				echo "</p>";

			}
		}
		wp_reset_postdata();
		?>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

<!-- indicators -->
			<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

<!-- items -->
		<?php
		$query = new wp_query( 'category_name=carousel&posts_per_page=1');
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				echo '<div class="carousel-item active">';
				the_post_thumbnail();
				echo '<div class="container">';
				echo '<div class="carousel-caption d-none d-md-block text-left">';
				echo '<h1>';
				the_title();
				echo '</h1>';
				echo '<p>';
				the_content();
				echo '</p>';
				echo '<a class="btn btn-lg btn-primary" href="#intro" role="button">Get your tickets</a>';
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}
		}
		wp_reset_postdata();

		$query = new wp_query( 'category_name=carousel');
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				echo '<div class="carousel-item">';
				the_post_thumbnail();
				echo '<div class="container">';
				echo '<div class="carousel-caption d-none d-md-block text-left">';
				echo '<h1>';
				the_title();
				echo '</h1>';
				echo '<p>';
				the_content();
				echo '</p>';
				echo '<a class="btn btn-lg btn-primary" href="#intro" role="button">Get your tickets</a>';
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}
		}
		wp_reset_postdata();
		?>

        <!-- <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div> -->

      </div> <!-- END inner -->

<!-- controls			 -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div> <!-- END myCarousel -->

<!-- </div>  -->
<!-- optional END carousel AFTER SECTION alt end bottom of page -->


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
						the_post_thumbnail( array('class' => 'rounded-circle'));
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

      <!-- START THE FEATURETTES -->
			<div id="featurettes" class="featurettes">

			<?php
			$query = new wp_query( 'pagename=featurettes');
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

					echo '<h1>';
					the_title();
					echo '</h1>';
					echo '<p class="mainFont">';
					the_content();
					echo "</p>";

				}
			}
			wp_reset_postdata();
			?>

			<!-- QUERIES THE POSTS -->

			<!-- <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div> -->
										<?php
										$query = new wp_query( 'p=592');
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();

												echo '<div class="row featurette">';
												echo '<div class="col-md-7">';
												echo '<h2 class="featurette-heading">';
													the_title();
												echo '</h2>';
												echo '<p class="lead">';
														the_content();
												echo '</p>';
												echo '</div>';
												echo '<div class="col-md-5 ">';
												the_post_thumbnail('post_thumbnail', ['class="featurette-image img-fluid mx-auto"']);
												echo '</div>';
												echo '</div>';
												echo '<hr class="featurette-divider">';

												}
											}
											wp_reset_postdata();
											?>
										<?php
										$query = new wp_query( 'p=594');
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();

												echo '<div class="row featurette">';
												echo '<div class="col-md-7 push-md-5">';
												echo '<h2 class="featurette-heading">';
													the_title();
												echo '</h2>';
												echo '<p class="lead">';
														the_content();
												echo '</p>';
												echo '</div>';
												echo '<div class="col-md-5 pull-md-7">';
												the_post_thumbnail('post_thumbnail', ['class="featurette-image img-fluid mx-auto"']);
												echo '</div>';
												echo '</div>';
												echo '<hr class="featurette-divider">';

												}
											}
											wp_reset_postdata();
											?>
										<?php
										$query = new wp_query( 'p=596');
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();

												echo '<div class="row featurette">';
												echo '<div class="col-md-7">';
												echo '<h2 class="featurette-heading">';
													the_title();
												echo '</h2>';
												echo '<p class="lead">';
														the_content();
												echo '</p>';
												echo '</div>';
												echo '<div class="col-md-5 ">';
												the_post_thumbnail('post_thumbnail', ['class="featurette-image img-fluid mx-auto"']);
												echo '</div>';
												echo '</div>';
												echo '<hr class="featurette-divider">';

												}
											}
											wp_reset_postdata();
											?>




<!--
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider"> -->

	</div> <!-- /END featurettes -->

</div> 
<!-- END scene carousel FOR WHOLE PAGE vs individual sections -->
