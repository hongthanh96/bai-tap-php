<?php
session_start();
function sum($arr)
{
    $total1 = 0;
    $total2 = 0;
    $lenarr = count($arr);
    for ($i = 0; $i < count($arr); $i++) {
        $total1 += $arr[$i][$i];
        $total2 += $arr[$i][$lenarr-1];
        $lenarr--;
    }
    $sumarr = $total1 + $total2;
    return $sumarr; 
}
if (isset($_SESSION["array"])) {
    $array = $_SESSION["array"];
} else {
    $array = [];
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["submit"] === "add") {
        $arrnum = explode(",", $_POST["num"]);
        $numbers = [];
        foreach ($arrnum as $number) {
            if (filter_var($number, FILTER_VALIDATE_FLOAT)) {
                array_push($numbers, $number);
            }
        }
        array_push($array, $numbers);
        $_SESSION["array"] = $array;
    }
    if ($_POST["submit"] === "show") {
        var_dump($array);
        echo "Tổng 2 đường chéo = ". $sum2chieu = sum($array);
        session_unset();
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
            <label for="">Nhập chuỗi số: </label>
            <input type="text" name="num" id="">
        </div>
        <div>
            <input type="submit" value="add" name="submit">
            <input type="submit" value="show" name="submit">
        </div>
    </form>

</body>

</html>