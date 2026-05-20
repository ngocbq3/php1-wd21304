<?php
//Vòng lặp for
for ($i = 0; $i < 5; $i++) {
    echo "Bước lặp thứ $i <br>";
}

//Vòng lặp foreach
$sinhvien = [
    ['mssv' => 'ph12345', 'name' => 'Trần Văn Ân', 'email' => 'antv@gmail.com'],
    ['mssv' => 'ph12346', 'name' => 'Lê Trung Quân', 'email' => 'quanlt@gmail.com'],
    ['mssv' => 'ph12347', 'name' => 'Nguyễn Nông Trại', 'email' => 'trainn@gmail.com'],
];
foreach ($sinhvien as $sv) {
    echo "MSSV: " . $sv['mssv'];
    echo "<br>Họ tên: " . $sv['name'];
    echo "<br>Email: " . $sv['email'];
    echo "<hr>";
}
