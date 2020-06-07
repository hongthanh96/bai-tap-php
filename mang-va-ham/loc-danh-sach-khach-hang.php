<?php
$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "/images/img1.jpg"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "/images/img2.jpg"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "/images/img3.jpg"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "/images/img4-01.jpg"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "/images/img5-2.jpg")
);
?>
<?php
    function searchByDate($customers, $from_date, $to_date) {
        if(empty($from_date) && empty($to_date)){
            return $customers;
        }
        $filtered_customers = [];
        foreach($customers as $customer){
            if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
                continue;
            if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
                continue;
            $filtered_customers[] = $customer;
        }
        return $filtered_customers;
    }
?>
<?php
    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["from"];
        $to_date = $_POST["to"];
    }
    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lọc danh sách khách hàng</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    tr,td{
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid black;
    }
    img{
        width: 50px;
        height: 50px;
    }
</style>

<body>
    <form action="loc-danh-sach-khach-hang.php" method="post">
        <label for="">From:</label>
        <input type="text" name="from" placeholder="yyyy/mm/dd">
        <label for="">to:</label>
        <input type="text" name="to" placeholder="yyyy/mm/dd">
        <input type="submit" value="Search" id="submit">
    </form>
    <table border="0">
  <caption><h2>Danh sách khách hàng</h2></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
  <?php if(count($filtered_customers) === 0):?>
    <tr>
        <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
    </tr>
  <?php endif; ?>
 
  <?php foreach($filtered_customers as $index => $customer): ?>
    <tr>
        <td><?php echo $index + 1;?></td>
        <td><?php echo $customer['name'];?></td>
        <td><?php echo $customer['day_of_birth'];?></td>
        <td><?php echo $customer['address'];?></td>
        <td><div class="profile"><img src="<?php echo $customer['image'];?>"/></div> </td>
    </tr>
    <?php endforeach; ?>
</table>

    <h1>Customer List</h1>
    <table>
        <tr>
            <td>No.</td>
            <td>Customer name</td>
            <td>Birday</td>
            <td>Address</td>
            <td>Image</td>
        </tr>
        <?php
        foreach ($customer_list as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value["name"] . "</td>";
            echo "<td>" . $value["day_of_birth"] . "</td>";
            echo "<td>" . $value["address"] . "</td>";
            echo "<td><img src = " . $value["image"] . " width = '50px' height = '50px'/></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>