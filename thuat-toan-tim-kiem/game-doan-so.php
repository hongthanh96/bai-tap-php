<?php
// function fundNum($arr, $num)
// {
//     $low = 0;
//     $high = count($arr) - 1;
//     while ($low < $high) {
//         $mid = (int) ($low + $high) / 2;
//         if ($num > $arr[$mid]) {
//             $low = $mid + 1;
//         } else if ($num < $arr[$mid]) {
//             $high = $mid - 1;
//         } else {
//             return $mid;
//         }
//     }
//     return -1;
// }
$arr = [];
for ($i = 1; $i < 101; $i++) {
    $arr[$i] = $i;
}
foreach ($arr as $value) {
    echo $value . " ";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $low = 0;
    $high = count($arr) - 1;

    while ($low < $high) {
        $mid = (int) ($low + $high) / 2;
        echo "$arr[$mid] ??";
        if ($_POST["smaller"]) {
            $low = $mid + 1;
            // echo "Số bạn lớn hơn hay nhỏ hơn $arr[$mid] ?";
        } else  if ($_POST["bigger"]) {
            $high = $mid - 1;
            // echo "Số bạn lớn hơn hay nhỏ hơn $arr[$mid] ?";
        } else {
            echo "Số bạn tìm là số $arr[$mid]";
        }
    }
    echo "Không có số bạn đoán!";
    // if($_POST["submit"] === "smaller"){

    // }
    // if($_POST["submit"] === "bigger"){

    // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game đoán số</title>
</head>

<body>
    <fieldset>
        <legend>Game Đoán số</legend>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <h2>GAME ĐOÁN SỐ</h2>
            <p>Viết ra giấy số ngẫu nhiên bạn đoán từ 1 -> 100</p>
            <!-- <input type="submit" value="smaller" name="smaller"> -->
        </form>
        <div style="display: flex;">
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="submit" value="smaller" name="smaller">
            </form>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="submit" value="bigger" name="bigger">
            </form>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="submit" value="yes" name="yes">
            </form>
        </div>
    </fieldset>

</body>

</html>