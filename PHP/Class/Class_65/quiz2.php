<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "phpuser";
    $password = 'p@$$w0rd';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

        if(!empty($_POST['studentToDelete'])) {
            $query = "DELETE FROM students WHERE name = :name";
            $statement = $db->prepare($query);
            $statement->bindValue("name", $_POST['studentToDelete']);
            $statement->execute();
            if(!$statement->rowCount()) {
                $error = "Failed to delete {$_POST['studentToDelete']}";
            }
        }
        
        $query = "SELECT name, grade FROM students";
        $results = $db->query($query);

        $studentsGrades = $results->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP);
        print_r($studentsGrades);
        echo "<hr>";
        
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
    form {
        margin-bottom: 0;
    }
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($studentsGrades as $name => $grades) :?>
                    <tr>
                        <td><?= $name ?></td>
                        <?php foreach($grades as $grade) :?>
                        <td><?= $grade ?></td>
                        <?php endforeach ?>
                        <td>
                        <!--a href="quiz2.php?student=<?= $name ?>">delete</a-->
                            <form method="post">
                                <input type="hidden" value="<?= $name ?>" name="studentToDelete"/>
                                <input type="submit" value="delete" class="btn btn-danger" />
                            </form>
                        </td>
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