<?php
    function insertionSort($arr){
        $len = count($arr);
        for($i = 0; $i <$len; $i++){
            $val = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] < $val){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $val;
        }
        return $arr;
    }
    $list =  [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
    print_r(insertionSort($list));
?>