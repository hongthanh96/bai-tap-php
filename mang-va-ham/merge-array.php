

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["submit"] === "add"){
        $numbers1 = explode(",", $_POST["array1"]);
        $numbers2 = explode(",", $_POST["array2"]);
        $merge = array_merge($numbers1,$numbers2);
        var_dump($merge);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Array</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
    <div>
        <label for="">Nhập mảng thứ 1: </label>
    <input type="text" name="array1" id="">
    </div>
    <div>
    <label for="">Nhập mảng thứ 2: </label>
    <input type="text" name="array2" id="">
    </div>
    <div>
        <input type="submit" value="add" name="submit">
    </div>
    
</form>
</body>
</html>