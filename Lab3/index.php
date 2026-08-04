<?php
require "includes/header.php";
require "functions/common.php";

$laptop1 = array("id" => "LT001", "proname" => "Dell Inspiron", "quantity" => 10, "price" => 15000000);
$laptop2 = array("id" => "LT002", "proname" => "HP Pavilion", "quantity" => 5, "price" => 16000000);
$laptop3 = array("id" => "LT003", "proname" => "Asus Vivobook", "quantity" => 8, "price" => 14000000);
$laptop4 = array("id" => "LT004", "proname" => "Acer Nitro", "quantity" => 4, "price" => 18000000);
$laptop5 = array("id" => "LT005", "proname" => "Macbook Air", "quantity" => 2, "price" => 20000000);
$laptop6 = array("id" => "LT006", "proname" => "Lenovo IdeaPad", "quantity" => 7, "price" => 13000000);
$laptop7 = array("id" => "LT007", "proname" => "Dell Vostro", "quantity" => 9, "price" => 14500000);
$laptop8 = array("id" => "LT008", "proname" => "HP Envy", "quantity" => 3, "price" => 19000000);
$laptop9 = array("id" => "LT009", "proname" => "Asus Zenbook", "quantity" => 6, "price" => 21000000);
$laptop10 = array("id" => "LT010", "proname" => "MSI Bravo", "quantity" => 5, "price" => 17000000);

$laptops = array($laptop1, $laptop2, $laptop3, $laptop4, $laptop5, $laptop6, $laptop7, $laptop8, $laptop9, $laptop10);

$phukien1 = array("id" => "PK001", "proname" => "Chuột không dây", "quantity" => 20, "price" => 200000);
$phukien2 = array("id" => "PK002", "proname" => "Bàn phím cơ", "quantity" => 15, "price" => 500000);
$phukien3 = array("id" => "PK003", "proname" => "Tai nghe bluetooth", "quantity" => 10, "price" => 800000);
$phukien4 = array("id" => "PK004", "proname" => "Lót chuột", "quantity" => 50, "price" => 50000);
$phukien5 = array("id" => "PK005", "proname" => "USB 32GB", "quantity" => 30, "price" => 150000);
$phukien6 = array("id" => "PK006", "proname" => "Ổ cứng di động", "quantity" => 5, "price" => 1000000);
$phukien7 = array("id" => "PK007", "proname" => "Webcam", "quantity" => 12, "price" => 400000);
$phukien8 = array("id" => "PK008", "proname" => "Microphone", "quantity" => 8, "price" => 350000);
$phukien9 = array("id" => "PK009", "proname" => "Giá đỡ laptop", "quantity" => 25, "price" => 120000);
$phukien10 = array("id" => "PK010", "proname" => "Balo chống sốc", "quantity" => 18, "price" => 300000);

$phukiens = array($phukien1, $phukien2, $phukien3, $phukien4, $phukien5, $phukien6, $phukien7, $phukien8, $phukien9, $phukien10);
?>

<main class="container my-5">
    <section class="mb-5">
        <?php showProductTable($laptops, "Danh sách Laptop"); ?>
    </section>

    <section class="mb-5">
        <?php showProductTable($phukiens, "Danh sách Phụ kiện"); ?>
    </section>
</main>

<?php
require "includes/footer.php";
?>
