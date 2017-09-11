<?php

    function sayHello() {
        //echo "Hello!";
        return "Hello<br>";
    }

    echo sayHello();

    function addNumbers($a, $b, $c = 0, $d = 0) {
        return $a + $b + $c + $d;
    }

    echo addNumbers(1, 2, 3) . "<br>";
    echo addNumbers(1, 2) . "<br>";

    echo addNumbers(1, 2, 3, 4, 5) . "<br>";

    function addManyNumbers($a, $b) {
        $args = func_get_args();
        $total  = 0;
        foreach($args as $arg) {
            $total += $arg;
        }
        return $total;
    }

    echo addManyNumbers() . "<br>";
    echo addManyNumbers(1, 2, 3, 4, 5) . "<br>";
?>