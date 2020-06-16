<?php
include_once ('Shape.php');
include_once ("Resizeable.php");

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->width = 1;
        $this->height = 1;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
    public function resize(){
        $percent = rand(1,100);
        $widthAfter = $this->width + ($this->width * $percent);
        $heightAfter = $this->height + ($this->height * $percent);
        $this->width = $widthAfter;
        $this->height = $heightAfter;
    }
}