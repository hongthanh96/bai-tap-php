<?php
$num = array(
    array(2,7,9,5,3,5),
    array(5,27,9,2,10),
    array(5,7,8,4,6,12)
);
$max = $num[0][0];
for($i = 0;$i < count($num);$i++){
 $num[$i] = [];
 for($j = 0; $j < 6; $j++){
     if($num[$i][$j] > $max){
         $max = $num[$i][$j];
     }
 }
}
echo "Số lớn nhất trong mảng này là ".$max;

?>