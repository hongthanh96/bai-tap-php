<?php
session_start();
function sumCol($arr, $search)
{
    $index = 0;
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i];
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($j === $search) {
                $index = $j;
                $total += $arr[$i][$index];
            }
        }
    }
    return $total;
}
if (isset($_SESSION["array"])) {
    $array = $_SESSION["array"];
} else {
    $array = [];
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num_col = (float)$_POST["colum"];
    if ($_POST["submit"] === "add") {
      
        $arr_num = explode(",", $_POST["num"]);
        $numbers = [];
        foreach ($arr_num as $number) {
            if (filter_var($number, FILTER_VALIDATE_FLOAT)) {
                array_push($numbers, $number);
            }
        }
        array_push($array, $numbers);
        $_SESSION["array"] = $array;
    }
    if ($_POST["submit"] === "show") {
        // if (!empty($col_num) && is_numeric($col_num)) {
            var_dump($array);
            echo $num_col."<br>";
            echo sumCol($array, $num_col);
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
            <label for="">Nhập các dãy số</label>
            <input type="text" name="num" id="">
        </div>
        <div>
            <label for="">Nhập cột muốn tính tổng:</label>
            <input type="number" name="colum" id="">
        </div>
        <div>
            <input type="submit" value="add" name="submit">
            <input type="submit" value="show" name="submit">
        </div>
    </form>
</body>

</html>