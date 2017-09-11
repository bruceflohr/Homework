<?php
    $weathers = [
        "08701" => [
            "place" => "Lakewood, NJ",
            "degrees" => "87",
            "icon" => "sunny"
        ],
         "11230" => [
            "place" => "Brooklyn, NY",
            "degrees" => "85",
            "icon" => "rainy"
        ],
         "10010" => [
            "place" => "New York, NY",
            "degrees" => "31",
            "icon" => "snowy"
        ],
         "90210" => [
            "place" => "Los Angeles, CA",
            "degrees" => "99",
            "icon" => "stormy"
        ],
         "02135" => [
            "place" => "Boston, MA",
            "degrees" => "66",
            "icon" => "cloudy"
        ],
         "33018" => [
            "place" => "Miami, FL",
            "degrees" => "87",
            "icon" => "partly-cloudy"
        ]
    ];

    $zip = "";
    if(!empty($_GET['zip'])) {
        $zip = $_GET['zip'];

        /*$vertical = "top";
        $verticalAmount = 0;
        $horizontal = "left";*/

        if (! empty($weathers[$zip])) {
            $weather = $weathers[$zip];

            /*switch($weather["icon"]) {
                case "partly-cloudy":
                    $horizontal = "right";
                    break;
                case "snowy":
                    $vertical = "bottom";
                    break;
                case "stormy":
                    $horizontal = "right";
                    $vertical = "bottom";
                    break;
                case "cloudy":
                    $vertical = "bottom";
                    $verticalAmount = "-197px";
                    break;
                case "rainy":
                    $vertical = "bottom";
                    $verticalAmount = "-197px";
                    $horizontal = "right";
                    break;
            }*/
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
        .weather-pic {
            width: 219px;
            height: 197.67px;
            background-image: url("weather_symbols.png");
            margin: 0 auto;
            /*background-position: <?= "$vertical $verticalAmount $horizontal 0"?>;*/
        }

        .partly-cloudy {
            background-position: top 0 right 0;
        }

        .snowy {
            background-position: bottom 0 left 0;
        }

        .stormy {
            background-position: bottom 0 right 0;
        }

        .cloudy {
            background-position: bottom -197px left 0;
        }

        .rainy {
            background-position: bottom -197px right 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="zip" placeholder="Enter Your Zip Code" value="<?= $zip ?>">
                </div>
                <button type="submit" class="btn btn-default">Get Weather</button>
            </form>
        </div>
        <div class="row text-center">
            <?php if (! empty($weather)) : ?>
            <figure>
                <div class="weather-pic <?= $weather["icon"] ?>"></div>
            </figure>
            <figcaption>
                <h2 class="text-capitalize"><?= $weather["icon"] ?></h2>
                <h2 class="text-capitalize"><?= $weather["degrees"] ?> Degrees</h2>
                <h3 class="text-capitalize"><?= $weather["place"] ?></h3>
            </figcaption>
            <?php elseif (!empty($zip)) : ?>
            <h2>Sorry, there is no weather in <?= $zip ?></h2>
            <?php else : ?>
            <p>Please enter a zip code</p>
            <?php endif ?>
        </div>
    </div>
</body>

</html>