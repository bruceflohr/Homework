<?php

    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected<br/>";
        echo "<hr/>";

        $query = "SELECT * FROM real_estate LIMIT 10";
        $results = $db->query($query);
        $homes = $results->fetchAll();
        $results->closeCursor();
        /*foreach($homes as $home) {
            echo "Id: {$home['id']}</br>";
            echo "Address: {$home['address']}</br>";
            echo "City: {$home['address']}</br>";
            echo "State: {$home['address']}</br>";
            echo "Zip: {$home['address']}</br>";
            echo "Price: $ {$home['price']}</br>";
            echo "Image: {$home['image']}</br>";
        }*/
        
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zillow</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <style>
        body {
            width: 80%;
            margin: 0 auto;
        }

        header {
            text-align:center;
        }
        .house img {
            width: 131.24px;
            height: 98px;
        }
        .house2 img {
            width: 262.500px;
            height: 196.875px;
        }
    </style>
</head>  
    <div class="jumbotron text-center">
        <h1>Zillow</h1>
    </div>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Price</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($homes as $home) :?>
                <tr class="house">
                    <td>$<?= number_format($home['price'], 2) ?></td>
                    <td><?= $home['address'] ?></td>
                    <td><?= $home['city'] ?></td>
                    <td><?= $home['state'] ?></td>
                    <td><?= $home['zip'] ?></td>
                    <td><img src= "<?= $home['image'] ?>" alt="the house"/></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <?php foreach($homes as $home) :?>
            <div class="col-md-3 col-sm-4 house2">
                <figure>
                    <img src="<?= $home['image'] ?>" alt="picture of the house"/>
                </figure>
                <figcaption class="text-center">
                    <h3>$<?= number_format($home['price'], 2) ?></h3>
                    <h4><?= $home['address'] ?></h4>
                    <h5><?= "{$home['city']}, {$home['state']} {$home['zip']}"?></h5>
                </figcaption>
            </div>
        <?php endforeach ?>
    </div>
</html>