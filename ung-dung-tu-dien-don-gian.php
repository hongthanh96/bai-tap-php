<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng từ điển đơn giản</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

<body>
    <h2>Từ Điển Anh - Việt</h2>
    <form action="ung-dung-tu-dien-don-gian.php" method="post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm" />
        <input type="submit" id="submit" value="Tìm" />
    </form>

    <?php
    $dictionary = array("hello" => "Xin chào", "book" => "sách", "notebook" => "Vở", "pen" => "Bút", "computer" => "Máy tính");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $searchword = $_POST['search'];
    }
    $flag = false;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "ý nghĩa của " . $word . " là: " . $description;
            $flag = true;

        }
    }
    if($flag == false) {
        echo "Không tìm thấy từ cần tra.";
    }
    ?>

</body>

</html>