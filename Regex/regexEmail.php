<?php
    function checkEmail($str){
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if(preg_match($pattern,$str)){
            echo "Email đúng!";
        }
        else{
            echo "Email sai!";
        }
    }
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        checkEmail($email);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra Email</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <label for="">Nhập Email: </label>
    <input type="text" name="email" id="">
    <input type="submit" value="Submit">
</form>
</body>
</html>