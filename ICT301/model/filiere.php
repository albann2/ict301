<?php
    class Filiere {
        private $code;
        private $nom;        

        public function __construct($code, $nom) {
            $this->code = $code;
            $this->nom = $nom;
        }

        public function get_code(){
            return $this->code;
        }

        public function get_nom(){
            return $this->nom;
        }


        public function set_code($newValue){
            $this->code = $newValue;
        }

        public function set_nom($newValue){
            $this->nom = $newValue;
        }
    }
?>