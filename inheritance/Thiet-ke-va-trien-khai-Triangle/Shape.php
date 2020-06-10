<?php
    class Shape{
        protected $name;
        protected $color;
        public function __construct(){
            $this->name = "Triangle";
            $this->color = "Blue";
        }

        public function setName($newName){
            $this->name = $newName;
        }
        public function getName(){
            return $this->name;
        }
        public function setColor($newColor){
            $this->color = $newColor;
        }
        public function getColor(){
            return $this->color;
        }
    }

?>