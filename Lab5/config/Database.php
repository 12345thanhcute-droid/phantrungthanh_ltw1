<?php
class Database
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "";
    
    // ĐIỀN TÊN DATABASE CHÍNH XÁC CỦA BẠN TRÊN PHPMYADMIN VÀO ĐÂY
    private string $database = "phantrungthanh_mydb1"; 

    public function getConnection()
    {
        // Thử kết nối với database đã chỉ định
        $conn = @new mysqli($this->host, $this->username, $this->password, $this->database);

        // Nếu database chưa tồn tại, tiến hành tạo mới
        if ($conn->connect_errno) {
            $tmpConn = new mysqli($this->host, $this->username, $this->password);
            if (!$tmpConn->connect_errno) {
                $tmpConn->query("CREATE DATABASE IF NOT EXISTS `{$this->database}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
                $tmpConn->close();
            }
            // Kết nối lại sau khi tạo
            $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        }

        // Nếu vẫn lỗi thì dừng chương trình
        if ($conn->connect_errno) {
            die("Kết nối CSDL thất bại: " . $conn->connect_error);
        }

        // Đảm bảo không bị lỗi font tiếng Việt
        $conn->set_charset("utf8mb4");

        // Tạo bảng students nếu chưa có
        $conn->query("CREATE TABLE IF NOT EXISTS `students` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `studentcode` VARCHAR(20) NOT NULL UNIQUE,
            `fullname` VARCHAR(100) NOT NULL,
            `phone` VARCHAR(20) DEFAULT NULL,
            `gender` VARCHAR(10) NOT NULL,
            `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

        // Tạo bảng courses nếu chưa có
        $conn->query("CREATE TABLE IF NOT EXISTS `courses` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `course_code` VARCHAR(20) NOT NULL,
            `course_name` VARCHAR(100) NOT NULL,
            `credits` INT NOT NULL,
            `tuition_fee` DECIMAL(10,0),
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

        return $conn;
    }
}
?>