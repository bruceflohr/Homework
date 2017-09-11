<?php

class Person implements Viewable {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName();
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName();
    }

    public function printIt() {
        /*return "First Name: $this->firstName<br>" .
               "Last Name: $this->lastName<br>";*/

        $ret = '';
        foreach($this as $key=>$value) {
            $ret .= "$key: $value<br/>";
        }
        return $ret;
    }

    public function __toString() {
        return $this->printIt();
    }

    public function view() {
        echo $this;
    }
}

?>