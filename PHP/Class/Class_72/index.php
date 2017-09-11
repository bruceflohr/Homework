<?php
require "autoload.php";

session_start();

$action = "shop";
if(!empty($_GET["action"])) {
    $action = $_GET["action"];
}

switch($action) {
    case "add":
        include "add.php";
        header("Location: index.php?action=shop");
        exit; // comment to fall through
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