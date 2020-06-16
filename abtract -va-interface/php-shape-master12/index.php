<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
include_once ('Resizeable.php');
$arrShape = [];
for($i = 0; $i< 5; $i++){
    $shapes = new Circle("Circle $i");
    $shapes->resize();
    array_push($arrShape,["Name"=>$shapes->name,"Radius"=>$shapes->radius,"Area"=>$shapes->calculateArea(),"Pre"=>$shapes->calculatePerimeter()]);
}

for($i = 0; $i < 5; $i++){
    $shapes = new Cylinder("Cylinder$i");
    $shapes->resize();
    array_push($arrShape,["Name"=>$shapes->name, "Height"=> $shapes->height,"Area"=>$shapes->calculateArea(),"Pre"=>$shapes->calculatePerimeter()]);
}
for($i = 0; $i < 5; $i++){
    $shapes = new Rectangle("Rectangle $i");
    $shapes->resize();
    array_push($arrShape,["Name"=>$shapes->name,"Area"=>$shapes->calculateArea(),"Pre"=>$shapes->calculatePerimeter()]);
}
var_dump($arrShape);
echo $shapes->maxArea($arrShape)."<br>";
echo $shapes->MinPerimeter($arrShape)."<br>";
echo $shapes->Search($arrShape,'Circle 2');
