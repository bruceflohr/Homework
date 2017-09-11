<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "bruce";
    $password = 'pass';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected<br/>";
        echo "<hr/>";

        $query = "SELECT * FROM real_estate";
        $results = $db->query($query);
        $homes = $results->fetchAll();
        $results->closeCursor(); 
    
    if(isset($_GET['address'])) {
            if(empty($_GET['address'])) {
                $error = "A valid address must be submitted";
                $address = $_GET['address'];
            } else {
                echo $_GET['address'];
                $address = $_GET['address'];
            }
    }
    if(isset($_GET["city"])) {
            if(empty($_GET["city"])) {
                $error = "A valid city must be submitted";
                $city = $_GET["city"];
            } else {
                echo $_GET["city"];
                $city = $_GET["city"];
            }
    }
    if(isset($_GET["state"])) {
            if(empty($_GET["state"])) {
                $error = "A valid state must be submitted";
                $state = $_GET["state"];
            } else {
                echo $_GET["state"];
                $state = $_GET["state"];
            }
    }
    if(isset($_GET["zip"])) {
            if(empty($_GET["zip"])) {
                $error = "A valid zip must be submitted";
                $zip = $_GET["zip"];
            } else {
                echo $_GET["zip"];
                $zip = $_GET["zip"];
            }
    }
    if(isset($_GET["price"])) {
            if(empty($_GET["price"])) {
                $error = "A valid price must be submitted";
                $price = $_GET['price'];
            } else {
                echo "$" . $_GET["price"];
                $price = $_GET["price'"];
            }
    }
    if(isset($_GET["image"])) {
            if(empty($_GET["image"])) {
                $error = "A valid Image must be submitted";
                $image = $_GET["image"];
            } else {
                echo $_GET["image"];
                $image = $_GET["image"];
            }
    }

$query = "INSERT INTO real_estate (address, city, state, zip, price, image) VALUES ( NULL, $address, $city, $state, $zip, $price, $image )";

    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add to datebase</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <style>
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Real Estate Database</h1>
        </div>
    </div>
    <div class="container">
        <form class="form-horizontal" action="realEstate.php" method="get">
            <div class="form-group">
                <label for="home" class="col-sm-2 control-label">Select A home</label>
                <div class="col-sm-10">
                <select class="form-control" id="home" name="home">
                        <?php foreach($homes as $home) :?>
                        <option value="<?= $home['address'] ?>"
                        <?php if (!empty($Home)) echo "selected" ?> <?php// if (!empty($selectedHome) && $home['id'] == $selectedHome['id']) echo "selected" ?>
                        <?= $home["address"] ?> <?= $home["city"] ?> <?= $home["state"] ?> <?= $home["zip"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">View Home</button>
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="State" name="State" placeholder="Two letter State" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="zip" class="col-sm-2 control-label">Zip</label>
                <div class="col-sm-10">
                    <input type="number" min="1" max="99999" class="form-control" id="zip" name="zip" placeholder="Zip" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image URL" xrequired>
                </div>
            </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Add to database</button>
                </div>
            </div>
        </form>
    </div>

        <?php if(!empty($selectedHome)) : ?>
            <h2 class="text-center">
                <?= $selectedHome['name'] ?> is $<?= number_format($selectedHome['price'], 2) ?>
            </h2>
        <?php endif ?>

        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php endif ?>
    </div>
</body>

</html>