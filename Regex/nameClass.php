<?php

function checkNameClass($str){
    $pattern = '/^(C|A|P)([0-9]{4})(G|H|K|L|M)$/';
    if(preg_match($pattern,$str)){
        echo "Tên lớp hợp lệ!";
    }
    else{
        echo "Tên lớp không hợp lệ!";
    }
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    checkNameClass($name);
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Class</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
<label for="">Nhập tên lớp: </label>
<input type="text" name="name" id="">
<input type="submit" value="Submit">
</form>
</body>
</html>