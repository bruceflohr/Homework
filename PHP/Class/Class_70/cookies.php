<?php
    //setCookie("Cookie1", "A small step for a man", time()+30);
    

    if(!empty($_GET["color"])){
        $color = $_GET["color"];
    } 

    if(!empty($_COOKIE["ColorCookie"])){
        $color = $_COOKIE["ColorCookie"];
    } else {
        $color = "white";
    }

    setCookie("ColorCookie", "$color", time() - (60 * 60));

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Cookies</title>
</head>
<style>
    body {
        background-color: <?= $color ?>;
    }
</style>
<body>
    <h1>Cookies</h1>
    <form>
    <input type="color" name="color">
    <input type="submit">
    
    </form>
</body>
</html>
