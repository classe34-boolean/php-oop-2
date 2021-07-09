<?php
require_once __DIR__ . "/Person.php";

class Courier extends Person {

    private $km_h;

    function __construct($firstname, $lastname, $gender, $km_h = 60) {
        parent::__construct($firstname, $lastname, $gender);
        $this->km_h = $km_h;
    }

    public function setKmH($km_h) {
        $this->km_h = $km_h;
    }

    public function getDeliveryTime($distance) {
        return intval($distance / $this->km_h * 60) . " minuti";
    }

}