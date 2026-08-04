<?php
require "includes/header.php";
require "classes/Product.php";

$product1 = new Product("SP001", "Laptop Dell", 15000000, 5);
$product2 = new Product("SP002", "Laptop HP", 12000000, 3);
$product3 = new Product("SP003", "Chuột không dây", 350000, 10);

$products = array($product1, $product2, $product3);

function getGrandTotal($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total = $total + $product->getTotal();
    }

    return $total;
}
?>

<main class="container my-5">
    <h2 class="mb-4">Bài thực hành: Class và Object</h2>
    <p class="text-muted">Đây là ví dụ đơn giản để bạn luyện cách tạo class, object và dùng hàm.</p>

    <div class="alert alert-info">
        <strong>Tổng tiền tất cả sản phẩm:</strong>
        <?php echo number_format(getGrandTotal($products), 0, ',', '.'); ?> VNĐ
    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                $product->showInfo();
            }
            ?>
        </tbody>
    </table>
</main>

<?php require "includes/footer.php"; ?>
