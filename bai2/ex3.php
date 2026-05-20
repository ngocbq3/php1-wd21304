<?php

class Car
{
    public $name;
    public $brand;
    public $color;

    //hàm khởi Tạo
    public function __construct($name, $brand, $color)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->color = $color;
    }

    public function start()
    {
        echo "{$this->name} Bắt đầu khởi động <br>";
    }
    public function stop()
    {
        echo "{$this->name} Bắt đầu tắt máy <br>";
    }

    //Hàm hủy
    public function __destruct()
    {
        echo "Hàm hủy được gọi <br>";
    }
}

$vf5 = new Car("VF5", "Vinfat", "Xanh");
$vf5->start();
$vf5->stop();

$vf8 = new Car('VF8', "Vinfat", "Đen");
$vf8->start();
$vf8->stop();
