<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
         /* Output HTML
            from PHP */
        echo "<div>Hello World</div>";
        echo date('Y-m-d h-i-sa'); // Year, Month, day, hour, minute, second
        echo "<br/>";
        echo 2 + 2;
        echo "<br/>"
    ?>

    <hr/>

    <!-- Im an HTML Comment -->
    <div>
    <?php 
        # Output HTML and php separately
        echo "Hello World"
    ?>
    </div>
    <?php
        echo date('Y-m-d h-i-sa')
    ?>
    <br/>
    <?php
        echo 2 + 2
    ?>
    <br/>

    <hr/>

    <div>
        <?= "Hello World" ?>
    </div>
    <?= date('Y-m-d h-i-sa') ?>
    <br/>
    <?= 2 + 2 ?>
    <br/>

</body>
</html>
