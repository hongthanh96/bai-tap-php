<?php
    class Triangle extends Shape{
        public $side1;
        public $side2;
        public $side3;
        public function __construct()
        {   parent::__construct();
            $this->side1 = 1.0;
            $this->side2 = 1.0;
            $this->side3 = 1.0;
        }
        public function setSide1($newSide1){
                $this->side1 = $newSide1;
        }
        public function getSide1(){
            return $this->side1;
        }
        public function setSide2($newSide2){
                $this->side2 = $newSide2;
        }
        public function getSide2(){
            return $this->side2;
        }
        public function setSide3($newSide3){
                $this->side3 = $newSide3;
        }
        public function getSide3(){
            return $this->side3;
        }
        public function getArea(){
            if($this->side1 > 0 && $this->side2 > 0 && $this->side3 > 0 && ($this->side1 + $this->side2 > $this->side3) && ($this->side1 + $this->side3 > $this->side2) && ($this->side2 + $this->side3 > $this->side1))
            {$p = ($this->side1 +$this->side2 + $this->side3)/2;
            $Area = sqrt($p * ($p- $this->side1) * ($p- $this->side2) * ($p- $this->side3));
            return round($Area,2);
            }
            else return "Nhập cạnh không hợp lệ!";
        }
        public function getPerimeter(){
            if($this->side1 > 0 && $this->side2 > 0 && $this->side3 > 0 && ($this->side1 + $this->side2 > $this->side3) && ($this->side1 + $this->side3 > $this->side2) && ($this->side2 + $this->side3 > $this->side1))
            {
                $Primeter = $this->side1 + $this->side2 + $this->side3;
            return round($Primeter);
            }
            else{
                return "Nhập cạnh không hợp lệ!";
            }
        }
        public function __toString()
        {
            return "Hình tam giác: $this->name  Màu: $this->color<br>Cạnh AB = $this->side1<br>Cạnh AC = $this->side2 <br>Canh BC = $this->side3 <br> Chu vi: ".$this->getPerimeter()."<br> Diện tích: ".$this->getArea();
        }
    }