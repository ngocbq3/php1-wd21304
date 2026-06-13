<?php

class AdminProductController
{
    public $productModel;
    public $categoryModel;

    public function __construct()
    {
        $this->productModel = new Product;
        $this->categoryModel = new Category;
    }

    //Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = $this->productModel->getProducts();
        include __DIR__ . '/../Views/back-end/products.php';
    }

    //Hiển thị giao diện thêm sản phẩm
    public function create()
    {
        $categories = $this->categoryModel->all();
        include __DIR__ . '/../Views/back-end/product-create.php';
    }

    //Lưu dữ liệu vào databse
    public function store()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];

        //Xử lý file ảnh
        $file = $_FILES['image'];

        //Viết đường dẫn để lưu file
        $image = "images/" . $file['name'];
        //Di chuyển file vào đường dẫn đã khai báo
        move_uploaded_file($file['tmp_name'], $image);

        $this->productModel->create($name, $image, $price, $quantity, $description, $category_id);

        //Điều hướng sang trang danh sách
        header("location: index.php?act=admin&ctl=products");
    }
}
