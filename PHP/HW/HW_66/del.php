<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected </br>";


        if(!empty($_POST['book'])) {
            echo $_POST['book'];
        }

        $values = $_POST['book'];
        $values = explode(', ', $values);
        $name = $values[0];
        $price = $values[1];
        echo "Name: $name</br>";
        echo "price: $price";

        $query  = "DELETE FROM book_store WHERE name = (:name) AND price = (:price)";
        $statement = $db->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('price', $price );
        $statement->execute(); 
        echo "Student has been removed from database";

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
?>
</br>
<a href="book_store.php">Back to Home Page</a>