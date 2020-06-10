<?php
class Point3D extends Point2D{
    protected $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function setZ($newZ){
        $this->z = $newZ;
    }
    public function getZ(){
        return $this->z;
    }

    public function setXYZ($newX,$newY,$newZ){
        $this->x = $newX;
        $this->y= $newY;
        $this->z = $newZ;
    }
    public function getXYZ(){
        $arr = array($this->x,$this->y,$this->z);
        return $arr;
    }
    public function __toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
    
}
?>