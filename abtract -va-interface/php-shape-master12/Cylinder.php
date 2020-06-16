<?php
include_once ('Circle.php');
include_once ("Resizeable.php");

class Cylinder extends Circle implements Resizeable
{
    public $height;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->height = 1;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function resize(){
        $percent = rand(1,100);
        $radiusAfter = $this->radius + ($this->radius * $percent);
        $this->radius = $radiusAfter;
    }
}