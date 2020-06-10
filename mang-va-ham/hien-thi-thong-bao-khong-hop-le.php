
<?php
    function checknum($num1,$num2,$condition){
        if($num2 == 0 && $condition == "div"){
            throw new Exception("Số chia phải khác không!");
        }
        try{
            if($condition == "add"){
                return $num1."+".$num2."=".$num1 + $num2;
            }
            if($condition == "sub"){
                return $num1."-".$num2."=".$num1 - $num2;
            }
            if($condition == "mul"){
                return $num1."*".$num2."=".$num1 * $num2;
            }
            if($condition == "div"){
                return $num1."/".$num2."=".$num1 / $num2;
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    if(isset($_POST["add"])){
        $num1 = (float)$_POST["num1"];
        $num2 = (float)$_POST["num2"];
        $condition = $_POST["condition"];
        echo checknum($num1,$num2,$condition);
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng máy tính đơn giản</title>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
            <label for="">Number1: </label>
            <input type="number" name="num1" id="">
        </div>
        <div>
            <label for="">Number2: </label>
            <input type="number" name="num2" id="">
        </div>
        <div>
            <select name="condition">
                <option value="add">Additional(+)</option>
                <option value="sub">Subtraction(-)</option>
                <option value="mul">multiplication(*)</option>
                <option value="div">Division(/)</option>
            </select>
        </div>
        <input type="submit" value="Result" name="add">


    </form>

</body>

</html>