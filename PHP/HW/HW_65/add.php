<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

        $name = $_POST['name'];
        $price = $_POST['price'];
        //echo "Name: $name</br>";
        //echo "price: $price</br>";

        if(isset($_POST["name"])) {
            if(empty($_POST["name"])) {
                $error = "A valid name must be submitted";
            } else {
                $name = $_POST["name"];
            }
        }
        if(isset($_POST["price"])) {
                if(empty($_POST["price"])) {
                    $error = "A valid price must be submitted";
                } else {
                    $price = $_POST["price"];
                }
        }

        $query = "INSERT INTO book_store (name, price) VALUES (:name, :price)";
        $statement = $db->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('price', $price );
        $statement->execute();  
        
        echo "$name with price [$price] has been added to database";

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
    include "top.php";
?>
</br>
<a href="book_store.php">Back to Home Page</a>
<?php include "bottom.php" ?>