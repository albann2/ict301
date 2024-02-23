<?php
    class Etudiant {
        private $name;
        private $matricule;
        private $statut;
        private $password;

        public function __construct($name, $matricule, $statut, $password) {
            $this->name = $name;
            $this->matricule = $matricule;
            $this->statut = $statut;
            $this->password = $password;
        }

        public function get_name(){
            return $this->name;
        }

        public function get_matricule(){
            return $this->matricule;
        }

        public function get_statut(){
            return $this->statut;
        }

        public function get_password(){
            return $this->password;
        }

        public function set_name($newValue){
            $this->name = $newValue;
        }

        public function set_matricule($newValue){
            $this->matricule = $newValue;
        }
        
        public function set_statut($newValue){
            $this->statut = $newValue;
        }

        public function set_password($newValue){
            $this->password = $newValue;
        }
    }
?>