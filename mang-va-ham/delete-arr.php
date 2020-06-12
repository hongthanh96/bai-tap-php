<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $arrnum = explode(',',$_POST["num"]);
        $numbers =[];
        foreach($arrnum as $number){
            if(filter_var($number,FILTER_VALIDATE_FLOAT)){
                array_push($numbers,$number);
            }
        }
        if(isset($_POST["add"])){
            $numdel = $_POST["numdel"];
        }

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
    <form action="delete-arr.php" method="post">
        <div>
            <label for="">Chuỗi số: </label>
            <input type="text" name="num" id="">
        </div>
        <div>
            <label for="">Số cần xóa: </label>
            <input type="number" name="numdel" id="">
        </div>
        <div>
            <input type="submit" value="show" name="add">
        </div>


    </form>
</body>

</html>