<?php
if (isset($_GET['submit'])) {
    $fullname = isset($_GET['fullname']) ? htmlspecialchars($_GET['fullname']) : '';
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : '';
    $course = isset($_GET['course']) ? htmlspecialchars($_GET['course']) : '';
    $hobbies = isset($_GET['hobbies']) ? $_GET['hobbies'] : [];

    if (!empty($hobbies)) {
        $hobbyText = implode(', ', $hobbies);
    } else {
        $hobbyText = 'Không có sở thích nào';
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET - Lab 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 20px;
        }
        .box {
            background: white;
            padding: 20px;
            max-width: 700px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 12px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], select, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 8px 15px;
            margin-right: 10px;
        }
        .result {
            background: #e9f7ef;
            padding: 15px;
            border-left: 5px solid #28a745;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Form lấy dữ liệu bằng phương thức GET</h2>

    <form method="get" action="">
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" name="fullname" placeholder="Nhập họ tên">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Nhập email">
        </div>

        <div class="form-group">
            <label>Giới tính</label>
            <input type="radio" name="gender" value="Nam"> Nam
            <input type="radio" name="gender" value="Nữ"> Nữ
            <input type="radio" name="gender" value="Khác"> Khác
        </div>

        <div class="form-group">
            <label>Khóa học</label>
            <select name="course">
                <option value="">-- Chọn khóa học --</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
            </select>
        </div>

        <div class="form-group">
            <label>Sở thích</label>
            <input type="checkbox" name="hobbies[]" value="Đọc sách"> Đọc sách
            <input type="checkbox" name="hobbies[]" value="Nghe nhạc"> Nghe nhạc
            <input type="checkbox" name="hobbies[]" value="Chơi game"> Chơi game
            <input type="checkbox" name="hobbies[]" value="Du lịch"> Du lịch
        </div>

        <div class="form-group">
            <label>Ghi chú</label>
            <textarea name="note" rows="4" placeholder="Nhập ghi chú"></textarea>
        </div>

        <button type="submit" name="submit" value="1">Gửi dữ liệu</button>
        <button type="reset">Làm mới</button>
    </form>
</div>

<?php if (isset($_GET['submit'])): ?>
<div class="box">
    <h3>Kết quả nhận được</h3>
    <div class="result">
        <p><strong>Họ và tên:</strong> <?php echo $fullname; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Giới tính:</strong> <?php echo $gender; ?></p>
        <p><strong>Khóa học:</strong> <?php echo $course; ?></p>
        <p><strong>Sở thích:</strong> <?php echo $hobbyText; ?></p>
        <p><strong>Ghi chú:</strong> <?php echo isset($_GET['note']) ? htmlspecialchars($_GET['note']) : ''; ?></p>
    </div>
</div>
<?php endif; ?>

</body>
</html>
