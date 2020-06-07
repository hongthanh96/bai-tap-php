<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị các loại hình</title>
</head>
<body>
    <form action="hien-thi-cac-loai-hinh.php" method="post">
    <h2>Hiển thị các loại hình</h2>
        <select name="draw">
            <option value="rectangle">Print the rectangle</option>
            <option value="square1">Square triangle(top-left)</option>
            <option value="square2">Square triangle(top-right)</option>
            <option value="square3">Square triangle(botton-left)</option>
            <option value="square4">Square triangle(botton-right)</option>
            <option value="isosceles">isosceles triangle</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $draw = $_POST['draw'];
        }

        function createRect($draw){
            for($i = 1; $i<=3; $i++){
                echo "<br>";
                for($j = 1; $j <=7; $j++){
                    echo "*"."&nbsp;";
                }
            }
        }
        function createSquare1($draw){
            for($i = 1; $i <= 5; $i++){
                echo "<br>";
                for($j=5;$j>=$i;$j--){
                    echo "*"."&nbsp;";
                }
            }
        }
        function createSquare2($draw){
            for($i = 1;$i <=5;$i++){
                echo "<br>";
                for($j = 0; $j <$i;$j++){
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                for($k=5;$k>=$i;$k--){
                    echo "* &nbsp;";
                }
            }
        }
        function createSquare3($draw){
            for($i = 1; $i <= 5; $i++){
                echo "<br>";
                for($j= 1; $j <=$i; $j++){
                    echo "*"."&nbsp;";
                }
                for ($k = 4;$k>= $i; $k--){
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
        }
        function createSquare4($draw){
            for($i = 1; $i <=5;$i++){
                echo "<br>";
                for($j =5; $j>$i;$j--){
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                for($k = 0; $k<$i;$k++){
                    echo "*"."&nbsp;";

                }
            }
        }
        function create_isos($draw){
            for($i = 1;$i <=5;$i++){
                echo "<br>";
                for($j = 0; $j <$i;$j++){
                    echo "&nbsp;&nbsp;";
                }
                for($k=5;$k>=$i;$k--){
                    echo "* &nbsp;&nbsp;";
                }
            }
        }

        if($draw == "rectangle"){
            createRect($draw);
        }
        if($draw == "square1"){
            createSquare1($draw);
        }
        if($draw == "square2"){
            createSquare2($draw);
        }
        if($draw == "square3"){
            createSquare3($draw);
        }
        if($draw == "square4"){
            createSquare4($draw);
        }

        if($draw == "isosceles"){
            create_isos($draw);
        }

    
    ?>
</body>
</html>