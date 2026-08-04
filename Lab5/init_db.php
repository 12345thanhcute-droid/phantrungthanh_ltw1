<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Kết nối MySQL thất bại: " . $conn->connect_error);
}

$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS `phantrungthanh_mydb1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Tạo database `phantrungthanh_mydb1` thành công hoặc đã tồn tại.<br>";
} else {
    die("Lỗi tạo database: " . $conn->error);
}

$conn->select_db("phantrungthanh_mydb1");
$conn->set_charset("utf8mb4");

$sqlStudents = "CREATE TABLE IF NOT EXISTS `students` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `studentcode` VARCHAR(20) NOT NULL UNIQUE,
  `fullname` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) DEFAULT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

if ($conn->query($sqlStudents) === TRUE) {
    echo "Tạo bảng `students` thành công.<br>";
} else {
    echo "Lỗi tạo bảng `students`: " . $conn->error . "<br>";
}

$sqlInsertStudents = "INSERT IGNORE INTO `students` (`studentcode`, `fullname`, `phone`, `gender`) VALUES
('SV001', 'Trần Văn A', '0901234567', 'Nam'),
('SV002', 'Trần Thị B', '0901234567', 'Nữ'),
('SV003', 'Nguyễn Văn C', '0988777666', 'Nam'),
('SV004', 'Lê Thị D', '0912345678', 'Nữ'),
('SV005', 'Phạm Văn E', '0933221100', 'Nam');";

if ($conn->query($sqlInsertStudents) === TRUE) {
    echo "Thêm dữ liệu mẫu vào `students` thành công.<br>";
}

$sqlCourses = "CREATE TABLE IF NOT EXISTS `courses` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `course_code` VARCHAR(20) NOT NULL,
  `course_name` VARCHAR(100) NOT NULL,
  `credits` INT NOT NULL,
  `tuition_fee` DECIMAL(10,0),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

if ($conn->query($sqlCourses) === TRUE) {
    echo "Tạo bảng `courses` thành công.<br>";
}

$sqlInsertCourses = "INSERT IGNORE INTO `courses` (`id`, `course_code`, `course_name`, `credits`, `tuition_fee`) VALUES
(1, 'PHP101', 'PHP MySQL', 3, 2700000),
(2, 'DB301', 'Cơ sở dữ liệu', 3, 2200000),
(3, 'JAVA101', 'Lập trình Java', 4, 3000000),
(4, 'NET201', '.NET C#', 3, 2800000);";

if ($conn->query($sqlInsertCourses) === TRUE) {
    echo "Thêm dữ liệu mẫu vào `courses` thành công.<br>";
}

$conn->close();
echo "<strong>ĐÃ KHỞI TẠO XONG DATABASE VÀ ÁP DỤNG THÀNH CÔNG CHO LAB 5!</strong>";
