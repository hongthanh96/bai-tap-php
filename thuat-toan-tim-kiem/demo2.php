<?php
// tạo 1 mảng 100 pt sô. mỗi pt randum tu 0 den 10. dem so 5 xuất hiện bn lần trong mảng
function countNum($arr,$num){
    $count = 0;
    for($i = 0; $i <count($arr); $i++){
        if($arr[$i] === $num){
            $count++;
        }
    }
    if($count === 0){
        return "Số $num không tồn tại trong mảng!";
    }
    else{
        return "Số $num xuất hiện $count lần trong mảng!";
    }

}
$arr = [];
for($i = 0; $i < 100; $i++){
    $arr[$i] = rand(0,10);
}
print_r($arr);
echo countNum($arr, 5);

?>