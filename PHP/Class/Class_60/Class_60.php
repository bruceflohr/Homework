<?php
        $name = "";
        $years = "";
        $languages = "";


        if($_SERVER['REQUEST_METHOD'] === "GET") {
            if(isset($_GET['name'])) {
                if(empty($_GET['name'])) {
                        $errors['name'] = "You forgot to enter your name";
                }
                $name = $_GET['name'];
                $errors['name'] = "Thank you for submitting your data";
            }

            if(isset($_GET['years'])){
                if(!is_numeric($_GET['years']) || $_GET['years'] < 0){
                    $errors['years'] = "years must be a number greater than 0";
                } elseif ($_GET['years'] > 50){
                    $errors['years'] = "years must be a number less than 50";
                }else{
                    $years = $_GET['years'];
                }
            }

            if(empty($errors)){
                $valid = true;
            }
        }
                    

    $languages = [
        
        [
            "lang" => "Objective-Script"
        ],
        [
            "lang" => "JavaScript"
        ],
        [
            "lang" => "Python"
        ],
        [
            "lang" => "Shell"
        ],
        [
            "lang" => "Java"
        ],
        [
            "lang" => "Ruby"
        ],
        [
            "lang" => "C++"
        ],
        [
            "lang" => "C"
        ]

    ];

    $selectedlanguages = [0];
    if(!empty($_GET['lang'])) {
        $selectedlanguages = $_GET['lang'];
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW_59B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <style>
        .error{
            color: red;
        }

        .error label::before{
            content: "* ";
            padding-left: 5px;
        }

        .error input{
            border-color: red;
        }        
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Class 60</h1>
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

        <?php foreach($languages[0] as $key=>$value)
                foreach($selectedlanguages as $index) 
                    foreach($languages[$index] as $value) ?>

        <form class="form-horizontal">
             <?php if (isset($errors)) : ?>
            <div class="well text-danger">
                <ul>
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>

             <div class="form-group
            <?php if(array_key_exists("name", $errors)) echo "error" ?>
             ">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name" name="name" placeholder="Name" xrequired
                        value="<?= $name ?>"
                    >
                </div>
            </div>

            <div class="form-group
            <?php if(array_key_exists("years", $errors)) echo "error" ?>">
                <label for="years" class="col-sm-2 control-label">Years Coding</label>
                <div class="col-sm-10">
                    <input type="number" min="0" max="50" step="1" class="form-control" id="years" name="years" placeholder="Years Coding" xrequired
                        value="<?= $years ?>"
                    >
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <select class="form-control" name="lang[]" multiple>
                        <?php foreach($languages as $key => $language) : ?>
                        <option value="<?= $key ?>"
                            <?php if (in_array($key, $selectedlanguages)) ?>
                            ><?= $language['lang'] ?>
                        </option>
                        <?php endforeach?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-default">Submit</button> 
                </div>
            </div>
            
            <hr>
            <div class="form-group">
            <label class="col-sm-offset-1 col-sm-1 ">Name</label>
                <div class="col-sm-10">
                    <?= "$name" ?>
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-offset-1 col-sm-1 ">Years Coding</label>
                <div class="col-sm-10">
                    <?= "$years" ?>
                    
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-offset-1 col-sm-1 ">Language</label>
                <div class="col-sm-10">
                    <?= "$value" ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>