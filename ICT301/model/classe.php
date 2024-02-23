<?php
    class Classe {
       
        private $niveau;
        

        public function __construct($niveau) {
        
            $this->niveau = $niveau;
        }

        public function get_niveau(){
            return $this->niveau;
        }

        public function niveau($newValue){
            $this->niveau = $newValue;
        }
    }
?>