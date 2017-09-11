 <?php
    #print_r($_SERVER);

    if($_SERVER["REQUEST_METHOD"] === "GET")
    {
        $name = $_GET["name"];
        $age = $_GET["age"];
        $email = $_GET["email"];
    } else{
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
    }

    echo "Hello $name who is $age years old. I will send you my email to $email";
 ?>
 <h1> You Submitted </h1>

 <h2>$_GET</h2>
<?php
    print_r($_GET);
?>

<h2>$_POST</h2>
<?php
    print_r($_POST);
?>