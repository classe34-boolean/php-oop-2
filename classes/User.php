<?php
class User {
    // ATTRIBUTI/PROPRIETA'
    protected $nome;
    public $email;
    public $sconto;

    // COSTRUTTORE
    function __construct($nome = "", $email = "", $sconto = 0) {
        // echo "Oggetto istanziato!";
        echo "<br>Costruttore classe User";
        $this->nome = $nome;
        $this->email = $email;
        $this->sconto = $sconto;
    }

    // METODI
    public function setSconto($eta) {
        if($eta >= 55) {
            $this->sconto = 35;
        } else {
            $this->sconto = 0;
        }
    }

    public function getSconto() {
        return $this->sconto . "%";
    }
}