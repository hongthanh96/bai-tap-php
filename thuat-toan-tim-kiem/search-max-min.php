<?php
        function findMax($arr){
            $max = $arr[0];
            $len = count($arr);
            for($i = 0; $i < $len; $i++){
                if($arr[$i] >$max){
                    $max = $arr[$i];
                    $index = $i;
                }
            }
            return "Số lớn nhất trong mảng là: số $max có chỉ số index = $index";
        }
        function findMin($arr){
            $min = $arr[0];
            $len = count($arr);
            for($i = 0; $i < $len; $i++){
                if($arr[$i] < $min){
                    $min = $arr[$i];
                    $index = $i;
                }
            }
            return "Số nhỏ nhất trong mảng là: số $min có chỉ số index = $index";
        }
        $arrNum = [];
        for($i = 0; $i < 100; $i++){
            $arrNum[$i] = rand(1,101);
        }
        foreach($arrNum as $value){
            echo $value." ";
        }
        echo "<br>";
        echo findMax($arrNum)."<br>";
        echo findMin($arrNum);
?>