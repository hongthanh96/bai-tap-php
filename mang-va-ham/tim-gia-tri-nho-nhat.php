<?php
    $arr = [2,6,8,9,5,3,1];
    $min = $arr[0];
    $index = 0;
    for($i = 0;$i<count($arr);$i++){
        if($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    echo "Số nhỏ nhất trong mảng này là: ".$min." Có chỉ số index = ".$index;
?>