<?php
    $presidents = [
        ["Donald J Trump", "2017-"],
        ["Barack H Obama", "2009-2016"],
        ["George W Bush", "2001-2008"]
    ];

    $presidents2 = [
        ["name" => "Donald J Trump", "years" => "2017-"],
        ["name" => "Barack H Obama", "years" => "2009-2016"],
        ["name" => "George W Bush", "years" => "2001-2008"]
    ];

    $presidents3 = [
        ["name" => "Donald J Trump", "years" => "2017-", "age" => 70],
        ["name" => "Barack H Obama", "years" => "2009-2016", "age" => 47],
        ["name" => "George W Bush", "years" => "2001-2008", "age" => 52],
        ["flavor" => "Chocolate", "Calories" => 225, "servings per container" => 3, "calories from fat" => "2 grams"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
            <h1>US Presidents</h1>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>President</th>
                    <th>Years in office</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($presidents); $i++) { ?>
                <tr><td> <?=$presidents[$i][0]?> </td><td> <?=$presidents[$i][1]?> </td></tr>
                <?php } ?>
            </tbody>
        </table>

        <hr/>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>President</th>
                    <th>Years in office</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($presidents2); $i++) { ?>
                <tr><td> <?=$presidents2[$i]["name"]?> </td><td> <?=$presidents2[$i]["years"]?> </td></tr>
                <?php } ?>
            </tbody>
        </table>

        <hr/>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <?php foreach($presidents3[0] as $key=>$value) { ?>
                    <th class="text-capitalize"><?= $key ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($presidents3 as $president) { ?>
                <tr>
                    <?php foreach($president as $value) { ?>
                        <td> <?=$value?> </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr/>
        <!-- Alternate php syntax -->
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <?php foreach($presidents3[0] as $key=>$value) : ?>
                    <th class="text-capitalize"><?= $key ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($presidents3 as $president) : ?>
                <tr>
                    <?php foreach($president as $value) : ?>
                        <td> <?=$value?> </td>
                    <?php endforeach ?>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php
            $x = 5;

               if($x === 1) :
        ?>
                <h2> x is 1</h2>
        <?php  elseif($x === 2 ) : ?>
                <h2> x is 2</h2>
        <?php else : ?>
                <h2> x is not 1 or 2</h2>
        <?php endif ?>

    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
  </body>
</html>