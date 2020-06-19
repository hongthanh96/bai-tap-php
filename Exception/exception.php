<?php
class DivideByZeroException extends Exception {

    public function __toString()
    {
        return "Can't divide by zero";
    }
}
function divide($num1, $num2)
{
    if ($num2 == 0) {
        throw new DivideByZeroException();
    } else {
        return $num1 / $num2;
    }
}
$result = '';
function operator($num1, $num2, $codition,&$result)
{
    if ($codition === "add") {
        $result = $num1 + $num2;
    }

    if ($codition === "sub") {
        $result = $num1 - $num2;
    }
    if ($codition === "mul") {
        $result = $num1 * $num2;
    }
    if ($codition === "div") {
        $result=divide($num1,$num2);
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];
    $condition = $_POST["condition"];
    if (!filter_var($num1, FILTER_VALIDATE_FLOAT) && !filter_var($num2, FILTER_VALIDATE_FLOAT)) {
        $erroNum = "*number phải là kiểu số và không được để trống*";
    } else {
        try {
            operator($num1, $num2, $condition,$result);
        } catch (DivideByZeroException $e) {
            echo "Có lỗi xảy ra: " . $e;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exception</title>
    <style>
        .erro {
            color: red;
        }
    </style>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h2>Máy tính đơn giản</h2>
        <div>
            <label for="">Number 1: </label>
            <input type="text" name="num1" id=""><br>
            <p class="erro"><?= $erroNum ?? '' ?></p><br>
        </div>
        <div>
            <label for="">Number 2: </label>
            <input type="text" name="num2" id="">
            <p class="erro"><?= $erroNum ?? '' ?></p><br>
        </div>
        <select name="condition" id="">
            <option value="add">Addition(+)</option>
            <option value="sub">Subtraction(-)</option>
            <option value="mul">Multiplication(X)</option>
            <option value="div">Division(/)</option>
        </select>
        <div><input type="submit" value="add"></div>
        <p>Result: <?= $result ?? '' ?></p>
    </form>
</body>

</html>