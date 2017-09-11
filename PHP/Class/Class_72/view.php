<?php
    $cart = Cart::getInstance();
    $items = $cart->getItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container jumbotron text-center">
    <div class="container">
    <?php 
    if(!empty($items)) {
        foreach($items as $key=>$value) { 
            ?> <h2><?= "$value of $key" . '<a href="index.php?action=remove&item=' . $key . '"> remove item</a><br>'; ?></h2> <?php
        }
    } else {
        ?> <h2><?= "You have no items in your cart<br>"; ?></h2> <?php
    }
    ?>

    <a class="btn btn-primary" href="index.php?action=shop">Back to shopping</a>
    <a class="btn btn-primary" href="index.php?action=clear">Empty Cart</a>
</div>
    </div>
</body>
</html>