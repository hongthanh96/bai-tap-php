<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $usename = $_GET['name'];
        $password = $_GET['password'];
    }
    if($usename == 'admin' && $password == 'admin'){
        echo "<h2>Welcome <span style = 'color: red'>".$usename."</span></h2>";
    }
    else{
        echo "<h2><span style = 'color:red'>Login Erro</span></h2>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chức năng đăng nhập</title>
    <style>
        form{
            width: 300px;
            height: 300px;
            border: gray 2px solid;
        }
        h1{
            padding: 3% 10%;
        }
        div{
            margin: 5% 10%;
            color: gray;
        }

    </style>
</head>
<body>
    <form action="chuc-nang-dang-nhap.php" method="get">
        <h1>Login</h1>
        <div><input type="text" value="" name="name" placeholder="Usename"></div>
        <div><input type="text" value="" name="password" placeholder="Password"></div>
        <div><input type="submit" value="Sign in">
 
    </form>
</body>
</html>
