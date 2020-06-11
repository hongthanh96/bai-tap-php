<?php
    include_once "ComparableCircle.php";
    $CircleOne = new ComparableCircle("CircleOne",7);
    $CircleTwo = new ComparableCircle("CircleTwo",4);
    var_dump($CircleOne->compareTo($CircleTwo));

?>