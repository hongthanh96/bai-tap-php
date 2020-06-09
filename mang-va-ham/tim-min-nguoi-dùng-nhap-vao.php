<?php
    session_start();
    function findmin($arr){
        if(count($arr) === 0){
            return "Nhập số vào";
        }
        $index = 0;
        $min = $arr[0];
        for($i = 1; $i< count($arr); $i++){
            if($arr[$i] < $min){
                $min = $arr[$i];
                $index = $i;
            }
        }
        return "Số nhỏ nhất là: ".$min."<br> Có chỉ số index = ".$index;
    }


    if(isset($_SESSION["arrnum"])){
        $arrnum = $_SESSION["arrnum"];
    }
    else{
        $arrnum = array();
    }

if(isset($_POST['submit'])){
    array_push($arrnum,$_POST["number"]);
    $_SESSION["arrnum"] = $arrnum;
}
if(isset($_POST["show"])){
    echo findmin($arrnum);
    unset($_SESSION["arrnum"]);

}
print_r($arrnum);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số nhỏ nhất người dùng nhập vào</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<label for="">Number: </label>
<input type="number" name="number" id="">
<input type="submit" value="submit" name="submit">
<input type="submit" value="show" name="show">

</form>
    
</body>
</html>