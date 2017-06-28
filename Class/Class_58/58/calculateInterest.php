<?php
    if(isset($_POST['amount'])) {
    #if(!empty($_POST['amount'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['amount']) || $_POST['amount'] < .01) {
            die("Amount must be a number greater than 0");
        }
        $amount = $_POST['amount'];
    } else {
        exit("Amount is a required field");
    }

    if(isset($_POST['rate'])) {
    #if(!empty($_POST['rate'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['rate']) || $_POST['rate'] < .01) {
            die("Rate must be a number greater than 0");
        }
        $rate = $_POST['rate'];
    } else {
        #exit
        die("Rate is a required field");
    }

    if(isset($_POST['years'])) {
    #if(!empty($_POST['years'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['years']) || $_POST['years'] < 1) {
            die("Years must be a number greater than 0");
        }
        $years = $_POST['years'];
    } else {
        #exit
        die("Years is a required field");
    }

    $rateToUse = $rate * .01;
    $result = $amount;

    for($i = 0; $i < $years; $i++) {
        $result += $result * $rateToUse;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .well:first-of-type {
            background-color: transparent;
            border: none;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>PCS Interest Calculator</h1>
            <h2>Results</h2>
        </div>

        <div>
            <div>
                <div class="well col-sm-2 text-right">Amount</div>
                <div class="col-sm-10 well">$<?= number_format($amount, 2) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Rate</div>
                <div class="col-sm-10 well"><?= number_format($rate, 2) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Years</div>
                <div class="col-sm-10 well"><?= number_format($years) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Result</div>
                <div class="col-sm-10 well">$<?= number_format($result, 2, ".", "") ?></div>
            </div>
        </div>

    </div>
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>

</html>