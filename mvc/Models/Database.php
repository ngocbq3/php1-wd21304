<?php

class Database
{
    //Phương thức kết nối đến database
    public function connect()
    {
        //Thông tin về Database
        $host = "127.0.0.1"; //thông tin server chứa database
        $db_name = "wd21304_php1"; //Tên Database
        $username = "root"; //tên tài khoản sử dụng database
        $password = "";
        $port = "3306"; //Cổng của database

        //Kết nối đến Database
        try {
            $conn = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8; port=$port", $username, $password);
            // echo "Kết nối dữ liệu thành công"; //Câu lệnh test, nếu OK thì xóa đi
            return $conn;
        } catch (PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }
}
