<?php
if(!empty($_GET["url"])){
    $allowList = [
        "https://www.google.com",
        "https://www.yahoo.com"
    ];
    echo file_get_contents($_GET["url"]);

    if(in_array($allowList)){
        echo file_get_contents($_GET["url"]);
    }
    http_response_code(500);
    exit("not allowed");
}
    //echo file_get_contents("https://www.google.com");
?>

