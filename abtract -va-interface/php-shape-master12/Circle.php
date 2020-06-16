<?php
include_once ('Shape.php');
include_once ("Resizeable.php");

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->radius = 1;
    }

    public function calculateArea(){
        return round(pi() * pow($this->radius, 2),2);
    }

    public function calculatePerimeter(){
        return round((pi() * $this->radius * 2),2);
    }
    public function resize(){
        $percent = rand(1,100);
        $radiusAfter = $this->radius + ($this->radius * $percent);
        $this->radius = $radiusAfter;
    }
}
