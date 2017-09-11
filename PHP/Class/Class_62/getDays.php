<?php
    function isLeapYear($year) {
        return $year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0);
    }

    function getDays($month, $year) {
        $months = [
            "January" => 31,
            "March" => 31,
            "April" => 30,
            "May" => 31,
            "June" => 30,
            "July" => 31,
            "August" => 31,
            "September" => 30,
            "October" => 31,
            "November" => 30,
            "December" => 31
        ];

        if($month === "February") {
            return isLeapYear($year) ? 29 : 28;
        }
        
        if (empty($months[$month])) {
            die("$month is not a valid month");
        }

        return $months[$month];
    }

    if(! empty($_GET["year"])) {
        $year = $_GET["year"];
        if (!is_numeric($year) && $year < 1582) {
            die("Year must be a number greater than 1581");
        }
    } else {
        die("Year is a required field");
    }

    if(! empty($_GET["month"])) {
        $month = $_GET["month"];
        $daysInMonth = getDays($month, $year);
    } else {
        die("Month is a required field");
    }

include "top.php"
?>
<h2>There are <?= $daysInMonth ?> days in <?= $month ?> <?= $year ?></h2>

<a href="index.php">Back to month / year chooser</a>

<?php
include "bottom.php"
?>