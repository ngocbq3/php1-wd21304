<?php

class HomeController
{
    public function index()
    {
        //tạo đối tượng sản phẩm
        $modelProduct = new Product;

        $products = $modelProduct->all();

        include __DIR__ . "/../Views/front-end/home.php";
    }
}
