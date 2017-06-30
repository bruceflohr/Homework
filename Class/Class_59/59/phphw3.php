<?php
    $name = "";
    $email = "";
    $age = "";
    $rating = "";

    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        //die("Name is required");
        //$name = "UNSPECIFIED";
        //$name = "NAME IS REQUIRED";
        $errors[] = "NAME IS REQUIRED";
    }
    
    if(!empty($_GET['email'])) {
        $email = $_GET['email'];
    } else {
        $errors[] = "EMAIL IS REQUIRED";
    }

    if(isset($_GET['age'])) {
        if(!is_numeric($_GET['age']) || $_GET['age'] < 0 || $_GET['age'] > 120) {
            $errors[] = "AGE MUST BE A VALID NUMBER BETWEEN 0 AND 120";
        } else {
            $age = $_GET['age'];
        }
    } else {
        $errors[] = "AGE IS REQUIRED";
    }

    if(isset($_GET['rating'])) {
        if(!is_numeric($_GET['rating']) || $_GET['rating'] < 1 || $_GET['rating'] > 10) {
            $errors[] = "RATING MUST BE A VALID NUMBER BETWEEN 1 AND 10";
        } else {
            $rating = $_GET['rating'];
        }
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
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center"><h1>The Form Results</h1></div>
    </div>
    <div class="container">
        <?php if(!empty($errors)) :?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach($errors as $error) echo "<li>$error</li>" ?>
                </ul>
            </div>
        <?php endif ?>
        <div class="row">
            <div class="col-sm-1">
                Name:
            </div>
            <div class="col-sm-2 well">
                <?= $name ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                Email:
            </div>
            <div class="col-sm-2 well">
                <?= $email ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                Age:
            </div>
            <div class="col-sm-2 well">
                <?= $age ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                Rating:
            </div>
            <div class="col-sm-2 well">
                <?= $rating ?>
            </div>
        </div>
    </div>
</body>

</html>