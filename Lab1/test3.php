<?php

echo "<h2>Bài tập Lab 1 - Câu 3</h2>";

echo "<h3>1. Sử dụng trim()</h3>";

$chuoiTrim = "   Khoảng trắng ở hai đầu   ";

echo "Chuỗi ban đầu: ";
var_dump($chuoiTrim);

echo "<br>";

echo "Sau khi dùng trim(): ";
var_dump(trim($chuoiTrim));


echo "<h3>2. Loại bỏ khoảng trắng trái phải</h3>";

$chuoi = "   Học lập trình Web   ";

echo "ltrim(): ";
var_dump(ltrim($chuoi));

echo "<br>";

echo "rtrim(): ";
var_dump(rtrim($chuoi));


echo "<h3>3. Cắt chuỗi substr()</h3>";

$text = "Day la mot chuoi van ban dai hon 30 ky tu de test.";

echo substr($text,0,10);

echo "<br>";

echo substr($text,5);


echo "<h3>4. Thay thế chuỗi</h3>";

$text = "Sinh vien thuong su dung ngon ngu Python de lam Web.";

echo str_replace("Python","PHP",$text);

?>