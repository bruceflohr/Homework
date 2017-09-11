<?php
require_once "httpsonly.php";
session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['returnTo'] = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    http_response_code(401); // not working - getting 302
    header("Location: login.php", true, 401); // working - getting 401
    exit;
}

?>