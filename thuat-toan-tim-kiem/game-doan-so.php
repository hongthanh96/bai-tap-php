<?php
function findNum($arr,$num){
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
$arr = [];
for ($i = 1; $i < 101; $i++) {
    $arr[$i] = rand(1,100);
}
foreach ($arr as $value) {
    echo $value . " ";
}
$num = 23;
$check =findNum($arr,$num);
if($check === -1){
    echo "Không tìm thấy số $num trong mảng!";
}
else {
    echo "Tìm thấy số $num có chỉ số index = ". (int) findNum($arr,$num);
}