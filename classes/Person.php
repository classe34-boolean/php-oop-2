<?php
class Person {
    private $firstname;
    private $lastname;
    protected $gender;

    function __construct($firstname, $lastname, $gender) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
    }

    public function getFirstName() {
        return $this->firstname;
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }
}