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



</div>
<!-- END scene carousel FOR WHOLE PAGE vs individual sections -->
