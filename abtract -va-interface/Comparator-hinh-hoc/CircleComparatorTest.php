<?php
    include_once "CircleComparator.php";
    $circleOne = new Circle("CircleOne",6);
    $circleTwo = new Circle(("CircleTwo"),4);
    $circlecomparator = new CircleComparator();
    var_dump($circlecomparator->compare($circleOne,$circleTwo));
?>