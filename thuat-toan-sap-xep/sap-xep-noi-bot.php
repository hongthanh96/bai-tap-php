<?php
    function dubbleSort($arr){
        $len = count($arr);
        for($i = 0; $i < $len - 1; $i++){
            for($j = $i+1; $j <$len; $j++){
                if($arr[$j] < $arr[$i]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j]; 
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }
    $list =  [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
    print_r(dubbleSort($list));
?>