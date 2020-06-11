<?php
class Circle
{
    protected $radius;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
}
