<?php
    function countNum($arr,$num){
        $len = count($arr);
        $count = 0 ;
        for($i = 0; $i < $len; $i++){
            if($arr[$i] === $num){
                $count++;
            }
        }
        return "Số $num xuât hiện $count lần trong mảng này!";
    }
    $arrNum = [];
    for($i = 0; $i < 100; $i++){
        $arr[$i] = rand(1,101);
    }
    foreach($arrNum as $value){
        echo $value." ";
    }
    echo countNum($arrNum,10);

?>