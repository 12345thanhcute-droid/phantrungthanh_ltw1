<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentCode = trim($_POST["studentCode"] ?? "");
    $fullName = trim($_POST["fullName"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $gender = $_POST["gender"] ?? "Nam";

    if (empty($studentCode) || empty($fullName)) {
        $message = "Vui lòng nhập đầy đủ Mã sinh viên và Họ tên!";
    } else {
        $student = new Student(
            $studentCode,
            $fullName,
            $phone,
            $gender
        );

        if ($studentDAO->insert($student)) {
            // điều hướng
            header("Location: student_index.php?msg=added");
            exit;
        } else {
            $message = "Thêm sinh viên thất bại!";
        }
    }
}

require_once "includes/header.php";
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Thêm sinh viên</h2>
            
            <?php if (isset($message)) { ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php } ?>

            <form method="post" class="bg-white p-4 border rounded">
                <div class="mb-3">
                    <label class="form-label">Mã sinh viên</label>
                    <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($_POST['studentCode'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" name="fullName" class="form-control" value="<?= htmlspecialchars($_POST['fullName'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giới tính</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Nam" <?= (!isset($_POST['gender']) || $_POST['gender'] == 'Nam') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Nữ" <?= (isset($_POST['gender']) && $_POST['gender'] == 'Nữ') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Nữ
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    Lưu
                </button>
                <a href="student_index.php" class="btn btn-secondary">
                    Quay lại
                </a>
            </form>
        </div>
    </div>
</div>
<?php
require_once "includes/footer.php";
?>
