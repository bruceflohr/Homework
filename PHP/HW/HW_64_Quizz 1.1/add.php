<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        //echo "Name: $name</br>";
        //echo "Grade: $grade</br>";

        if(isset($_POST["name"])) {
            if(empty($_POST["name"])) {
                $error = "A valid name must be submitted";
            } else {
                $name = $_POST["name"];
            }
        }
        if(isset($_POST["grade"])) {
                if(empty($_POST["grade"])) {
                    $error = "A valid grade must be submitted";
                } else {
                    $grade = $_POST["grade"];
                }
        }

        $query = "INSERT INTO students (name, grade) VALUES (:name, :grade)";
        $statement = $db->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('grade', $grade );
        $statement->execute();  
        
        echo "$name with grade [$grade] has been added to database";

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }
    include "top.php";
?>
</br>
<a href="students.php">Back to Home Page</a>
<?php include "bottom.php" ?>