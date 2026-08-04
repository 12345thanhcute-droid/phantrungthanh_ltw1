<?php
require_once "dao/StudentDAO.php";

$studentDAO = new StudentDAO();
$students = $studentDAO->getAll();

$message = "";
if (isset($_GET["msg"])) {
    if ($_GET["msg"] == "added") {
        $message = "Thêm sinh viên thành công!";
    } elseif ($_GET["msg"] == "updated") {
        $message = "Cập nhật thông tin sinh viên thành công!";
    } elseif ($_GET["msg"] == "deleted") {
        $message = "Xóa sinh viên thành công!";
    } elseif ($_GET["msg"] == "error") {
        $message = "Đã xảy ra lỗi khi thực hiện thao tác!";
    }
}

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="mb-5">
        <?php if (!empty($message)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $message ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="d-flex justify-content-between mb-3 align-items-center">
            <h4>Danh sách sinh viên</h4>
            <a href="student_add.php" class="btn btn-primary">
                Thêm sinh viên
            </a>
        </div>
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ và tên</th>
                    <th>Điện thoại</th>
                    <th>Giới tính</th>
                    <th width="200">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($students)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Chưa có dữ liệu sinh viên.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($students as $key => $student): ?>
                        <tr>
                            <td><?= ($key + 1); ?></td>
                            <td><?= htmlspecialchars($student->studentCode); ?></td>
                            <td><?= htmlspecialchars($student->fullName); ?></td>
                            <td><?= htmlspecialchars($student->phone ?? ''); ?></td>
                            <td><?= htmlspecialchars($student->gender); ?></td>
                            <td>
                                <a href="student_detail.php?id=<?= $student->id; ?>" class="btn btn-info btn-sm text-white">
                                    Chi tiết
                                </a>
                                <a href="student_edit.php?id=<?= $student->id; ?>" class="btn btn-warning btn-sm text-white">
                                    Sửa
                                </a>
                                <a href="student_delete.php?id=<?= $student->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>
<?php
require_once "includes/footer.php";
?>
