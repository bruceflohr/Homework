<?php 
    $months = [
        "January" => 31,
        "February" => 0,
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

    function getOption($text, $value = null) {
        $option = "<option";

        if($value /*!== null*/) {
            $option .= " value=\"$value\"";
        }
        
        $option .= ">$text</option>";

        return $option;
    }

    function isLeapYear($year) {
        return $year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0);
    }

    function getDays($month, $year/*, $months*/) {
        global $months;

        if($month === "February") {
            return isLeapYear($year) ? 29 : 28;
        }
        
        //echo "The months array is: ";
        //print_r($months);
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
    } 

    if(! empty($_GET["month"])) {
        $month = $_GET["month"];
        $daysInMonth = getDays($month, $year/*, $months*/);
    }

    include "top.php"
?>
    <?php if(!empty($daysInMonth)) : ?>
    <h2>There are <?= $daysInMonth ?> days in <?= $month ?> <?= $year ?></h2>
    <?php endif ?>
    <form>
        <label for="month">Month</label>
        <select name="month" id="month">
            <?php foreach($months as $key=>$month) echo /*"<option>$month</option>"*/ getOption($key) ?>
            <!--option>January</option>
            <option>February</option-->
        </select>

        <label for="year">Year</label>
        <!--input type="number" min="1582" max="2500" name="year" id="year"/-->
        <select name="year" id="year">
            <?php for($year = 1582; $year < 2501; $year++) echo /*"<option>$year</option>"*/ getOption($year/*, $year + 1*/) ?>
            <!--option>1582</option>
            <option>1583</option-->
        </select>

        <input type="submit"/>
    </form>
<?php
include "bottom.php"
?>