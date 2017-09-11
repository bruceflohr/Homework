<?php 
if(empty($title)) {
    $title = "Unnamed Page";
}
if(empty($logo)) {
    $logo = "candy.png";
};

if(! empty($_GET["color"])) {
    $color = $_GET["color"];
} else {
    $color = "#000000";
}

if(! empty($_GET["font-family"])) {
    $fontFamily = $_GET["font-family"];
} else {
    $fontFamily = "sans-serif";
}

$fonts = [
    "serif",
    "sans-serif",
    "cursive",
    "fantasy",
    "monospace"
];

//$params = "?color=" . urlencode("$color") . "&font-family=" . urlencode($fontFamily);
$params = "";
//$delimiter = "?";
foreach($_GET as $key=>$value) {
    //$params .= $delimiter;
    $params .= empty($params) ? "?" : "&";
    $params .= "$key=" . urlencode($value);
    //$delimiter = "&";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            width: 80%;
            margin: 0 auto;
            padding-bottom: 1em;
            color: <?= $color ?>;
            font-family: <?= $fontFamily ?>;
        }

        header {
            text-align: center;
        }

        header img {
            width: 456px;
            height: 257px;
        }

        ul {
            padding: 0;
            list-style-type: none;
            text-align: center;
        }

        li {
            display: inline-block;
            margin: 6px;
        }

        a {
            text-decoration: none;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        footer p {
            width: 80%;
            margin: 0 auto;
            background-color: white;
        }
    </style>
</head>

<body>
    <header>
        <img src="<?= $logo ?>" alt="Candy" />
        <h1>PCS Candy Store</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php<?= $params ?>">Home</a></li>
            <li><a href="page1.php<?= $params ?>">Page 1</a></li>
            <li><a href="page2.php<?= $params ?>">Page 2</a></li>
            <li><a href="page3.php<?= $params ?>">Page 3</a></li>
        </ul>
    </nav>
    <form>
        <label>Font Color: <input type="color" name="color" value="<?= $color ?>"/></label>
        <label>Font Chooser:
            <select name="font-family">
                <?php foreach($fonts as $font) : ?>
                <option 
                <?php if ($font === $fontFamily) echo "selected" ?>
                ><?= $font ?></option>
                <?php endforeach ?>
            </select>
        </label>
        <input type="submit"/>
    </form>
    <h2><?= $title ?></h2>