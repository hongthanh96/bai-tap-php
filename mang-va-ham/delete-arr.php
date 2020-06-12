<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $arrnum = explode(',',$_POST["num"]);
        $numdel = $_POST["numdel"];
        $numbers =[];
        foreach($arrnum as $number){
            if(filter_var($number,FILTER_VALIDATE_FLOAT)){
                array_push($numbers,$number);
            }
        }
        if(isset($_POST["add"])){
            $numdel = $_POST["numdel"];
            $index_del = NULL;
            for($i = 0; $i < count($numbers); $i++){
                if($numbers[$i] === $numdel){
                    $index_del = $i;
                }
            }
        }
        $num_del = array_splice($numbers,$index_del,1);
        print_r($numbers);

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