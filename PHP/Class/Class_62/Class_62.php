<?php 

    $cs = "mysql:host=localhost, dbname=test"
    $user = "phpuser";
    $password = 'password';


    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        //$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected </br>";

        $query  = "SELECT * FROM Students";
        $results = $db ->query($query); 

        $studentGrade = $results ->fetch();
        print_r($studentGrade);

        while($studentGrade){
            echo "Name: {$studentGrade['name']}</br>";
            echo "Grade: {$studentGrade['grade']}</br>";

            echo "Name: {$studentGrade[1]}</br>";
            echo "Grade: {$studentGrade[2]}</br>";

            $studentGrade = $results ->fetch();
        }

        echo "<hr>;"

        $results = $db ->query($query); 
        foreach($results as $studentGrade){
            echo "Name: {$studentGrade['name']}</br>";
            echo "Grade: {$studentGrade['grade']}</br>";
        }

        echo "<hr>;"

        $query  = "SELECT * FROM Students LIMIT 10";
        $results = $db ->query($query); 
        $studentGrade = $results ->fetchAll();
        $results ->closeCursor();
        foreach($results as $studentGrade){
            echo "Name: {$studentGrade['name']}</br>";
            echo "Grade: {$studentGrade['grade']}</br>";
        }
        print_r($studentGrade);

        //insert
        $nsertQuery = "INSERT INTO students (name, grade) VALUES ("Donald, 75")";
        $rowsInserted = $db->exec($insert);
        echo "Inserted $rowsInserted rows</br>";

        //delete
        $nsertQuery = "DELETE FROM students (name, grade) WHERE NAME =  'Donald'";
        $rowsDeleted = $db->exec($delete);
        echo "Deleted $rowsDeleted row</br>s";

        //update
        $nsertQuery = "UPDATE students SET grade = 74 WHERE NAME = 'Donald'";
        $rowsUpdated = $db->exec($update);
        echo "Updated $rowsUpdated row</br>s";

    } catch (PDOException $e){
        die("Something went wrong ". $e->getMessage());
    }


?>