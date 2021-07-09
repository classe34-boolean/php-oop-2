<?php
require_once __DIR__ . "/User.php";

class Employee extends User {
    public $livello;

    function __construct($nome = "", $email = "", $sconto = 0, $livello = 1) {
        echo "<br>Costruttore classe Employee";
        parent::__construct($nome, $email, $sconto);
        $this->livello = $livello;
    } 

    public function setLivello($livello) {
        $this->livello = $livello;
    }

    public function setSconto($eta) {

        // override totale    
        // if($eta >= 55) {
        //     $this->sconto = 50;
        // } else {
        //     $this->sconto = $this->livello * 10;
        // }

        // modifica parziale
        parent::setSconto($eta);
        // $this->sconto += 20;
        $this->sconto += $this->livello * 10;
    }

    public function getNome() {
        return $this->nome;
    }
}

echo "<h2>Employee</h2>";
$emp1 = new Employee("Gianluca", "gianluca@email.it", 90, 2);
$emp1->setSconto(22);

// echo $emp1->nome;
echo $emp1->getNome();

var_dump($emp1);


// $emp1->setSconto(75);
// echo $emp1->getSconto();

echo "<h2>User</h2>";
$utente1 = new User("Pinco", "pinco@email.it");
$utente1->setSconto(70);

// echo $utente1->nome; // ERRORE, $nome è private

echo $utente1->getNome();

var_dump($utente1);
// $utente1->setLivello(3); // ERRORE