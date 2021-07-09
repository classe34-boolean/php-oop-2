<?php
require_once __DIR__ . "/Person.php";

class Client extends Person {
    private $address;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getFullName() {
        $prefix = ($this->gender == 'M') ? 'Sig. ' : 'Sig.ra ';
        return $prefix . parent::getFullName();
    }

    public function getAddress() {
        return $this->address;
    }
}