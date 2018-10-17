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

        $keyspace ="cloudcomputing";
        $session = $cluster->connect($keyspace);
        $statement = new Cassandra\SimpleStatement(
          "SELECT * FROM data"
        );
        $future = $session->executeAsync($statement);
        $result = $future->get();
        foreach ($result as $row) {
          echo"<div class='card mb-4 border border-dark'>";
          echo "<div class='card-body'>";
          echo "<div class='row'>";
          echo "<div class='col-lg-3'>";
          $str = implode("|",$row);
          $array = explode("|", $str);
          $date = $array[0]/1000;
          echo "<img class='img-fluid rounded' src='".$array[4]."' alt=''>";
          echo "</div><div class='col-lg-9'>";
          echo "<h2 class='card-title'>".$array[1]."</h2>";
          echo "<p class='card-text'>";
          echo $array[3];
          echo "</p>";
          echo "</div></div></div>";
          echo "<div class='card-footer text-muted'>";
          echo "Posted on " . date("Y-m-d", $date) . " by " . $array[2] . ".";
          echo "</div></div>";
        }
      ?>


      

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
