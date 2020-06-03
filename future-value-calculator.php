<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Future Value Calculator</title>
</head>
<style>
    form{
        width: 500px;
        height: 300px;
        border: 2px solid gray;
        box-shadow: lightblue;
    }
    .container{
        margin: 2% 5%;
    }
    div{
        padding: 3% 5%;
    }
</style>
<body>
    
    <form action="future-value-calculator.php" method="post">
        <div class="container">
        <h2>Future Value Calculator</h2>
        <div>
            <label for="">Inventment Amount: </label>
            <input type="number" name="money" value="" placeholder="Nhập số tiền đầu tư">
        </div>
        <div>
            <label for="">Yearly Interest Rate: </label>
            <input type="text" name="rate" placeholder="Nhập lãi xuất năm: ">
        </div>
        <div>
            <label for="">Number of Years: </label>
            <input type="number" name="year" value="" placeholder="Nhập số năm đầu tư">
        </div>
        <div><input type="submit" value="Calculate"></div>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $money = $_POST['money'];
            $rate = $_POST['rate'];
            $year = $_POST['year'];
           
            for($i = 0; $i <$year; $i++){
                $money = $money + $money*$rate;
            }
            $calculate = $money;
            echo "Giá trị tương lai nhận được: ".$calculate." VND";
        }
        ?>
        </div>
    </form>
</body>
</html>