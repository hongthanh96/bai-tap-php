<?php
    function selectionSort($arr){
        $len = count($arr);
        for($i = 0; $i < $len-1; $i++){
            $max = $i;
            for($j = $i+ 1; $j < $len; $j++){
                if($arr[$j] > $arr[$max]){
                    $max = $j;
                }
            }
            if($max != $i){
                $temp = $arr[$max];
                $arr[$max] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
        
        return $arr;
    }
    $array =  [1, 9, 4.5, 6.6, 5.7, -4.5];
    print_r(selectionSort($array));
