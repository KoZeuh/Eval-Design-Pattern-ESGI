<?php
    abstract class Engin {
        protected $type;

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }
    }
?>
