<?php
    class UE {
        private $code;
        private $libelle;
        private $classe;
        

        public function __construct($code, $libelle, $classe) {
            $this->code = $code;
            $this->libelle = $libelle;
            $this->classe = $classe;
        }

        public function get_code(){
            return $this->code;
        }

        public function get_libelle(){
            return $this->libelle;
        }


        public function set_code($newValue){
            $this->code = $newValue;
        }

        public function set_libelle($newValue){
            $this->libelle = $newValue;
        }
    }
?>