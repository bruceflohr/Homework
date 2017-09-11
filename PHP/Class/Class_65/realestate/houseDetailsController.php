<?php
    if (!empty($_GET['houseId'])) {
        $houseId = $_GET['houseId'];
 
        include 'houseModel.php';
        include 'houseDetailsView.php';
    } else {
        $error = "houseId is a required param";
    }
?>