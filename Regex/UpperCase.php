<?php
function UpperCase($str){
    $pattern = '/^[A-Z]/';
if(preg_match($pattern,$str)){
    echo "Kí tự đầu tiên là kí tự HOA!";
}
else{
    echo "Kí tự đầu tiên không phải chữ HOA";
}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    UpperCase($name);
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
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <label for="">Nhập tên: </label>
        <input type="text" name="name" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>