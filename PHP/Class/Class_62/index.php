<?php 
    $months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];

    function getOption($text, $value = null) {
        $option = "<option";

        if($value !== null) {
            $option .= " value=\"$value\"";
        }
        
        $option .= ">$text</option>";

        return $option;
    }

    include "top.php"
?>
    <form action="getDays.php">
        <label for="month">Month</label>
        <select name="month" id="month">
            <?php foreach($months as $key=>$month) echo /*"<option>$month</option>"*/ getOption($month/*, $key*/) ?>
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