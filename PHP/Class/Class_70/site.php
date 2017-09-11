<?php

    include_once 'autoloader.php';

    class Site {
        private $siteName;
        private $top = "top.php";
        private $bottom = "bottom.php";

        public function __construct($siteNme){
            $this->siteName = $siteName;
        }

        public function getContent (Page $page){
            include $this->$top;

            echo $page->getContent();

            include $this->$bottom;
        }
    }


    $site = new Site("The PCS Site");
    $site->getContent();
    $page = new Page();

?>
