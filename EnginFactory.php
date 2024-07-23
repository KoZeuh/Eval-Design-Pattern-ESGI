<?php
    require_once 'Types/Pelleteuse.php';
    require_once 'Types/Tractopelle.php';
    require_once 'Types/Nacelle.php';
    require_once 'Types/Bulldozer.php';
    require_once 'Types/RouleauCompresseur.php';

    class EnginFactory {
        public static function createEngin($type) {
            switch ($type) {
                case 'Pelleteuse':
                    return new Pelleteuse();
                case 'Tractopelle':
                    return new Tractopelle();
                case 'Nacelle':
                    return new Nacelle();
                case 'Bulldozer':
                    return new Bulldozer();
                case 'Rouleau compresseur':
                    return new RouleauCompresseur();
                default:
                    throw new InvalidArgumentException("Type d'engin inconnu !");
            }
        }
    }
?>
