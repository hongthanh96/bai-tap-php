<?php
class Point2D{
    protected $x;
    protected $y;
    public function __construct($x,$y)
    {
        $this->x = (float)$x;
        $this->y = (float)$y;
    }
    public function setX($newX){
        $this->x = $newX;
    }
    public function getX(){
        return $this->x;
    }
    public function setY($newY){
        $this->y = $newY;
    }
    public function getY(){
        return $this->y;
    }
    public function setXY($newX,$newY){
        $this->x = $newX;
        $this->y = $newY;
    }
    public function getXY(){
        $arr = array($this->x,$this->y);
        return $arr;
    }
    public function __toString()
    {
        return "($this->x,$this->y)";
    }

}


?>