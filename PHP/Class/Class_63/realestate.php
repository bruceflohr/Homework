<?php

    $cs = "mysql:host=localhost;dbname=booksale";
    $user = "test";
    $password = '';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected<br/>";
        echo "<hr/>";

        $query = "SELECT * FROM booksale";
        $results = $db->query($query);
        $books = $results->fetchAll();
        $results->closeCursor();

        } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

    include "top.php"

    ?>


<?php
include "bottom.php"
?>