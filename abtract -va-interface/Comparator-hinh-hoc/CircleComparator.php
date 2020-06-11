<?php
include_once "Circle.php";
include_once "Comparator.php";
class CircleComparator{
    public function compare($circleOne,$circleTwo){
        $radiusOne  = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if($radiusOne>$radiusTwo){
            return 1;
        }
        else if($radiusTwo>$radiusOne){
            return -1;
        }
        else {
            return 0;
        }
    }
}

?>