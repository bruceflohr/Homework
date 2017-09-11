<?php
require "httpsonly.php";

$password = 'p@$$w0rd';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "$password = $hash<br>";

if(!password_verify("x".$password, $hash)) {
    die("Password no good");
}
?>
My social is 123-45-6789