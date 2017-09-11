<?php
$today = date("F j, Y, g:i a T");  

    if(!isset($_COOKIE["firstVisit"])){
        echo "Welcome<br/>";
        echo $today;  
        setCookie("firstVisit", $today);
    } else {
        echo "Welcome back<br/>";
        echo $_COOKIE["firstVisit"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Tracker</title>
</head>
<body>
</body>
</html>