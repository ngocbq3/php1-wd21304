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

    /**
     * Phương thức getProducts lấy dữ liệu sản phẩm có cả danh mục
     */
    public function getProducts()
    {
        $sql = "SELECT p.*, c.name cate_name FROM products p JOIN categories c ON p.category_id=c.id ORDER BY p.id DESC";

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
        //Câu lênh SQL có chưa tham số :category_id
        $sql = "SELECT * FROM products WHERE category_id=:category_id ORDER BY id DESC";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);

        //Truyền giá trị cho tham số
        $params = ['category_id' => $category_id];
        //Thực thi
        $stmt->execute($params);
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    //Lấy chi tiết 1 sản phẩm theo id
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";

        //Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);

        //Thực thi
        $params = ['id' => $id];
        $stmt->execute($params);
        //Lấy dữ liệu
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    /**
     * @method create: thêm dữ liệu vào bảng products
     * @param: $name, $image, $price, $quantity, $description, $category_id
     */
    public function create($name, $image, $price, $quantity, $description, $category_id)
    {
        $sql = "INSERT INTO products(name, image, price, quantity, description, category_id) VALUES(:name, :image, :price, :quantity, :description, :category_id)";

        //CHuẩn bị
        $stmt = $this->conn->prepare($sql);

        //Truyền dữ liệu cho các placeholder
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':image', $image);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':quantity', $quantity);
        $stmt->bindValue(':description', $description);
        $stmt->bindValue(':category_id', $category_id);

        //Thực thi
        $stmt->execute();
    }

    /**
     * @method update: cập nhật dữ liệu
     * @param: $id, $name, $image, $price, $quantity, $description, $category_id
     */
    public function update($id, $name, $image, $price, $quantity, $description, $category_id)
    {
        $sql = "UPDATE products SET name=:name, image=:image, price=:price, quantity=:quantity, description=:description, category_id=:category_id WHERE id=:id";

        //CHuẩn bị
        $stmt = $this->conn->prepare($sql);

        //Truyền dữ liệu cho các placeholder
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':image', $image);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':quantity', $quantity);
        $stmt->bindValue(':description', $description);
        $stmt->bindValue(':category_id', $category_id);
        $stmt->bindValue(':id', $id);

        //Thực thi
        $stmt->execute();
    }

    /**
     * @method delete: xóa dữ liệu
     * @param: $id
     */
    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
