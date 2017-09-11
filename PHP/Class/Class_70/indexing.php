<?php

include_once 'autoloader.php';

class FrontController {
    public function __construct(){

    }
    
public function run($siteName){
    if(!empty($GET_['page'])){
        $page = $GET_['page'];
    } else {
        $page = "one";
    }


    switch ($this->$page) {
        case "one":
        $thePage = new PageOne();
        break;
    
        case "two":
        $thePage = new PageTwo();
        break;
    
        case "three":
        $thePage = new PageThree();
        break;
    
        default: 
        $thePage = new Page("ERROR, NO such page: $page ");
        break;
    }
    
    $site = new Site();
    $site->render($thePage);
}
}
$controller = new FrontController("The PCS Site");
?>