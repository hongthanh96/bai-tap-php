<?php
    class Circle{
        protected $radius;
        protected $color;
        function __construct($radius,$color){
            $this->radius = $radius;
            $this->color = $color;
        }
        function setRadius($radius){
            $this->radius = $radius;
        }
        function getRadius(){
            return $this->radius;
        }
        function Area(){
            return ($this->radius**2) * 3.14;
        }
        function Perimeter(){
            return $this->radius *2 * 3.14;
        }
        function __toString(){
            return "Hình tròn có bán kính: ".$this->radius.", màu: ".$this->color.", Chu vi: ".$this->Perimeter()."Diện tích: ".$this->Area();
        }
    }
    class Cylinder extends Circle{
        public $height;
        public function __construct($radius,$color,$height){
            parent::__construct($radius,$color);
            $this->height = $height;
        }
        function volume(){
            return $this->Area() * $this->height;
        }
        function __toString(){
            return "Hình trụ có bán kính: ".$this->radius.", màu: ".$this->color.", thể tích: ". $this->volume();
        }
    }
    echo $circle = new Circle(5,"red")."<br>";
    echo $cylinder =new Cylinder(10,"blue",20);
?>