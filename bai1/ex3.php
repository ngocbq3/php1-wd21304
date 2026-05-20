<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mssv = $_POST['mssv'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];

    echo "MSSV: $mssv <br>";
    echo "Họ tên: $hoten <br>";
    echo "Email: $email <br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
</head>

<body>
    <h2>Thông tin sinh viên</h2>
    <form action="" method="post">
        <div>
            <label for="">Mssv</label>
            <input type="text" name="mssv" id="">
        </div>
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <button type="submit">Gửi</button>
        </div>
    </form>
</body>

</html>