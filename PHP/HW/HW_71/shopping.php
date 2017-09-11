<?php
    $products = [
       ["Campbell Biology (10th Edition)", "$257.00"],
       ["The Art of Public Speaking (Communication)", "$180.00"],
       ["PMP Exam Prep, Eighth Edition - Updated", "$99.00"],
       ["Nelson Textbook of Pediatrics, 2-Volume", "$169.00"],
       ["Diagnostic and Statistical Manual", "$155.00"] 
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shooping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron">
<div class="container text-center">
    <h1>Shopping Cart</h1>
</div>
</div>
<form class="form-horizontal" action="del.php" method="post">
    <div class="form-group">
        <label for="book" class="col-sm-2 control-label">Select A book</label>
        <div class="col-sm-10">
        <select class="form-control" id="book" name="book">
                <?php foreach($products as $product) :?>
                <option Value="<?=$book['name']?>, <?= $book["price"]?>"><?= $product['name'] ?> <?= $product["price"] ?></option>
                <?php endforeach ?>
        </select>

            <?php  foreach($products as $product => $rows): ?>
                <?php  foreach($rows as $row): ?>
                    <tr>
                        <td><?=$product;?></td>
                        <td><?=$row['Name'];?></td>
                        <td><?=$row['Price'];?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?>

        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </div>
    </div>
</form>
</body>
</html>