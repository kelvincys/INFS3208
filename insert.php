<?php
    // enable php debug
    error_reporting(-1);
    ini_set('display_errors', 'On');

    // $rawdate = date("Y-m-d");
    // $date = (string)$rawdate;
    $date = time();
    // $date = new \Cassandra\Timestamp($rawdate);
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
        values (toTimeStamp(now()), ?, ?, ?, ?, ?)"
    );

    $args = array($title, $author, $description, $link, $image);
    $future = $session->execute($statement, array('arguments'=>$args));

    header('Location: ' . 'post.php');
?>