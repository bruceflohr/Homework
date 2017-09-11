<?php
    $presidents = array ("Donald J Trump", "BaracK H Obama", "Goerge W Bush");
    $presidents = ["Donald J Trump", "Baracl Obama", "Goerge Bush"];

    for($i = 0; $i < 3; $i++){
        echo $presidents[$i] . "<br/>";
    }

    echo "<br/>";

    $length = count($presidents);
    for($i = 0; $i < $length; $i++){
        echo $presidents[$i] . "<br/>";
    }

    echo "<br/>";

    print_r($presidents);

    echo "<br/>";

    var_dump($presidents);

    echo "<br/>";

    $person = [
        "name" => "Sam", 
        "age" => 21/*,
        0 => "Sam",
        1 => 21 */
    ];

    print_r($person);

    echo "<br/>";

    echo "{$person["name"]} is {$person ["age"]} <br/>";

    echo "<br/>";

    $presidents [] = "Bill J Clinton";

    print_r($presidents);

    echo "<br/>";

    $person [] = "sam@gmail.com";

    print_r($person);

    echo "<br/>";

    $person [5] = "123 Some Street";
    $person [] = "Lakewood";

    print_r($person);

    echo "<br/>";

   $students = [
        [
            "Name" => "Bob",
            "Grade" => 92
        ],
         [
            "Name" => "Joe",
            "Grade" => 87
        ]
    ]; 
     /*   $students = [
        "Bob" => [
            "Name" => "Bob",
            "Grade" => 92
        ],
         "Joe" =>[
            "Name" => "Joe",
            "Grade" => 87
        ]
    ]; */

    print_r($students);

    echo "<br/>";

    for($i = 0; $i < count($students); $i++){
        echo $students[$i]["Name"] . " " .  $students[$i]["Grade"] . "<br/>";
    }

    echo "<br/>";

       $students = [
        "Bob" => [
            "Name" => "Bob",
            "Grade" => 92
        ],
         "Joe" =>[
            "Name" => "Joe",
            "Grade" => 87
        ]
    ]; 

    foreach($students as $student){
        echo $student["Name"] . " " .  $student["Grade"] . "<br/>";
    }

    echo "<br/>";

    foreach($students as $student){
        foreach($student as $key=>$value)
            echo "$key: $value<br/>";
        }

    print_r ($students);

    echo "<br/>";

    
?>