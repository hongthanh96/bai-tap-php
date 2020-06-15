<?php
    include_once ("stack.php");
    include_once ("Queue.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $stack = new Stack(20);
        $queue = new Queue();
        $str = $_POST["str"];
        $len = strlen($str);
        for($i = 0; $i <$len; $i++){
            $stack->push($str[$i]);
            $queue->enqueue($str[$i]);
        }
        $flag = true;
        for($i = 0; $i < $len;$i++){
            if($stack->pop() !== $queue->dequeue()){
                $flag = false;
            }
        }
        $symmetry = null;
        if($flag){
            $symmetry = "Chuỗi của bạn là đối xứng!";
        }
        else{
            $symmetry = "Chuỗi của bạn KHÔNG đối xứng!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <div>
        <label for="">Nhập vào chuỗi kí tự: </label>
        <input type="text" name="str" id="">
    </div>
    <div>
    <input type="submit" value="Submit">
    </div>
    <p><?= $symmetry ?? ''?></p>
    </form>
</body>
</html>