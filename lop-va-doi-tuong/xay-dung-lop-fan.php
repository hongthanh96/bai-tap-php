<?php
    class Fan{
        const SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private $speed;
        private $on;
        private $radius;
        private $color;

        function __construct(){
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }
        function setSpeed($newSpeed){
            $this->speed = $newSpeed;
        }
        function getSpeed(){
            return $this->speed;
        }
        function setOn($newOn){
            $this->on = $newOn;
        }
        function getOn(){
            return $this->on;
        }
        function setRadius($newRadius){
            $this->radius = $newRadius;
        }
        function getRadius(){
            return $this->radius;
        }
        function setColor($newColor){
            $this->color = $newColor;
        }
        function getColor(){
            return $this->color;
        }
        function toString(){
            if($this->getOn() === true){
                return "fan is on <br>"."speed: ".$this->getSpeed()."<br> Radius: ".$this->getRadius()."<br> Color: ".$this->getColor();
            }
            else{
                return "fan is off <br>"."speed: ".$this->getSpeed()."<br> Radius: ".$this->getRadius()."<br> Color: ".$this->getColor();

        }
    }
}

    $fan1 = new Fan();
    $fan1->setOn(true);
    $fan1->setSpeed($fan1::FAST);
    $fan1->setRadius(10);
    $fan1->setColor("yellow");
    echo "Fan1: ".$fan1-> toString()."<br>";
    $fan2 = new Fan();
    $fan2->setOn(true);
    $fan2->setSpeed($fan2::MEDIUM);
    $fan2->setRadius(5);

    echo "Fan2: ".$fan2-> toString();
    
?>
