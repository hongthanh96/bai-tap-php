<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $money = $_POST['money'];
    $from = $_POST["from"];
    $to = $_POST["to"];
    define("cout",23000);
    $result = "";
    if ($from == "usd" && $to == "vnd") {
        $result = $money * cout.$to;
    }
    if ($from == "vnd" && $to == "usd") {
        $result = $money / cout.$to;
    } 
    if ($from == "usd" && $to == "usd") {
        $result = $money.$to;
    } 
    if ($from == "vnd" && $to == "vnd") {
        $result = $money.$to;
    } 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng chuyển đổi tiền tệ</title>
</head>
<style>
    form {
        width: 500px;
        height: 300px;
        border: 2px black solid;
    }

    div {
        margin: 5px 20px;
    }
    #submit{
        margin-left: 60px;
    }
</style>

<body>
    <form action="ung-dung-chuyen-doi-tien-te.php" method="post">
        <div><h2>Ứng dụng chuyển đổi tiền tệ</h2></div>
        <div>
            <label for="">MONEY:</label>
            <input type="number" name="money">
        </div>
        <div>
            <label for="">FROM: </label>
            <select name="from">
                <option value="usd">USD</option>
                <option value="vnd">VND</option>
            </select>
            <label for="">TO:</label>
            <select name="to">
                <option value="vnd">VND</option>
                <option value="usd">USD</option>
            </select>
        </div>
        <div>
            <input id="submit" type="submit" value="submit">
        </div>
        <div>
            <h3>RESULT: <?=$result?></h3>

        </div>


    </form>
</body>

</html>