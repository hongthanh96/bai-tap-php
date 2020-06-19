<?php
    function checkAccount($str){
        $pattern = '/^[_a-z0-9]{6,}$/';
        if(preg_match($pattern,$str)){
            echo "Email hợp lệ!";
        }
        else{
            echo "Email không hợp lệ!";
        }
    }
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $str = $_POST["str"];
        checkAccount($str);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate account</title>
</head>
<body>
    <label for="">Nhâp chuỗi string: </label>
    <input type="text" name="str" id="">
    <input type="submit" value="submit">
</body>
</html>