<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $str = $_POST["str"];
        $search = $_POST["search"];
        $count = 0;
        if(!empty($str)){
            for($i = 0; $i < strlen($str); $i++){
                if($str[$i] === $search){
                    $count++;
                }
            }
            echo "Chuỗi bạn nhập: ".$str."<br>";
            echo "Số lần xuất hiện ".$search." trong chuỗi là: ".$count;
        }
        else{
            echo "Nhập vào!";
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
        <label for="">Nhập chuỗi kí tự</label>
        <input type="text" name="str" id="">
    </div>
    <div>
        <label for="">Nhập kí tự tìm kiếm: </label>
        <input type="text" name="search" id="">
    </div>
    <div>
        <input type="submit" value="submit" name="submit">
    </div>
   </form>
</body>
</html>
