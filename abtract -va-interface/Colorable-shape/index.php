<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$shapes[0] = new Circle("Circle", 5);
$shapes[1] = new Cylinder("Cylinder", 5, 10);
$shapes[2] = new Rectangle("Rectangle", 5, 7);
$shapes[3] = new Square("Square", 5);
foreach ($shapes as $shape) {
    echo $shape->name." Area: ".$shape->calculateArea()."<br>";
    if ($shape instanceof Colorable) {
        echo $shape->name." Color: ". $shape->howToColor();
    }
}
