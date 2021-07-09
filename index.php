<?php 
require_once __DIR__ . '/classes/Client.php';
require_once __DIR__ . '/classes/Courier.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spedizione</title>
    </head>
    <body>
        <?php 
        include __DIR__ . "/partials/header.php"; 
        
        $client = new Client("Maria", "Rossi", "F");
        $client->setAddress("Roma, via Nazionale 1");

        $distance = 22;

        $courier = new Courier("Pinco", "Pallino", "M", 57);
        ?>
        <main>
            <section>
                <h2>Cliente</h2>
                <p>
                    <strong>Nome</strong>: 
                    <?= $client->getFullName(); ?>
                </p>
                <p>
                    <strong>
                        Indirizzo
                    </strong>: 
                    <?= $client->getAddress(); ?>
                </p>
            </section>

            <section>
                <h2>Corriere</h2>
                <p>
                    <strong>Nome</strong>:
                    <?= $courier->getFullName(); ?>
                </p>
                <p>
                    <strong>Distanza</strong>:
                    <?= $distance; ?> km   
                </p>
                <p>
                    <strong>Tempi di consegna</strong>:
                    <?= $courier->getDeliveryTime($distance); ?>
                </p>
            </section>
        </main>
    </body>
</html>