<?php
if(empty($color)) {
    $color = "black";
}

$bgcolor = "white";
if(!empty($_GET["bgcolor"])) {
    $bgcolor = $_GET["bgcolor"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <?php foreach($stylesheets as $stylesheet) :?>
        <link href="<?=$stylesheet?>" rel="stylesheet">
    <?php endforeach ?>
    <style>  
        body {
            color: <?= $color ?>;
            background-color: <?= $bgcolor ?>;
        }

        <?php 
        if(!empty($styles)) {
            foreach($styles as $style) {
                echo $style;
            }
        }
        ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>PCS Interest Calculator</h1>
        </div>