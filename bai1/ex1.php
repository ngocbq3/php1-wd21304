<?php
//Câu lệnh if
$point = 4;

if ($point >= 9) {
    echo "Xuất sắc";
} else if ($point >= 8) {
    echo "Giỏi";
} else if ($point >= 5) {
    echo "Trung bình";
} else {
    echo "yếu";
}

echo "<h2>switch case</h2>";
$point = 'B';
switch ($point) {
    case 'A':
        echo "Giỏi";
        break;
    case 'B':
        echo "Khá";
        break;
    case 'C':
        echo "Trung bình";
        break;
    default:
        echo "Yếu";
}
