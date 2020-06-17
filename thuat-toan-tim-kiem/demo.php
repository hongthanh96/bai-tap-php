<?php
// tạo 1 mảng 20 số. 1 số randum 1->10. tìm số 5. nếu có in ra indexx. nêu sko tin ra ko tồn tại


function searchNum($arr, $num)
{
    $check = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $num) {
            $index = $i;
            $check = true;
            break;
        }
    }
    if ($check) {
        echo "Số $num được tìm thấy trong mảng ở vị trí index $index";
    } else {
        echo "số $num không tồn tại!";
    }
}
$arr = [];
for ($i = 0; $i < 20; $i++) {
    array_push($arr, rand(1, 10));
}
print_r($arr);
searchNum($arr, 5);
