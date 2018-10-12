<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFS3208 Cloud Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" id="nav">
      <div class="container">
        <a class="navbar-brand icon" href="index.html">Matchyours!</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Styles from our users
      </h1>


      <!-- Blog Post -->
      <?php
        $cluster = Cassandra::cluster()
        ->withContactPoints('172.23.99.170','172.23.106.82','172.23.104.206')
        ->withPort(9042)
        ->build();

        $keySpace ="cloudcomputing";
        $session = $cluster->connect($keyspace);
        $staement = new Cassandra\SimpleStatement(
          "SELECT * FROM data"
        );
        $future = $session->executeAsync($statement);
        $result = $future->get();
        foreach ($$result as $row) {
          echo"<div class='card mb-4 border border-dark'>";
          echo "<div class='card-body'>";
          echo "<div class='row'>";
          echo "<div class='col-lg-6'>";
          $str = implode("|",$row);
          $array = explode("|", $str);
          echo "<img class='img-fluid rounded' src='".$array[5]."' alt=''>";
          echo "<div class='col-lg-6'>";
          echo "<h2 class='card-title'>".$array[1]."</h2>";
          echo "<p class='card-text'>";
          echo $array[3];
          echo "</p>";
          echo " </div></div></div>";
          echo "<div class='card-footer text-muted'>";
          echo "Posted on database time by".$array[2];
          echo "</div></div>";
        }
      ?>


      <div class="card mb-4 border border-dark">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">
                Content from database
              </p>
              <a href="#" class="hvr-shutter-in-vertical" id="none">Learn More</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on database time by
          <a href="#">Username</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4 border border-dark">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">
                Content from database
              </p>
              <a href="#" class="hvr-shutter-in-vertical" id="none">Learn More</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on database time by
          <a href="#">Username</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4 border border-dark">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">
                Content from database
              </p>
              <a href="#" class="hvr-shutter-in-vertical" id="none">Learn More</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on database time by
          <a href="#">Username</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4 border border border-dark">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">
                Content from database
              </p>
              <a href="#" class="hvr-shutter-in-vertical" id="none">Learn More</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on database time by
          <a href="#">Username</a>
        </div>
      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5" id="sss">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Matchyours!(INFS3208 Assignment2 Group1) 2018</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
