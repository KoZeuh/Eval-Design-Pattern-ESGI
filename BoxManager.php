<?php
    require_once 'Box.php';
    require_once 'EnginFactory.php';

    class BoxManager {
        private const MAX_ENGINS_PER_BOX = 8;

        private $currentBoxInstance;
        private $boxIdCounter = 1;

        public function __construct() {
            $this->currentBoxInstance = Box::getInstance('box' . $this->boxIdCounter);
        }

        public function getAllBoxes() {
            return Box::getAllBoxes();
        }

        public function addEngin($type) {
            if ($this->currentBoxInstance && count($this->currentBoxInstance->getEngins()) >= self::MAX_ENGINS_PER_BOX) {
                $this->boxIdCounter++;
                $this->currentBoxInstance = Box::getInstance('box' . $this->boxIdCounter);
            }

            $engin = EnginFactory::createEngin($type);
            $this->currentBoxInstance->addEngin($engin);
        }
    }
?>
