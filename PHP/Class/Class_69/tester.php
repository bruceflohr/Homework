<?php

//require_once 'person.php';
//require_once 'employee.php';

/*function __autoload($className) {
    echo "Looking for $className. Requiring " . lcfirst($className) . '.php<br/>';
    require lcfirst($className) . '.php';
}*/

spl_autoload_register(function ($className) {
    echo "Looking for $className. Requiring " . lcfirst($className) . '.php<br/>';
    require lcfirst($className) . '.php';
});

$p = new Person("Donald", "Trump");
//$p->printIt();
echo $p;

echo "<hr/>";

$e = new Employee(null, "Pence", "White House");
//$e->printIt();
echo $e;

/*foreach($e as $key=>$value) {
    echo "$key: $value<br/>";
}*/

echo "<hr/>";

function viewSomething(/*Viewable*/ $thing) {
    $thing->view();
}

//$e->view();
viewSomething($e);
echo "<hr/>";

class Foo /*implements Viewable*/ {
    public function view() {
        echo "Im a Foo!";
    }
}
viewSomething(new Foo());
//viewSomething(41);

?>