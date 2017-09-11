<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';
    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected </br>";

        $query  = "SELECT name, price FROM book_store";
        $results = $db ->query($query); 
        $books = $results ->fetchAll();
        $results ->closeCursor();

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
    include "top.php"
?>