<?php
function somma($num1, $num2) {
    if(!is_numeric($num1)) {
        throw new Exception("Il primo operando non è un numero!");
    }

    if(!is_numeric($num2)) {
        throw new Exception("Il secondo operando non è un numero!");
    }

    return $num1 + $num2;
}

try {
    echo "Risultato: " . somma(10, "paperino");
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}