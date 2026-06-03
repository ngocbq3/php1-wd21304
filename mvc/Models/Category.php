<?php

class Category {
    public $conn; //đối tượng kết nối csdl

    public function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    public function all() {
        $sql = "SELECT * FROM categories";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }
}