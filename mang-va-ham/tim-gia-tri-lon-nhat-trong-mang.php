<?php

 function findmax($arrnum){
    $max = $arrnum[0][0];
    $index = [0][0];
    $row = count($arrnum);
    for($i  = 0; $i < $row; $i++){
        $col = count($arrnum[$i]);
        for($j = 0; $j < $col; $j++){
            if($arrnum[$i][$j] >$max){
                $max = $arrnum[$i][$j];
                $index = "i = $i, j =$j";
            }
        }
    }
    return "Số lớn nhất trong mảng là: ".$max." Có chỉ số index là: ".$index;
   
     
 }
 $arrNumber = array(
    array(2,4,6,8,6,1),
    array(8,9,5,6,4,2),
    array(4,9,3,0,10,20)
);
echo findmax($arrNumber);
 



?>