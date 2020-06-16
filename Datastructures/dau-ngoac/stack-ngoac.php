<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stack = new SplStack;
    $str = $_POST["str"];
    $check = true;
    for ($i = 0; $i < strlen($str); $i++) {
        $sym = '(';
        if ($str[$i] === $sym) {
            $stack->push($sym);
        }
        if ($str[$i] === ")") {
            if ($stack->isEmpty()) {
                $check = false;
            } else {
                $stack->pop();
            }
        }
    }
    if (!$stack->isEmpty()) {
        $check = false;
    }
    if ($check) {
        $result = "well!. Biểu thức của bạn đúng!";
    } else {
        $result = "Biểu thức của bạn thiếu dấu ngoặc!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dấu ngoặc</title>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
            <label for="">Nhập biểu thức: </label>
            <input type="text" name="str" id="">
        </div>
        <div><input type="submit" value="Check"></div>
        <p>Result: <?= $result ?? '' ?></p>
    </form>
</body>

</html>