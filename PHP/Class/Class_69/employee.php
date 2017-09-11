<?php
require_once 'person.php';

class Employee extends Person {
    protected $department;

    public function __construct($firstName = null, $lastName = null, $department = null) {
        parent::__construct($firstName, $lastName);
        $this->department = $department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function getDepartment() {
        return $this->department();
    }

    /*public function printIt() {
        return parent::printIt()
               . "Department: $this->department<br>";
    }*/
}
?>