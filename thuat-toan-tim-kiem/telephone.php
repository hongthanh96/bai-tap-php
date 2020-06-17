<?php
function checkPhone($arr, $num)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $num) {
            return true;
        }
    }
    return false;
}
$str = "078969495,090594595";
$viettelNum = [86, 96, 97, 98, 32, 33, 34, 35, 36, 37, 38, 39];
$vinaNum = [88, 91, 94, 83, 84, 85, 81, 82];
$mobiNum = [70, 76, 77, 78, 79, 89, 90, 93,];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $arrPhone = explode(',', $_POST["phone"]);
    $arrTelephone = [
        "viettel" => [],
        "vina" => [],
        "mobi" => [],
        "exception" => []
    ];
// var_dump($arrPhone);
    foreach ($arrPhone as $value) {
        $firstPhone = substr($value, 1, 2);
        if (filter_var($firstPhone, FILTER_VALIDATE_INT) && strlen($value) === 10) {
            if ($value[0] == 0) {
                if (checkPhone($viettelNum, $firstPhone)) {
                    array_push($arrTelephone["viettel"], $value);
                } elseif (checkPhone($vinaNum, $firstPhone)) {
                    array_push($arrTelephone["vina"], $value);
                } elseif (checkPhone($mobiNum, $firstPhone)) {
                    array_push($arrTelephone["mobi"], $value);
                } else {
                    array_push($arrTelephone["exception"], $value);
                }
            } else {
                array_push($arrTelephone["exception"], $value);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }

        th,
        td {
            border: 1px black solid;
            vertical-align: top;

        }
    </style>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="">Nhập các số điện thoại: </label><br><br>
        <textarea name="phone" id="" cols="30" rows="10" placeholder="Ví dụ: 0702420337,0367838605"></textarea><br>
        <input type="submit" value="Search" name="search"><br>
        <table>
            <tr>
                <th>Viettel</th>
                <th>Vina</th>
                <th>Mobi</th>
                <th>Exception</th>
            </tr>
            <?php if (!empty($arrTelephone)) : ?>
                <tr>
                    <?php foreach ($arrTelephone as $value) : ?>
                        <td>
                            <?php foreach ($value as $val) : ?>
                                <?= $val ?>
                                <br>
                            <?php endforeach ?>
                        </td>
                    <?php endforeach ?>
                <?php endif; ?>
                </tr>
        </table>

    </form>

</body>

</html>