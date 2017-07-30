<!-- START THE FEATURETTES -->
<div id="featurettes" class="featurettes container">

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
