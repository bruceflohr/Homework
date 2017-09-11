<?php
    if(!empty($_POST["item"])) {
        $item = $_POST["item"];
    } else {
        die("No item to add!");
    }

    if(!empty($_POST["quantity"])) {
        $quantity = $_POST["quantity"];
    } else {
        die("No quantity to add!");
    }

    $cart = Cart::getInstance();
    $cart->addItem($item, $quantity);
?>