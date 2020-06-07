<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Product Discount Calculator</title>
</head>
<style>
    form {
        width: 500px;
        height: 400px;
        border: 2px solid gray;
        box-shadow: lightblue;
    }

    .container {
        margin: 2% 3%;
    }

    div {
        padding: 3% 5%;
    }
    .fix{
        margin-left: 15%;
    }
</style>

<body>
    <form action="product-discount.php" method="post">
        <div class="container">
            <h2>Product Discount Calculator</h2>
            <div>
                <label for="">Product Description: </label>
                <input type="text" name="product" value="" placeholder="Mô tả sản phẩm">
            </div>
            <div>
                <label for="">List Price: </label>
                <input class = "fix" type="text" name="money" placeholder="Giá niêm yết sản phẩm ">
            </div>
            <div>
                <label for="">Discount Percent: </label>
                <input type="text" name="dicount" value="" placeholder="Tỉ lệ chiết khấu">
            </div>
            <div><input type="submit" value="Calculate Discount "></div>
            <div>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $product = $_POST['product'];
                        $money = $_POST['money'];
                        $dicount = $_POST['dicount'];
                    }
                    $amount = $money * $dicount * 0.1;
                    $moneyafter = $money - $amount;
                    echo "Sản phẩm: ".$product."<br>","Giá niêm yết: ".$money."<br>", "Tỉ lệ chiết khấu: ".$dicount."<br>";
                    echo "Giá sau khi đã được chiết khấu: ".$moneyafter."VND";

                ?>

            <div>
    </form>

</body>

</html>