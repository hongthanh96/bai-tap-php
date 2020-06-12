<?php
function checkIndex($index, $arr)
{
    if (filter_var($index, FILTER_VALIDATE_INT, array("option" => array("min_range" => 1, "max_range" => 100))) === false) {
        throw new Exception("Chỉ số vượt quá giới hạn của mảng!");
    }
    try {
        return "Giá trị của phần tử có chỉ số index = ".$index. " là ".$arr[$index];
    } catch (Exception $e) {
        return $e->getMessage();
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
    <h2>100 số ngẫu nhiên: </h2>
    <p>
        <?php
        $arr = [];
        for ($i = 0; $i < 100; $i++) {
            $arr[$i] = rand(1, 100);
            echo $arr[$i] . " ";
        }
        ?>
    </p>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
            <label for="">Nhập vào chỉ số index: </label>
            <input type="text" name="index" id="">
            <input type="submit" value="search" name="add">
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $index = $_POST["index"];
            echo checkIndex($index, $arr);
        }
        ?>
    </form>
</body>

</html>