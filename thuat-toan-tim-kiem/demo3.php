<?php
    function searchNum($arr,$num){
        $low = 0;
        $high = count($arr) - 1;
        while($low <= $high){
            $mid = ($low + $high)/2;
            if($num > $arr[$mid]){
                $low = $mid + 1;
            }
            else if($num < $arr[$mid]){
                $high = $mid - 1;
            }
            else{
                return $mid;
            }
        }
        return -1;
    }



$arr = [2,5,8,12,16,23,38,56,72,91];
$num = 23;
$check =searchNum($arr,$num);
if($check === -1){
    echo "Không tìm thấy số $num trong mảng!";
}
else {
    echo "Tìm thấy số $num có chỉ số index = ". (int) searchNum($arr,$num);
}

?>