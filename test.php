<?php
    require_once 'BoxManager.php';

    $enginsList = [
        'Pelleteuse', 
        'Tractopelle', 
        'Nacelle', 
        'Bulldozer', 
        'Rouleau compresseur',

        'Pelleteuse',
        'Tractopelle',
        'Nacelle',
        'Bulldozer',
        'Rouleau compresseur',
        'Rouleau compresseur'
    ];

    $boxManager = new BoxManager();

    foreach ($enginsList as $engin) {
        $boxManager->addEngin($engin);
    }

    $allBoxes = $boxManager->getAllBoxes();

    foreach ($allBoxes as $boxId => $box) {
        echo "\n" . $boxId . " contient " . count($box->getEngins()) . " engins.\n";
        
        if ($box->checkMinimumTypes()) {
            echo $boxId . " contient au moins un engin de chaque type.\n";
        } else {
            echo $boxId . " ne contient pas tous les types d'engins requis.\n";
        }
    }
?>
