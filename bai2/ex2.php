<?php
class SinhVien
{
    public $hoTen;
    public $diem;

    public function nhap($hoTen, $diem)
    {
        $this->hoTen = $hoTen;
        $this->diem = $diem;
    }

    public function xuat()
    {
        echo "Họ tên: {$this->hoTen} <br>";
        echo "Điểm: {$this->diem} <br>";
    }

    public function xepLoai()
    {
        if ($this->diem >= 9) {
            echo "Xuất sắc";
        } else if ($this->diem >= 8) {
            echo "Giỏi";
        } else if ($this->diem >= 7) {
            echo "Khá";
        } else if ($this->diem >= 5) {
            echo "Trung bình";
        } else {
            echo "yếu";
        }
    }
}

$sv1 = new SinhVien;
$sv1->nhap('Nguyễn Văn Long', 9);
$sv1->xuat();
$sv1->xepLoai();
