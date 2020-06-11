<?php
    include_once "Circle.php";
    include_once "Compartor.php";
    class ComparableCircle extends Circle implements Comparable{
        public function __construct($name,$radius)
        {
            parent::__construct($name,$radius);
        }
        public function compareTo($CircleOther){
            $CircleOtherRadius = $CircleOther->getRadius();
            if($this->getRadius() > $CircleOther->getRadius()){
                return 1;
            }
            elseif($this->getRadius() < $CircleOther->getRadius()){
                return -1;
            }
            else{
                return 0;
            }
        }
    }

?>