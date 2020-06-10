
<?php
include_once "Employ.php";
include_once "EmployManager.php";

use Employees\Employee;
use EmployManagers\Employmanager;

function loadJson($filename)
{
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}
function JsonData($filename, $firstName, $lastName, $birthDay, $address, $possition)
{
    try {
        $contact = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDay' => $birthDay,
            'address' => $address,
            'possition' => $possition
        );
        $arr_data = loadJson($filename);
        array_push($arr_data, $contact);
        $jsondata = json_encode($arr_data, JSON_UNESCAPED_UNICODE);
        file_put_contents($filename, $jsondata);
        echo "Đã lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
$firstName = NULL;
$lastName = NULL;
$birthDay = NULL;
$address = NULL;
$possition = NULL;
$firstNameErro = NULL;
$lastNameErro = NULL;
$birthDayErro = NULL;
$addressyErro = NULL;
$positionErro = NULL;

if (isset($_POST["add"]) == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $birthDay = $_POST["birthDay"];
    $address = $_POST["address"];
    $possition = $_POST["possition"];
    $has_erro = false;
    if (empty($firstName)) {
        $firstNameErro = "fist Name không được để trống";
        $has_erro = true;
    }
    if (empty($lastName)) {
        $lastNameErro = "last Name không được để trống";
        $has_erro = true;
    }
    if (empty($birthDay)) {
        $birthDayErro = "birthday không được để trống";
        $has_erro = true;
    }
    if (empty($address)) {
        $addressyErro = "address không được để trống";
        $has_erro = true;
    }
    if (empty($possition)) {
        $positionErro = "possition không được để trống";
        $has_erro = true;
    }
    if($has_erro == false){
        $jsondata = JsonData('data.json',$firstName, $lastName, $birthDay, $address, $possition);
    }

    $employmanager = new Employmanager();
    $employmanager->add(new Employee($firstName, $lastName, $birthDay, $address, $possition));
    $employees = loadJson("data.json");
}
if(isset($_POST["Delete"]) == "POST"){
    $file = [];
    file_put_contents('data.json', json_encode($file));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
        }
        .erro{
            color:red;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <h2>Nhập danh sách nhân viên</h2>
        <div>
            <label for="">Fist Name: </label>
            <input type="text" name="firstName" id="">
        </div><br>
        <span class="erro">* <?= $firstNameErro ?></span>
            <br>
        <div>
            <label for="">Last name: </label>
            <input type="text" name="lastName" id="">
        </div><br>
        <span class="erro">* <?= $lastNameErro ?></span>
            <br>
        <div>
            <label for="">Birth day: </label>
            <input type="text" name="birthDay" id="">
        </div><br>
        <span class="erro">* <?= $birthDayErro ?></span>
            <br>
        <div>
            <label for="">Address: </label>
            <input type="text" name="address" id="">
        </div><br>
        <span class="erro">* <?= $addressyErro ?></span>
            <br>
        <div>
            <label for="">Possition: </label>
            <input type="text" name="possition" id="">
        </div><br>
        <span class="erro" >* <?= $positionErro ?></span>
            <br>
        <div>
            <input type="submit" value="Add" name="add">
            <input type="submit" value="Delete" name="Delete">

        </div>
    </form>

    <table>
        <h2>Danh sách nhân sự</h2>
        <tr>
            <th>Fist Name</th>
            <th>Last name</th>
            <th>Birth day</th>
            <th>Address</th>
            <th>Possition</th>
        </tr>
        <?php
        if(isset($employees)){
        foreach($employees as $employee){
            echo "<tr>";
            echo "<td>" . $employee["firstName"] . "</td>";
            echo "<td>" . $employee["lastName"] . "</td>";
            echo "<td>" . $employee["birthDay"] . "</td>";
            echo "<td>" . $employee["address"] . "</td>";
            echo "<td>" . $employee["possition"] . "</td>";
            echo "</tr>";
        }
    }else{
        echo "ko co giu lieu";
    }

        ?>

    </table>
</body>

</html>