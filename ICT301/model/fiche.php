<?php
    class Fiche {
        private $numeroSeance;
        private $salle;
        

        public function __construct($numeroSeance, $salle) {
            $this->numeroSeance = $numeroSeance;
            $this->salle = $salle;
        }

        public function get_numeroSeance(){
            return $this->numeroSeance;
        }

        public function get_Salle(){
            return $this->salle;
        }


        public function set_numerSeance($newValue){
            $this->numeroSeance = $newValue;
        }

        public function set_salle($newValue){
            $this->salle = $newValue;
        }
    }
?>