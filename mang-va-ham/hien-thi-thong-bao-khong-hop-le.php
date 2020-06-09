
<?php
    function checknum($num1, $num2,$codition){
        if($num2 == 0 && $codition == "div"){
            throw new Exception("Số chia phải khác không!");
        }
        try{
            if($codition == "add"){
                return $num1."+".$num2."=".$num1 + $num2;
            }
            if($codition == "sub"){
                return $num1."-".$num2."=".$num1 - $num2;
            }
            if($codition == "mul"){
                return $num1."*".$num2."=".$num1 * $num2;
            }
            if($codition == "div"){
                return $num1."/".$num2."=".$num1 / $num2;
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    if(isset($_POST["add"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $codition = $_POST["codition"];
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
            <select name="codition">
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