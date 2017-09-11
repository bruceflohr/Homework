<?php
require "autoload.php";

session_start();

$action = "login";
if(!empty($_GET["action"])) {
    $action = $_GET["action"];
}

switch($action) {
    case "login":
    include "login.php";
        header("Location: login.php");
        exit; 
    case "add":
        include "add.php";
        header("Location: index.php?action=shop");
        exit; 
    case "shop":
        include "shop.php";
        exit;
    case "view":
        include "view.php";
        exit;
    case "clear":
        include "clear.php";
        header("Location: index.php?action=shop");
        exit;
    case "remove":
        include "remove.php";
        header("Location: index.php?action=view");
        exit;
    default:
        die("Dont know how to $action");
}
?>