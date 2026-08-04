<?php
echo "<h2>Bài tập Lab 1 - Câu 1</h2>";

echo "<h3>1. In thông tin bằng echo</h3>";
echo "Họ tên: Phan Trung Thanh <br>";
echo "Ngày sinh: 11/11/2005 <br>";
echo "Mã số sinh viên: 2123110407 <br>";

echo "<h3>2. Khai báo và sử dụng biến</h3>";

$hoTen = "Phan Trung Thanh";
$mssv = "2123110407";
$soDienThoai = "0963453812";
$ngaySinh = "11/11/2005";

echo $hoTen . "<br>";
echo $mssv . "<br>";
echo $soDienThoai . "<br>";
echo $ngaySinh . "<br>";

echo "<h3>3. Khai báo hằng số</h3>";

define("HOST","localhost");
define("DATABASE","quanly_sinhvien");
define("USERNAME","root");
define("PASSWORD","");

echo HOST . "<br>";
echo DATABASE . "<br>";
echo USERNAME . "<br>";
echo PASSWORD . "<br>";

echo "<h3>4. Nháy đơn và nháy kép</h3>";

echo "Tên tôi là $hoTen <br>";
echo 'Tên tôi là $hoTen';

?>