<?php
    class Box {
        private static $instances = [];
        private $engins = [];
        private $boxId;

        private function __construct($boxId) {
            $this->boxId = $boxId;
        }

        public static function getInstance($boxId) {
            if (!isset(self::$instances[$boxId])) {
                self::$instances[$boxId] = new self($boxId);
            }

            return self::$instances[$boxId];
        }

        public static function getAllBoxes() {
            return self::$instances;
        }

        public function addEngin($engin) {
            if (count($this->engins) >= 8) {
                throw new RuntimeException("La box est pleine");
            }
            
            $this->engins[] = $engin;
        }

        public function getEngins() {
            return $this->engins;
        }

        public function checkMinimumTypes() {
            $types = array_map(function($engin) {
                return $engin->getType();
            }, $this->engins);

            $requiredTypes = ['Pelleteuse', 'Tractopelle', 'Nacelle', 'Bulldozer', 'Rouleau compresseur'];
            
            return !array_diff($requiredTypes, $types);
        }
    }
?>
