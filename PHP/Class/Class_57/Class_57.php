<?php
    $first = " Donald J ";
    $last = " Trump ";

    #echo ' The name is ';
    #echo $first . " " . $last;
    echo "The last name is $first $last<br/>";
    echo "The last name is $first $last<br/>";

    echo '<a href="\\https:google.com"> Google </a><br/>'; 
    echo "<a href=\"\\https:google.com\"> Google </a><br/>";

    echo "$first, ' ', $last<br/>";

    $fullName = $first . " " . $last;
    $fullName = "$first";
    $fullName .= " ";
    $fullName .= "$last";
    echo "$fullName<br/>";

    $one = "1";
    $real = 1;

    if($one == real) {
        echo "$one and $real are equal ==<br/>";
    } else {
        echo "$one and $real are NOT equal ==<br/>";
    }

    echo "$one + 1<br/>";

     if($one === real) {
        echo "$one and $real are equal ===<br/>";
    } else {
        echo "$one and $real are NOT equal ===<br/>";
    }

    $a = 1;
    $b = 2;

    if($a === 1 or $b === 1){
        echo 'either $a or $ $b are 1';
    } else {
        echo 'neither $a or $ $b are 1';
    }

        if($a === 1 and $b === 1){
        echo 'both $a or $ $b are 1';
    } else {
        echo '$a and $ $b are not both 1';
    }

    $result1 = false or true;
    $result2 = false || true;
    #($result1 = false) or true;
    #$result2 = (false || true);
    echo "<br/>";
    
    if($result1 === true){
        echo '$result1 === true';
    } else{
        echo '$result1 !== true';
    }
    echo "<br/>";

     if($result2 === true){
        echo '$result1 === true';
    } else{
        echo '$result1 !== true';
    }
    echo "<br/>";

    if($a === 1 xor $b === 1){
        echo 'either $a or $b is 1 but not both';
    } else{
        echo '! $a === 1 xor $b === 1';
    }
    echo "<br/>";

    if($a === 1 xor $b === 2){
        echo 'either $a is 1 or $b is 2 but not both';
    } else{
        echo '! $a === 1 xor $b === 2';
    }
    echo "<br/>";

    $x = 2;
    switch ($a){
        case 1:
        echo "Its 1";
        break;

        case 2:
        echo "Its 2";
        break;

        case 3:
        echo "Its 2 or 3";
        break;

        case 'Hello';
        echo "Hi there";
        break;

        default:
        "Its not 1, 2 or 3";
    }
    echo "<br/>";

    echo $i;

   # for($i = 0; $i < 5; $i++)
    {
        echo "$i<br/>";
    }

 #   while($i > 0;)
    {
        echo "$i++<br/>";
    }

 #   do$i > 0;)
    {
        echo "$i++<br/>";
    }

    

?>
