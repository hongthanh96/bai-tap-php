<?php
session_start();
function findmax($arr)
{
    if (!empty($arr)) {
        $max = $arr[0][0];

        for ($i = 0; $i < count($arr); $i++) {

            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($arr[$i][$j] > $max) {
                    $max = $arr[$i][$j];
                }
            }
        }
        return "Số lớn nhất trong mảng là: " . $max;
    } else {
        return "Nhập số vào!";
    }
}
if (isset($_SESSION['array'])) {
    $array = $_SESSION["array"];
} else {
    $array = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["submit"] === "Add") {
        $arrnum = explode(',', $_POST["num"]);

        $numbers = [];
        foreach ($arrnum as $number) {
            if (filter_var($number, FILTER_VALIDATE_FLOAT)) {
                array_push($numbers, $number);
            }
        }
        array_push($array, $numbers);
        $_SESSION["array"] = $array;
    }
    if ($_POST["submit"] === "Show") {
        echo findmax($array);
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
    <form action="max-2-chieu.php" method="post">
        <input type="text" name="num" id="">
        <input type="submit" value="Add" name="submit">
        <input type="submit" value="Show" name="submit">

    </form>
</body>

</html>