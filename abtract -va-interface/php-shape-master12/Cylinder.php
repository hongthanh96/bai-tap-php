<?php
include_once ('Circle.php');
include_once ("Resizeable.php");

class Cylinder extends Circle implements Resizeable
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function resize($percent){
        $radiusAfter = $this->radius + ($this->radius * $percent)/100;
        $this->radius = $radiusAfter;
    }
}