<?php
function formatPrice($price, $currency = "đ") {
    $formatted = number_format($price, 0, ",", ".");
    return $formatted . " " . $currency;
}

function getTotalQuantity($products) {
    $total = 0;
    foreach ($products as $p) {
        $total = $total + $p['quantity'];
    }
    return $total;
}

function getTotalPrice($products) {
    $total = 0;
    foreach ($products as $p) {
        $price = $p['price'];
        $qty = $p['quantity'];
        $total = $total + ($price * $qty);
    }
    return $total;
}

function showProductTable($products, $tableTitle) {
    echo "<h3>" . $tableTitle . "</h3>";
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<th>STT</th>";
    echo "<th>Mã SP</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Số lượng</th>";
    echo "<th>Giá nhập</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $stt = 1;
    foreach ($products as $p) {
        echo "<tr>";
        echo "<td>" . $stt . "</td>";
        echo "<td>" . $p['id'] . "</td>";
        echo "<td>" . $p['proname'] . "</td>";
        echo "<td>" . $p['quantity'] . "</td>";
        echo "<td>" . formatPrice($p['price']) . "</td>";
        echo "</tr>";
        $stt = $stt + 1;
    }

    echo "</tbody>";
    echo "</table>";
}
?>
