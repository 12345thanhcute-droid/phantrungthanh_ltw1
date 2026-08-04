<?php

echo "<h2>Lab 1 - Cau 2</h2>";

$a = 15;
$b = 4;

echo ($a + $b) . "<br>";
echo ($a - $b) . "<br>";
echo ($a * $b) . "<br>";
echo ($a / $b) . "<br>";
echo ($a % $b) . "<br>";

echo "<hr>";

$soNguyen = 5;
$chuoiSo = "5";

var_dump($soNguyen == $chuoiSo);
echo "<br>";

var_dump($soNguyen === $chuoiSo);
echo "<br>";

var_dump($soNguyen != $chuoiSo);
echo "<br>";

var_dump($soNguyen <> $chuoiSo);
echo "<br>";

var_dump($soNguyen !== $chuoiSo);

echo "<hr>";

$x = 10;

echo ++$x;
echo "<br>";

$x = 10;

echo $x++;
echo "<br>";
echo $x;

echo "<hr>";

$str1 = "Lap trinh ";
$str2 = "PHP";

echo $str1 . $str2;

echo "<br>";

$str1 .= $str2;

echo $str1;

echo "<hr>";

$chuoi1 = "Hello PHP";
$chuoi2 = "Xin chao PHP";

echo strlen($chuoi1);
echo "<br>";
echo mb_strlen($chuoi2);

echo "<hr>";

$text = "Hoc PHP";

echo strtoupper($text);
echo "<br>";
echo strtolower($text);

echo "<hr>";

$a = "123 abc";
$b = "abc 123";

var_dump((int)$a);

echo "<br>";

var_dump((int)$b);

echo "<hr>";

$i = 10;
$f = 10.5;
$s = "PHP";
$bool = true;

var_dump($i);
echo "<br>";

var_dump($f);
echo "<br>";

var_dump($s);
echo "<br>";

var_dump($bool);

?>