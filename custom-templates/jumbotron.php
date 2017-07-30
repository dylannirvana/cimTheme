<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="jumbotron" class="jumbotron scene">
  <div class="container">

    <!-- <h1 class="display-3">Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->

    <?php
      $query = new WP_Query( 'pagename=jumbotron');
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();

          echo '<h1 class="display-3">';
          the_title();
          echo '</h1>';
          echo '<p lead text-muted>';
          the_content();
          echo '</p>';
          echo '<p><a href="#" class="btn btn-primary">Main call to action</a></p>';
        }
      }
      wp_reset_postdata();
    ?>
<!-- END WP_Query -->




  </div>

<!-- <div class="container"> -->

  <div class="row">

    <!-- <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div> -->

    <?php
      $query = new WP_Query( 'category_name=jumbotron&posts_per_page=3');
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();

          echo '<div class="col-md-4">';
          echo '<h2>';
          the_title();
          echo '</h2>';
          echo '<p>';
          the_content();
          echo '</p>';
          echo '<p><a href="#" class="btn btn-primary">Main call to action</a></p>';
          echo '</div>';
        }
      }
      wp_reset_postdata();
    ?>
<!-- END WP_Query -->


  </div> <!-- END row -->
  <hr>

<!-- </div> -->
<!-- END container -->

</div> <!-- END jumbotron -->
