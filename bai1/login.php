<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '123abc') {
        //Tạo session
        $_SESSION['user'] = 'admin';
        //Chuyển sang trang welcome
        header("location: welcome.php");
        die;
    }
    echo "Tài khoản hoặc mật khẩu không chính xác";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <form action="" method="post">
        <h3>Đăng nhập</h3>
        <div>
            <label for="">Tên đăng nhập</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">Mật khẩu</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</body>

</html>