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

            function searchto10($numsearch)
            {
                switch ($numsearch) {
                    case 1:
                        return "one";
                        break;
                    case 2:
                        return "two ";
                        break;
                    case 3:
                        return "three ";
                        break;
                    case 4:
                        return "four ";
                        break;
                    case 5:
                        return "five ";
                        break;
                    case 6:
                        return "six";
                        break;
                    case 7:
                        return "seven ";
                        break;
                    case 8:
                        return "eight";
                        break;
                    case 9:
                        return "nine";
                        break;
                }
            }
            function searchto20($numsearch)
            {
                switch ($numsearch) {
                    case 10:
                        return "ten";
                        break;
                    case 11:
                        return "eleven";
                        break;
                    case 12:
                        return "twelve";
                        break;
                    case 13:
                        return "thirteen";
                        break;
                    case 14:
                        return "fourteen";
                        break;
                    case 15:
                        return "fifteen";
                        break;
                    case 16:
                        return "sixteen";
                        break;
                    case 17:
                        return "seventeen";
                        break;
                    case 18:
                        return "eightteen";
                        break;
                    case 19:
                        return "nineteen";
                        break;
                }
            }
            function searchto100($num2){
                switch($num2){
                    case 2:
                        return "twenty";
                    break;
                    case 3:
                        return "thirty";
                    break;
                    case 4:
                        return "forty";
                    break;
                    case 5:
                        return "fifty";
                    break;
                    case 6:
                        return "sixty";
                    break;
                    case 7:
                        return "seventy";
                    break;
                    case 8:
                        return "eighty";
                    break;
                    case 9:
                        return "ninety";
                    break;

                }
            }


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numsearch = $_POST['number'];
                if ($numsearch < 10 && $numsearch >= 0) {
                    $num1 = searchto10($numsearch);
                    echo $num1;
                }
                if ($numsearch >= 10 && $numsearch < 20) {
                    echo searchto20($numsearch);
                }
                if($numsearch >=20 && $numsearch <100){
                    $num2 = (floor($numsearch / 10));
                    $num3 = $numsearch % 10;
                    $numtwo = searchto100($num2);
                    $numone = searchto10($num3);
                   
                    echo $numtwo." ".$numone;
                }
            }
            ?>
        </div>
    </form>
</body>

</html>