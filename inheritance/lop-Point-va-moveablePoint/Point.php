<?php
    class Point{
        public $x;
        public $y;
        public function __construct($x = 0.0,$y = 0.0)
        {
            $this->setX($x);
            $this->setY($y);
         }
         public function setX($newX){
             $this->x = (float)$newX;
         }
         public function getX(){
             return $this->x;
         }
         public function setY($newY){
            $this->y = (float)$newY;
        }
        public function getY(){
            return $this->y;
        }
        public function setXY($newX,$newY){
            $this->y =(float)$newX;
            $this->y = (float)$newY;
        }
        public function getXY(){
            $arr =  array($this->y,$this->y);
            return $arr;
        }
        public function __toString()
        {
            return "($this->x,$this->y)";
        }

    }
?>
