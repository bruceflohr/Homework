<?php

include_once "top.php";

class Cart {
    private static $instance;

    private function __construct() {
        if(empty($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addItem($item, $quantity) {
        if(!empty($_SESSION['cart'][$item])) {
            $quantity += $_SESSION['cart'][$item];
        }
        $_SESSION['cart'][$item] = $quantity;
    }

    public function removeItem($item) {
        unset($_SESSION['cart'][$item]);
    }

    public function clear() {
        $_SESSION['cart'] = [];
    }

    public function getItems() {
        return $_SESSION['cart'];
    }

    public function getInstance() {
        if(empty(Cart::$instance)) {
            Cart::$instance = new Cart();
        }
        return Cart::$instance;
    }
}
?>