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
    ];

    $selectedStockIndex = 0;
    if(!empty($_GET['stock'])) {
        if(! is_numeric($_GET['stock']) || $_GET['stock'] > count($stocks) - 1) {
            $error = "{$_GET['stock']} is an invalid stock index";
        } else {
            $selectedStockIndex = $_GET['stock'];
        }
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
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS STOCKS</h1>
        </div>
    </div>
    <div class="container">
        <?php if(!empty($error)) :?>
            <div class="alert alert-danger">
                <ul>
                <li><?= $error ?></li>
                </ul>
            </div>
        <?php endif ?>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <?php foreach($stocks[$selectedStockIndex] as $key=>$value) echo "<th class=\"text-capitalize\">$key</th>" ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($stocks[$selectedStockIndex] as $value) echo "<td>$value</td>" ?>
                </tr>
            </tbody>
        </table>
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <select class="form-control" name="stock">
                        <?php foreach($stocks as $key => $stock) : ?>
                        <!-- <?= "$key => {$stock['name']}" ?> -->
                        <option value="<?= $key ?>"
                        <?php if ($key == $selectedStockIndex) echo "selected" //== to allow conversion ?>
                        ><?= $stock['name'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>