<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "phpuser";
    $password = 'p@$$w0rd';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT name FROM students GROUP BY name";
        $results = $db->query($query);

        $students = $results->fetchAll(PDO::FETCH_COLUMN);
        print_r($students);
        echo "<hr>";
        $query = "SELECT grade FROM students WHERE name = :name";
        $statement = $db->prepare($query);
        foreach($students as $student) {
            $statement->bindValue('name', $student);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN);
            $studentsGrades[$student] = $results;
            print_r($results);
            echo "<hr>";
        }

        print_r($studentsGrades);
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Quiz</h1>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Grade 1</th>
                    <th>Grade 2</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($studentsGrades as $name => $grades) :?>
                    <tr>
                        <td><?= $name ?></td>
                        <?php foreach($grades as $grade) :?>
                        <td><?= $grade ?></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php endif ?>
    </div>
</body>

</html>