<?php
 include_once "Point.php";
 include_once "Movable.php";
 echo $point = new Point(5.6,4.5)."<br>";
 $move = new MoveablePoint(3,6);
 $move->setX(4);
 $move->setY(3.5);
 echo $move;
?>