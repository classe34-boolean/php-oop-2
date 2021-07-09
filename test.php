<?php
// definizione di una classe (modello)

class User {
    // ATTRIBUTI/PROPRIETA'
    public $nome;
    public $email;
    private $sconto;

    // COSTRUTTORE
    function __construct($nome = "", $email = "", $sconto = 0) {
        // echo "Oggetto istanziato!";
        $this->nome = $nome;
        $this->email = $email;
        $this->sconto = $sconto;
    }

    // METODI
    public function setSconto($eta) {
        if($eta >= 55) {
            $this->sconto = 35;
        }
    }

    public function getSconto() {
        return $this->sconto . "%";
    }
}

// creiamo istanze della classe (concretizzazioni)
$pippo = new User("Pippo", "pippo@email.com", 50);
// $pippo->nome = "Pippo";
// $pippo->setSconto(50);
var_dump($pippo);

echo $pippo->nome;

$pluto = new User("Pluto", "pluto@email.com");
// $pluto->nome = "Pluto modificato";
// $pluto->email = "pluto@email.com";
// $pluto->setSconto(70);
var_dump($pluto);

// echo $pluto->sconto;
echo "<hr>";
echo $pluto->getSconto();

$paperino = new User("", "");
$paperino->setSconto(15);
var_dump($paperino);

$clarabella = new User();
var_dump($clarabella);