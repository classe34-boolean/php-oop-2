<?php

class Greetings {

    public $name;

    public static function sayHello() {
        return "Hello World!";
    }

    public static function sum($a, $b) {
        return $a + $b;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

// NO errore, ma concettualmente non corretto
// $greet = new Greetings();
// echo $greet->sayHello();

echo Greetings::sayHello();

echo "<br>";

echo Greetings::sum(12, 13);

// ERRORE (Deprecated)
// echo Greetings::setName("Gianluca");




