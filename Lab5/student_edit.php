<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

if (!$student) {
    header("Location: student_index.php?msg=error");
    exit;
}

$errors = [];
$studentCode = $student->studentCode;
$fullName = $student->fullName;
$phone = $student->phone;
$gender = $student->gender;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentCode = trim($_POST["studentCode"] ?? "");
    $fullName = trim($_POST["fullName"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $gender = $_POST["gender"] ?? "";

    // Validate
    if (empty($studentCode)) {
        $errors[] = "Mã sinh viên không được để trống.";
    }
    if (empty($fullName)) {
        $errors[] = "Họ và tên không được để trống.";
    }
    if (!empty($phone) && !preg_match("/^[0-9]{10,11}$/", $phone)) {
        $errors[] = "Số điện thoại phải đúng định dạng (10-11 chữ số).";
    }
    if (empty($gender)) {
        $errors[] = "Giới tính phải được chọn.";
    }

    if (empty($errors)) {
        $updatedStudent = new Student($studentCode, $fullName, $phone, $gender);
        $updatedStudent->id = $id;

        if ($studentDAO->update($updatedStudent)) {
            header("Location: student_index.php?msg=updated");
            exit;
        } else {
            $errors[] = "Cập nhật sinh viên thất bại!";
        }
    }
}

require_once "includes/header.php";
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Cập nhật thông tin sinh viên</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $err): ?>
                            <li><?= htmlspecialchars($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" class="bg-white p-4 border rounded">
                <div class="mb-3">
                    <label class="form-label">Mã sinh viên</label>
                    <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($studentCode) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" name="fullName" class="form-control" value="<?= htmlspecialchars($fullName) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($phone ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giới tính</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Nam" <?= ($gender == 'Nam') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Nữ" <?= ($gender == 'Nữ') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Nữ
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning text-white">
                    Cập nhật
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
