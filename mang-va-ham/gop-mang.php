<?php
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gộp mảng người dùng nhập vào</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
    Nhập chiều dài mảng 1:<br>
    <input type="text" name="len1"><br>
    Nhập chiều dài mảng 2: <br>
    <input type="text" name="len2">
    <input type="submit" value="add" name="add">

<table>
    <tr>
        <td>Array1[0]</td><td><input type="text" name="array1[0]"></td>
    </tr>
    <tr>
        <td>Array2[0]</td><td><input type="text" name="array2[0]"></td>
    </tr>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $len1 = $_POST["len1"];
            $len2 = $_POST["len2"];
            $show = '';
        for($i =0 ; $i< $len1 ; $i++){
            
        }
        }
    
    ?>
</table>

    
</form>
</body>
</html>