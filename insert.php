<?php
    // enable php debug
    error_reporting(-1);
    ini_set('display_errors', 'On');
?>

<html>
    <head>
        <title>Cloud computing Prac 8</title>
    </head>
    <body>
        <h1>
            <?php
                echo "insert records to database\n";
            ?>
        </h1>

        <?php
            $rawdate = date("Y-m-d");
            $date = (string)$rawdate;
            $title = filter_input(INPUT_POST, 'title');
            $author = filter_input(INPUT_POST, 'author');
            $description = filter_input(INPUT_POST, 'description');
            $link = filter_input(INPUT_POST, 'link');
            $image = filter_input(INPUT_POST, 'image');

            $cluster = Cassandra::cluster()
                ->withContactPoints('172.23.99.170','172.23.106.82', '172.23.104.206') // cassandra address 
                ->withPort(9042)
                ->build();
            $keyspace = 'cloudcomputing'; // keyspace
            $session = $cluster->connect($keyspace);
            $statement = new Cassandra\SimpleStatement(
                "INSERT INTO data (date, title, author, description, link, image)
                values (?, ?, ?, ?, ?, ?)"
            );

            $args = array($date, $title, $author, $description, $link, $image);
            $future = $session->execute($statement, array('arguments'=>$args));
            // $future = $session->execute($statement);  
            //$result = $future->get(); // wait for the result, with an optional timeout

        ?>
    </body>
</html>
