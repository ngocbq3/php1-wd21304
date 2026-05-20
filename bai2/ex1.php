<?php
//Khai báo lớp
class Animal
{
    //Khai báo thuộc tính
    public $name;
    public $age;
    public $color;

    //Khai báo phương thức (hành động) 
    public function run()
    {
        echo "{$this->name} đang đi <br>";
    }
    public function eat()
    {
        echo "{$this->name} đang ăn <br>";
    }
    public function display()
    {
        echo "Tên: {$this->name} <br>";
        echo "Tuổi: {$this->age} <br>";
        echo "Màu: {$this->color} <br>";
    }
    //Phương thức nhập
    public function nhap($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
}
//Tạo đối tượng từ lớp Animal
$dog = new Animal;
$dog->nhap("Cậu Vàng", 10, "Vàng");
//Truy cập phương thức
$dog->display();
$dog->run();
$dog->eat();
