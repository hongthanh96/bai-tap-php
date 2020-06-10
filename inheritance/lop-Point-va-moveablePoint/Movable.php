<?php
class MoveablePoint extends Point{
    public $xSpeed;
    public $ySpeed;
    public function __construct($xSpeed = 0.0,$ySpeed = 0.0)
    {
        parent::__construct();
        $this->setxSpeed($xSpeed);
        $this-> setySpeed($ySpeed);
    }
    public function setxSpeed($xSpeedNew){
        $this->xSpeed = (float)$xSpeedNew;
    }
    public function getxSpeed(){
        return $this->xSpeed;
    }
    public function setySpeed($ySpeedNew){
        $this->ySpeed = (float)$ySpeedNew;
    }
    public function getySpeed(){
        return $this->ySpeed;
    }
    public function setSpeed($xSpeedNew,$ySpeedNew){
        $this->xSpeed = (float)$xSpeedNew;
        $this->ySpeed = (float)$ySpeedNew;
    }
    public function getSpeed(){
        $arr = array( $this->xSpeed, $this->ySpeed);
        return $arr;

    }
    public function __toString()
    {
       return "($this->x,$this->y,speed = ($this->xSpeed,$this->ySpeed)";
    }
    public function move(){
       return $this->x += $this->ySpeed.'<br>'.$this->y += $this->ySpeed;
    }

}
