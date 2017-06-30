<?php
    $stocks = [
        [
            "name" => "Alphabet",
            "ticker" => "GOOG",
            "prev" => 123.45,
            "open" => 123.56,
            "close" => 123.78
        ],
        [
            "name" => "Microsoft",
            "ticker" => "MSFT",
            "prev" => 69.45,
            "open" => 69.56,
            "close" => 69.78
        ],
        [
            "name" => "Amazon",
            "ticker" => "AMZN",
            "prev" => 923.45,
            "open" => 923.56,
            "close" => 923.78
        ]
    ]
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
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS STOCKS</h1>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <?php foreach($stocks[0] as $key=>$value) echo "<th class=\"text-capitalize\">$key</th>" ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($stocks as $stock) : ?>
                    <tr>
                        <?php foreach($stock as $value) echo "<td>$value</td>" ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>