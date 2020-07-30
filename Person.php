<?php
    class Person {
        public $name = "Jannie";
        public $dob = "1990-01-01";

        public function __construct($name){
            $this->name = $name;
            echo "I am Alive...</br>";
        }

        public function walk() {
            echo "walking...</br>";
        }

        public function greet() {
            echo "Hello, My name is ".$this->name."</br>";
        }

        public function __destruct() {
            echo "I am dying...</br>";
        }
    }
?>