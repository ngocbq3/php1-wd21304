<?php

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new Product;
    }

    //Hiển thị chi tiết sản phẩm
    public function show()
    {
        //Lấy id trên URL
        $id = $_GET['id'] ?? null;

        $product = $this->productModel->find($id);

        //Lấy mã danh mục category_id
        $category_id = $product['category_id'];
        //Lấy danh sách sản phẩm cùng loại
        $productInCategory = $this->productModel->productInCategory($category_id);

        include __DIR__ . "/../Views/front-end/detail.php";
    }
}
