<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng đọc số thành chữ</title>
    <style>
        form {
            width: 300px;
            height: 300px;
            border: 2px solid burlywood;
            box-shadow: cadetblue;
            padding: 3%
        }

        h2 {
            padding-bottom: 10%;
        }
    </style>
</head>

<body>
    <form action="ung-dung-doc-so-thanh-chu.php" method="post">
        <h2>Ứng dụng đọc số thành chữ</h2>
        <div>
            <input type="number" name="number" placeholder="Nhập số cần đọc" value="search">
            <input type="submit" value="Search">
        </div>
        <div>
            <p>Số này đọc là: </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numsearch = $_POST['number'];
            }
            if ($numsearch < 10 && $numsearch >= 0) {
                $num1 = $numsearch;
                switch ($num1) {
                    case 1:
                        echo "one";
                        break;
                    case 2:
                        echo "two ";
                        break;
                    case 3:
                        echo "three ";
                        break;
                    case 4:
                        echo "four ";
                        break;
                    case 5:
                        echo "five ";
                        break;
                    case 6:
                        echo "six";
                        break;
                    case 7:
                        echo "seven ";
                        break;
                    case 8:
                        echo "eight";
                        break;
                    case 9:
                        echo "nine";
                        break;
                }
                 
            }

            if ($numsearch >= 10 && $numsearch < 20) {
                global $num1;
                $numbeafter = $_POST['$num1'];
                $num2 = $numsearch;
                switch ($num2) {
                    case 10:
                        echo "ten";
                        break;
                    case 11:
                        echo "eleven";
                        break;
                    case 12:
                        echo "twelve";
                        break;
                    case 13:
                        echo "thirteen";
                        break;
                    case '1'.$numbeafter:
                        echo "fiveteen";
                        break;
                    // case $numbefore . '5':
                    //     echo "$numbefore.$teen";
                    //     break;
                    // case $numbefore . '6':
                    //     echo "$numbefore.$teen";
                    //     break;
                    // case $numbefore . '7':
                    //     echo "$numbefore.$teen";
                    //     break;
                    // case $numbefore . '8':
                    //     echo "$numbefore.$teen";
                    //     break;
                    // case $numbefore . '9':
                    //     echo "$numbeforenum1.$teen";
                    //     break;
                }
            }
            ?>
        </div>
    </form>
</body>

</html>