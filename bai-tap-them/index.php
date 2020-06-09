<!-- <?php include ("class_lib.php");?>



<?php
  $stefan = new person("Thanh");
  $jimmy = new person("Vân");
  echo "stefan of name: ".$stefan->get_name()."<br>";
  echo "jimmy of name: ".$jimmy->get_name();
  echo "Tell me pravite".$jimmy->pinn_number;


?> -->

<?php
function loadJson($filejson)
{
    $jsonData = file_get_contents($filejson);
    $data = json_decode($jsonData, true);
    return $data;
}
function saveDataJson($filejson, $name, $email, $tel)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'tel' => $tel
        );
        $data = loadJson($filejson);
        array_push($data, $contact);
        $jsonData = json_encode($data, JSON_UNESCAPED_UNICODE);
        file_put_contents($filejson, $jsonData);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo "Lỗi: ", $e->getMessage();
    }
}
$name = NULL;
$email = NULL;
$tel = NULL;
$name_erro = NULL;
$email_erro = NULL;
$tel_erro = NULL;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $has_erro = false;
    if (empty($name)) {
        $name_erro = "Name không được để trống!";
        $has_erro = true;
    }
}
if (empty($email)) {
    $email_erro = "Email không được để trống!";
    $has_erro = true;
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_erro = "Định dạng email sai!";
        $has_erro = true;
    }
}
if (empty($tel)) {
    $tel_erro = "Telephone không được để trống!";
    $has_erro = true;
}
if ($has_erro === false) {
    saveDataJson("users.json", $name, $email, $tel);
    $name = NULL;
    $email = NULL;
    $tel = NULL;
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang đăng kí người dùng</title>
    <style>
        form {
            width: 500px;
        }

        .erro {
            color: red;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: solid 1px black;
        }
    </style>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <h2>Form đăng kí người dùng</h2>
        <div>
            <label for="">Name: </label>
            <input type="text" name="name" id="">
            <span class="erro"><?= $name_erro ?></span>
        </div>
        <div>
            <label for="">Email: </label>
            <input type="email" name="email" id="">
            <span class="erro"><?= $email_erro ?></span>
        </div>
        <div>
            <label for="">Telephone: </label>
            <input type="number" name="tel" id="">
            <span class="erro"><?= $tel_erro ?></span>
        </div>
        <div>
            <input type="submit" value="Add" name="add">
        </div>
    </form>
    <?php
    $registtrations = loadJson("users.json");
    ?>
    <h2>Danh sách đăng kí người dùng</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($registtrations as $registration): ?>
            <tr>
                <td><?php $registration["name"]; ?></td>
                <td><?php $registration["email"]; ?></td>
                <td><?php $registration["tel"]; ?></td>
            </tr>
        <?php endforeach ?>
    </table>




</body>

</html> 