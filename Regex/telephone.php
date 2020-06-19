<?php
    function checkPhone($str){
        $pattern = '/^(\()[0-9]{2}(\)-\(0)[0-9]{9}(\))$/';
        if(preg_match($pattern,$str)){
            echo "Số điện thoại hợp lệ!";
        }
        else{
            echo "Số điện thoại không hợp lệ!";
        }
    }

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $phone = $_POST["phone"];
    checkPhone($phone);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Telephone</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="">Nhập số điện thoại: </label>
    <input type="text" name="phone" id="">
    <input type="submit" value="Submit">
    </form>
</body>

</html>