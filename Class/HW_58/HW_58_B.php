<?php

    $name = "";
    $age = "";
    $email = "";
    $rate = "";

    if($_SERVER['REQUEST_METHOD'] === "POST") {
    if(isset($_POST['name'])) {
        if(empty($_POST['name'])) {
                $errors[] = "You forgot to enter your name";
        }
        $name = $_POST['name'];
    }
    echo nl2br("Name: $name \n");
    

        if(isset($_POST['age'])){
            if(!is_numeric($_POST['age']) || $_POST['age'] < 1){
                $errors[] = "Age must be a number greater than 0";
            } elseif ($_POST['age'] > 120){
                $errors[] = "Age must be a number less than 120";
            }else{
                $age = $_POST['age'];
            }
        }
        echo nl2br("Age: $age \n");

        if(isset($_POST['email'])){
            if(empty($_POST['email'])){
                $errors[] = "Please enter a valid email";
            } else {
                $email = $_POST['email'];
            }
        }
        echo nl2br("Email: $email \n");

        if(isset($_POST['rate'])){
            if(!is_numeric($_POST['rate'])){
                $errors[] = "Rating must be a number greater than 0";
            } elseif ($_POST['rate'] > 10){
                $errors[] = "Rating must be a number less than 10";
            } else {
                $rate = $_POST['rate'];
            }
        }
        echo nl2br("Rating: $rate \n");
    }
?>

<?php
    /*
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $rate = $_POST["rate"];
    } 
    echo nl2br("Name: $name \n");
    echo nl2br("Age: $age \n");
    echo nl2br("Email: $email \n");
    echo ("Rating [$rate]"); 
    */
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW_58 - B</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .well:first-of-type {
            background-color: transparent;
            border: none;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>PCS Interest Calculator</h1>
        </div>

        <form class="form-horizontal" method="post">
            <?php if (isset($errors)) : ?>
            <div class="well text-danger">
                <ul>
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name" name="name" placeholder="Name" xrequired
                        value="<?= $name ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" min="1" max="120" step="1" class="form-control" id="age" name="age" placeholder="Age" xrequired
                        value="<?= $age ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" step="1" class="form-control" id="email" name="email" placeholder="Email" xrequired
                        value="<?= $email ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="rate" class="col-sm-2 control-label">Rating</label>
                <div class="col-sm-10">
                    <input type="number" min="1" max="10" step="1" class="form-control" id="rate" name="rate" placeholder="Rating" xrequired
                        value="<?= $rate ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>

</html>