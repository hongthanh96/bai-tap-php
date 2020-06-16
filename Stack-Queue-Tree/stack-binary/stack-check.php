<?php
    include_once ("stack.php");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $num = $_POST["num"];
        $stack = new Stack(100);
        $count = 0;
         while ($num/2 > 0){
            $stack->push($num%2);
            $count++;
            $num = floor($num/2);
         }
         $str = "";
         for($i = 0; $i < $count; $i++){
             $str .= $stack->pop();
         }
        //  echo $str;
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
     <label for="">Nhập số thập phân: </label>
     <input type="number" name="num" id="">
     </div>
     <input type="submit" value="Add">
     <p>Hệ nhị phân <?=  $str ?? '' ?></p>
    </form>
</body>
</html>