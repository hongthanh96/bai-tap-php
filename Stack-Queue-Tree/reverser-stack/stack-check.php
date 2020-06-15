<?php
    include_once("stack.php");
    $stack = new Stack(10);
    $stack->push(1);
    $stack->push(3);
    $stack->push(5);
    $stack->push(7);
    $stack->push(9);
    echo "Mảng chưa đảo ngược: <br>";
    print_r($stack);
    echo count($stack->stack);
    $arr_stack = [];
    for($i = 0; $i<count($stack->stack); $i++){
        $arr_stack[$i] = $stack->stack[$i];
    }
    $arr_Reverser = [];
    for($i= 0; $i < count($stack->stack); $i++){
        $arr_Reverser[$i] = array_pop($arr_stack);
    }
    echo "<br>Mảng sau khi đảo ngược: <br>";
    print_r($arr_Reverser);
?>