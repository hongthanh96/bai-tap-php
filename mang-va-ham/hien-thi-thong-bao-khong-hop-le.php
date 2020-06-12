<?php
$num1 = NULL;
$num2 = NULL;
$num1_erro = NULL;
$num2_erro = NULL;
$num3_erro = NULL;
if (isset($_POST["submit"])) {
    $num1 = (int) $_POST["num1"];
    $num2 = (int) $_POST["num2"];
    $condition = $_POST["condition"];
    $num1_erro = NULL;
    $num2_erro = NULL;
    $has_erro = false;
    if ((!is_numeric($num1)) || empty($num1)) {
        $num1_erro = "* Num1 Không được bỏ trống & Phải nhập kiểu số *";
        $has_erro = true;
    }
    if ((!is_numeric($num2)) || empty($num2)) {
        $num2_erro = "* Num2 Không được bỏ trống & Phải nhập kiểu số *";
        $has_erro = true;
    }
     else if ($has_erro === false) {
        if ($condition === "add") {
            echo $num1 + $num2;
        }
        if ($condition === "sub") {
            echo $num1 - $num2;
        }
        if ($condition === "mul") {
            echo $num1 * $num2;
        }
        if ($condition === "div") {
            echo $num1 / $num2;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng máy tính đơn giản</title>
    <style>
        .erro {
            color: red;
        }
    </style>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
            <label for="">Number1: </label>
            <input type="text" name="num1" id="">
        </div>
        <p class="erro"><?= $num1_erro ?></p><br>
        <div>
            <label for="">Number2: </label>
            <input type="text" name="num2" id="">
        </div>
        <p class="erro"><?= $num2_erro ?></p><br>
        <div>
            <select name="condition">
                <option value="add">Additional(+)</option>
                <option value="sub">Subtraction(-)</option>
                <option value="mul">multiplication(*)</option>
                <option value="div">Division(/)</option>
            </select>
        </div>
        <input type="submit" value="Result" name="submit">
    </form>

</body>

</html>