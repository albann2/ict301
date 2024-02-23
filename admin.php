<?php
    class Admin {
        private $name;
        private $email;
        private $password;

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function get_name(){
            return $this->name;
        }

        public function get_email(){
            return $this->email;
        }


        public function get_password(){
            return $this->password;
        }

        public function set_name($newValue){
            $this->name = $newValue;
        }

        public function set_email($newValue){
            $this->email = $newValue;
        }
        public function set_password($newValue){
            $this->password = $newValue;
        }
    }
?>