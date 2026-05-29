<?php

/**
 * lớp Product dùng để thao tác dữ liệu với bảng products
 */
class Product
{
    public $conn; //đối tượng kết nối csdl

    public function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    //Phương thức all dùng để lấy ra toàn bộ dữ liệu của bảng products
    public function all()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    //Lấy dữ liệu sản phẩm theo danh mục
    public function productInCategory($category_id)
    {
        $sql = "SELECT * FROM products WHERE category_id=$category_id ORDER BY id DESC";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    //Lấy chi tiết 1 sản phẩm theo id
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }
}
