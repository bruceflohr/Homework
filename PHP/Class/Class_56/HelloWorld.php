<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <! HTML Comment -->
    <?php 
    /* Comment
    Multi line */

    // Comment

    # Comment

        echo "<div>Hello World</div>";
        echo date(" Y-m-d h-i-sa ");
        echo "<br>";
        echo 2+2;
    ?>
    <hr>
    <div>
        <?php  echo "Hello World"; ?> <br/>
        <?php echo date(" Y-m-d h-i-sa "); ?> <br/>
        <?php echo 2+2; ?>
    </div>
    <hr>
    <div>
        <?= "Hello World"; ?>
    <br/>
        <?= date(" Y-m-d h-i-sa "); ?>
    <br/>
        <?= 2+2; ?>
    </div>

</div>
</body>
</html>

