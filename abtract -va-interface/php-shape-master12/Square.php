<?php
include_once ('Rectangle.php');
include_once ("Resizeable.php");

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function calculateArea(){
        return $this->width **2;
    }

    public function calculatePerimeter(){
        return $this->width * 4;
    }
    public function resize(){
        $percent = rand(1,100);
        $widthAfter = $this->width + ($this->width * $percent);
        $this->width = $widthAfter;
    }
}