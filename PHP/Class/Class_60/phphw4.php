<?php
$name = '';
$codingYears = '';
$favoriteLanguages = '';
$errorFields = [];

if($_SERVER['REQUEST_METHOD'] == "POST") {
//if(isset($_GET["name"]) || isset($_GET["codingYears"]) || isset($_GET["favoriteLanguage"])) {
    if(empty($_POST["name"])) {
        //$errors["name"] = "Name is a required field";
        $errors[] = "Name is a required field";
        $errorFields["name"] = true;
    } else {
        $name = $_POST["name"];
    }

    if(!isset($_POST["codingYears"])) {
        //$errors["codingYears"] = "Years coding is a required field";
        $errors[] = "Years coding is a required field";
        $errorFields["codingYears"] = true;
    } else {
        if(!is_numeric($_POST["codingYears"]) || $_POST["codingYears"] < 0 || $_POST["codingYears"] > 50) {
                $errors[] = "Years coding must be a number between 0 and 50";
                $errorFields["codingYears"] = true;
        } 
        $codingYears = $_POST["codingYears"];
    }

    $languages = [
        "JAVA",
        "SQL",
        "PHP",
        "HTML",
        "JAVASCRIPT"
    ];

    if(empty($_POST["favoriteLanguages"])) {
        //$errors["favoriteLanguages"] = "Favorite Language is a required field";
        $errors[] = "Favorite Languages is a required field";
        $errorFields["favoriteLanguages"] = true;
    } else {
        /*for($i = 0; $i < count($languages); $i++) {
            if (trim(strtoupper($_POST["favoriteLanguages"])) === strtoupper($languages[$i])){
                break;
            }
        }
        if($i == count($languages)) {
            $errors["favoriteLanguages"] = "{$_POST["favoriteLanguages"]} is not an acceptable programming language";
        }*/
        $userLanguages = explode(",", $_POST["favoriteLanguages"]);
        foreach($userLanguages as $language) {
            if(!in_array(trim(strtoupper($language)), $languages)) {
                //$errors["favoriteLanguages"] = "{$_POST["favoriteLanguages"]} is not an acceptable programming language";
                $errors[] = "{$language} is not an acceptable programming language";
                $errorFields["favoriteLanguages"] = true;
            }
        }
        $favoriteLanguages = $_POST["favoriteLanguages"];
    }

    if(empty($errors)) {
        $valid = true;
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
        .error {
            color: red;
        }

        .error label::before {
            content: "*";
            padding-right: 4px;
        }

        .error input {
            border-color: red;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS Questionnaire</h1>
        </div>
    </div>
    <div class="container">
        <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($errors as $error) echo "<li>$error</li>" ?>
            </ul>
        </div>
        <?php elseif(isset($valid)) : ?>
        <div class="alert alert-success">
            <ul>
                <p>Thank you for submitting your information</p>
            </ul>
        </div>
        <?php endif ?>


        <form class="form-horizontal" method="post">
            <div class="form-group
            <?php if(/*isset($errorFields) &&*/ array_key_exists("name", $errorFields)) echo "error" ?>
            ">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" xrequired
                        value="<?=$name?>"
                    >
                </div>
            </div>
            <div class="form-group 
            <?php if(array_key_exists("codingYears", $errorFields)) echo "error" ?>
            ">
                <label for="codingYears" class="col-sm-2 control-label">Number of years coding</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="codingYears" name="codingYears" placeholder="Years Coding" min="0" max="50" xrequired
                        value="<?=$codingYears?>"
                    >
                </div>
            </div>
            <div class="form-group
                <?php if(array_key_exists("favoriteLanguages", $errorFields)) echo "error" ?>
            ">
                <label for="favoriteLanguages" class="col-sm-2 control-label">Favorite Languages</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="favoriteLanguages" name="favoriteLanguages" placeholder="Favorite Languages (comma delimited)" xrequired
                        value="<?=$favoriteLanguages?>"
                    >
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>