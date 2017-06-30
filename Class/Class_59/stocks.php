  <?php
    $stock = [
        [
        "name" => "Google",
        "ticker" => "GOOG",
        "prev" => 123.45,
        "open" => 127.45,
        "close" => 129.45
        ],
                [
        "name" => "Microsoft",
        "ticker" => "MSFT",
        "prev" => 69.45,
        "open" => 77.45,
        "close" => 1249.45
        ],
                [
        "name" => "Amazon",
        "ticker" => "AMZN",
        "prev" => 990.45,
        "open" => 890.45,
        "close" => 992.45
        ]
    ];

    $selectedStockIndedx = 0;
    if(!empty($_GET['stock'])){ 
       if(!is_numeric($_GET['stock']) || $_GET['stock'] > count($stock) - 1) {
            $error = "{$_GET['stock']} is an invalid stock index";
        } else{
            $selectedStockIndedx = $_GET['stock'];
        }   
    }
        

  ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Class 59 Stocks</title>
            <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <style>
            th{
                text-transform: capitalize;
            }
        </style>

        <body>
            <div class="container">
                <div class="jumbotron text-center">
                    <h1>Stock Market</h1>
                </div>
                <div class="container">
                <?php if (isset($errors)) : ?>
                    <div class="well text-danger jumbotron">
                        <ul>
                            <?php foreach($errors as $error) : ?>
                                <li><?= $error ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <?php
                                    foreach($stock[0] as $key=>$value) echo '<th class="text-capitalize">' .  $key . '</th>'
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($selectedStock as $index) :?>
                            <tr>
                                <?php foreach($stock[$index] as $key=>$value) echo "<td>$value</td>" ?>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

        <form class="form-horizontal">

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <select class="form-control" name="stock[]" multiple>
                        <?php foreach($stock as $key => $stock) : ?>
                        <!-- <?php "$key => {$stock['name']}" ?> -->
                        <option value="<?= $key ?>"
                        <?php if(in_array($key, $selectedStock)) echo "selected" ?>
                        ><?php $stock['name']?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
                </div>

            </div>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
                crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        </body>

        </html>