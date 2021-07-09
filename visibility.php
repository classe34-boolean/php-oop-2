<?php

class Person {
    private $firstname;
    private $lastname;

    function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }
}

class Doctor extends Person {

    public function getFullName() {

        // return "Dott. " . $this->firstname . " ". $this->lastname;

        $fullname = parent::getFullName();
        return "Dott. " . $fullname;
    }

}

// $p1 = new Person("Gianluca", "Pesce");
// echo $p1->getFullName();

$d1 = new Doctor("Gianluca", "Pesce");
echo $d1->getFullName();

// echo $d1->firstname;

