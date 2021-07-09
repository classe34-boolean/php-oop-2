<?php

trait Position {
    public $lat;
    public $lng;

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function getCoords() {
        return $this->lat . ";" . $this->lng;
    }
}

class Person {
    protected $lastname;

    function __construct($lastname) {
        $this->lastname = $lastname;
    }
}

class Client extends Person {
    use Position;

    private $firstname;
    private $gender;

    function __construct($firstname, $lastname, $gender) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
    }

}

$client = new Client("Maria", "Rossi", "F");
$client->setLat(8.1268458);
$client->setLng(14.3452453);
echo $client->getCoords();
var_dump($client);

class Store {
    use Position; 

    private $name;
    private $director;
    private $mq;

    function __construct($name, $director = "", $mq = 0) {
        $this->name = $name;
        $this->director = $director;
        $this->mq = $mq;
    }
}

$store = new Store("Il mio negozio");
$store->setLat(8.999999);
$store->setLng(12.3452453);
echo $store->getCoords();
var_dump($store);