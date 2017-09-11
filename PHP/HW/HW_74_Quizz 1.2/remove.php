<?php
    if(!empty($_GET["item"])) {
        $item = $_GET["item"];
    } else {
        die("No item to remove!");
    }

    $cart = Cart::getInstance();
    $cart->removeItem($item);
?>