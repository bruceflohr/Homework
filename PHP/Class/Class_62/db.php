<?php

    $cs = "mysql:host=localhost;dbname=test";
    $user = "phpuser";
    $password = 'p@$$w0rd';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected<br/>";

        $query = "SELECT * FROM xstudents";
        $results = $db->query($query);

        $studentGrade = $results->fetch();
        print_r($studentGrade);

        while($studentGrade) {
            echo "Name: {$studentGrade['name']}<br/>";
            echo "Grade: {$studentGrade['grade']}<br/>";

            echo "Name: {$studentGrade[1]}<br/>";
            echo "Grade: {$studentGrade[2]}<br/>";

            $studentGrade = $results->fetch();
        }

        echo "<hr/>";

        $results = $db->query($query);
        foreach($results as $studentGrade) {
            echo "Name: {$studentGrade['name']}<br/>";
            echo "Grade: {$studentGrade['grade']}<br/>";
        }
        //$results->closeCursor();
        echo "<hr/>";

        $query = "SELECT * FROM students LIMIT 10";
        $results = $db->query($query);
        $studentGrades = $results->fetchAll();
        $results->closeCursor();
        foreach($studentGrades as $studentGrade) {
            echo "Name: {$studentGrade['name']}<br/>";
            echo "Grade: {$studentGrade['grade']}<br/>";
        }

        echo "<hr/>";

        // delete 
        $delete = "DELETE FROM students WHERE NAME = 'Donald'";
        $rowsDeleted = $db->exec($delete);
        echo "Deleted $rowsDeleted rows<br/>";

        // insert
        $insert = "INSERT INTO students (name, grade) VALUES ('Donald', 75)";
        $rowsInserted = $db->exec($insert);
        echo "Inserted $rowsInserted rows<br/>";

        // update
        $update = "UPDATE students SET grade = 74 WHERE name='Donald'";
        $rowsUpdated = $db->exec($update);
        echo "Updated $rowsUpdated rows<br/>";
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
?>