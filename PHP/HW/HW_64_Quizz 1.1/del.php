<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected </br>";

        $values = $_POST['student'];
        $values = explode(', ', $values);
        $name = $values[0];
        $grade = $values[1];
        //echo "Name: $name</br>";
        //echo "Grade: $grade";

        $query  = "DELETE FROM Students WHERE name = (:name) AND grade = (:grade)";
        $statement = $db->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('grade', $grade );
        $statement->execute(); 
        echo "Student has been removed from database";

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
?>
</br>
<a href="students.php">Back to Home Page</a>