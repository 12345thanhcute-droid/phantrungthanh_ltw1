<?php

$menus = array(
    "Trang chủ",
    "Sản phẩm",
    "Khuyến mãi",
    "Giới thiệu",
    "Liên hệ"
);

$productCategories = array(
    "Điện thoại",
    "Laptop",
    "Máy tính bảng",
    "Phụ kiện"
);

$products = array(

    array(
        "name" => "Điện thoại iPhone 17 Pro Max (Màu Trắng)",
        "image" => "images/iphone_17_white.png",
        "price" => 39990000
    ),

    array(
        "name" => "Samsung Galaxy S24 Ultra",
        "image" => "images/iphone_17_white.png",
        "price" => 33990000
    ),

    array(
        "name" => "Oppo Find X7 Ultra",
        "image" => "images/iphone_17_white.png",
        "price" => 24990000
    ),

    array(
        "name" => "Xiaomi 14 Pro",
        "image" => "images/iphone_17_white.png",
        "price" => 22990000
    )

);

$brands = array(
    "Apple",
    "Samsung",
    "Oppo",
    "Xiaomi"
);

?>

<!DOCTYPE html>
<html lang="vi">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Lab 2 - Câu C</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.banner{
    background:#0d6efd;
    color:white;
    padding:70px;
    text-align:center;
}

.product-card img{
    height:200px;
    object-fit:cover;
}

.brand-box{
    border:1px solid #ccc;
    padding:20px;
    text-align:center;
    margin-bottom:15px;
    background:#f8f9fa;
}

footer{
    background:#343a40;
    color:white;
    padding:30px;
    margin-top:40px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">Cửa Hàng ABC</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<?php

foreach($menus as $menu)
{

?>

<li class="nav-item">

<a class="nav-link" href="#">
<?php echo $menu; ?>
</a>

</li>

<?php

}

?>

</ul>

</div>

</div>

</nav>

<div class="banner">

<h1>Chào mừng đến với cửa hàng ABC</h1>

<p>Nơi cung cấp các sản phẩm công nghệ chất lượng.</p>

</div>

<div class="container mt-5">

<h2 class="text-center text-primary mb-4">

Sản phẩm nổi bật

</h2>

<div class="row">

<?php

foreach($products as $product)
{

?>

<div class="col-md-3 mb-4">

<div class="card product-card">

<img
src="<?php echo $product["image"]; ?>"
class="card-img-top"
alt="<?php echo $product["name"]; ?>">

<div class="card-body text-center">

<h5>

<?php echo $product["name"]; ?>

</h5>

<p class="text-danger fw-bold">

<?php

echo number_format($product["price"],0,",",".");

?>

 VNĐ

</p>

<a href="#" class="btn btn-outline-primary btn-sm">

Xem chi tiết

</a>

<a href="#" class="btn btn-primary btn-sm">

Mua ngay

</a>

</div>

</div>

</div>

<?php

}

?>

</div>

</div>

<div class="container mt-5">

<h2 class="text-center text-primary mb-4">

Thương hiệu nổi bật

</h2>

<div class="row">

<?php

foreach($brands as $brand)
{

?>

<div class="col-md-3 col-6">

<div class="brand-box">

<?php echo $brand; ?>

</div>

</div>

<?php

}

?>

</div>

</div>

<div class="container mt-5 mb-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header bg-primary text-white">

<h4 class="text-center">

Đăng ký nhận báo giá

</h4>

</div>

<div class="card-body">

<form action="#" method="post">

<div class="mb-3">

<label>Họ và tên</label>

<input
type="text"
name="name"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="mb-3">

<label>Số điện thoại</label>

<input
type="text"
name="phone"
class="form-control">

</div>

<div class="mb-3">

<label>Địa chỉ</label>

<input
type="text"
name="address"
class="form-control">

</div>

<div class="mb-3">

<label>Danh mục sản phẩm</label>

<select
name="category"
class="form-select">

<?php

foreach($productCategories as $category)
{

?>

<option>

<?php echo $category; ?>

</option>

<?php

}

?>

</select>

</div>

<div class="mb-3">

<label>Hình thức nhận báo giá</label>

<br>

<input
type="radio"
name="contact"
value="Email">

Email

<br>

<input
type="radio"
name="contact"
value="Điện thoại">

Điện thoại

</div>

<div class="mb-3">

<label>Thời gian liên hệ</label>

<select
name="time"
class="form-select">

<option>Buổi sáng</option>

<option>Buổi chiều</option>

</select>

</div>

<div class="mb-3">

<label>Nội dung</label>

<textarea
name="content"
rows="3"
class="form-control"></textarea>

</div>

<button
type="submit"
class="btn btn-primary">

Gửi yêu cầu

</button>

<button
type="reset"
class="btn btn-secondary">

Làm mới

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<footer class="text-center">

<p>

© 2026 Cửa Hàng ABC

</p>

<p>

Hotline: 1900 1234

</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>