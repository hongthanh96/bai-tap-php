<?php
include_once "Shape.php";
include_once "triangle.php";
$erro_side1 = NULL;
$erro_side2 = NULL;
$erro_side3 = NULL;;

if (isset($_POST["Submit"]) == "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $color = $_POST["color"];
   
    if(!is_numeric($side1) || $side1 <0){
        $erro_side1 = "* Nhập độ dài cạnh AB lớn hơn 0 *";
    }
    if(!is_numeric($side2 || $side2 <0)){
        $erro_side2 = "* Nhập độ dài cạnh AC lớn hơn 0 *";
    }
    if(!is_numeric($side3 || $side3 <0)){
        $erro_side3 = "* Nhập độ dài cạnh BC lớn hơn 0 *";
    }
    $triangle = new Triangle();
    $triangle->setSide1($side1);
    $triangle->setSide2($side2);
    $triangle->setSide3($side3);
    $triangle->setColor($color);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
    <style>
        .erro {
            color: red;
        }
    </style>
</head>

<body>
    <form action="$_SERVER['PHP_SELF']" method="post">
        <h1>Triangle</h1>
        <div>
            <label for="">Cạnh AB: </label>
            <input type="text" name="side1" id="">
        </div>
        <br>
        <span class="erro"><?= $erro_side1; ?></span>
        <div>
            <label for="">Cạnh AC: </label>
            <input type="text" name="side2" id="">
        </div>
        <br>
        <span class="erro"><?= $erro_side2; ?></span>
        <div>
            <label for="">Cạnh BC: </label>
            <input type="text" name="side3" id="">
        </div>
        <br>
        <span class="erro"><?= $erro_side3; ?></span>
        <div>
            <label for="">Color: </label>
            <input type="text" name="color" id="">
        </div>
        <div>
            <input type="submit" value="Submit" name="Submit">
        </div>
        <p><?= $triangle; ?></p>

    </form>

</body>

</html>