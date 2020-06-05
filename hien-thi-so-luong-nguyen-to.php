<?php
function checknum($n)
{
    if ($n < 2) {
        return false;
    } else {
        for ($i = 2; $i < $n; $i++) {
            if ($n % 2 == 0) {
                return false;
                break;
            }
        }
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $count = 0;
    if ($number == 0 || $number < 0) {
        echo "Hãy nhập số lớn hơn 0";
    } else {
        echo $number . " Số nguyên tố đầu tiên là: ";
        $j = 2;
        while ($count <= $number) {
                if (checknum($j)){
                    echo $j . ' ';
                    $count++;
                }
                $j++;
                
                   
            }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị số lượng số nguyên tố đầu tiên</title>
</head>
<style>
    form {
        width: 500px;
        height: 300px;
        border: 2px solid black;
    }

    div {
        margin: 50px 100px;
    }
</style>

<body>
    <form action="hien-thi-so-luong-nguyen-to.php" method="post">
        <div>
            <label for="">Nhập số lượng số nguyên tố: </label>
            <input type="number" name="number" value="">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
        <div>
            <h3></h3>
        </div>
    </form>
</body>

</html>