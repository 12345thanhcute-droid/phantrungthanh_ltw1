<?php
require "includes/header.php";
require "classes/Student.php";

$student1 = new Student("SV001", "Nguyễn Văn A", "Nam", 2005, 8.5, 9.0, 7.5);
$student2 = new Student("SV002", "Trần Thị B", "Nữ", 2004, 9.0, 8.0, 9.5);
$student3 = new Student("SV003", "Lê Văn C", "Nam", 2005, 7.5, 8.0, 8.5);
$student4 = new Student("SV004", "Phạm Thị D", "Nữ", 2006, 6.5, 7.5, 8.0);
$student5 = new Student("SV005", "Hoàng Văn E", "Nam", 2005, 8.0, 8.5, 9.0);

$students = array();
array_push($students, $student1);
array_push($students, $student2);
array_push($students, $student3);
array_push($students, $student4);
array_push($students, $student5);

for ($i = 6; $i <= 20; $i = $i + 1) {
    if ($i % 2 == 0) {
        $gender = "Nữ";
    } else {
        $gender = "Nam";
    }
    
    $score1 = rand(5, 10);
    $score2 = rand(5, 10);
    $score3 = rand(5, 10);

    $s = new Student("SV0" . $i, "Sinh viên " . $i, $gender, 2005, $score1, $score2, $score3);
    array_push($students, $s);
}

function countStudents($arr) {
    $count = 0;
    foreach ($arr as $x) {
        $count = $count + 1;
    }
    return $count;
}

function countMaleStudents($arr) {
    $count = 0;
    foreach ($arr as $x) {
        if ($x->gender == "Nam") {
            $count = $count + 1;
        }
    }
    return $count;
}

function countFemaleStudents($arr) {
    $count = 0;
    foreach ($arr as $x) {
        if ($x->gender == "Nữ") {
            $count = $count + 1;
        }
    }
    return $count;
}

function getAverageScore($arr) {
    $sum = 0;
    $count = countStudents($arr);
    foreach ($arr as $x) {
        $sum = $sum + $x->getAverage();
    }
    $avg = $sum / $count;
    return round($avg, 2);
}
?>

<main class="container my-5">
    <div class="alert alert-primary">
        <h4>Thống kê (Dashboard)</h4>
        <p>Tổng số sinh viên: <?php echo countStudents($students); ?></p>
        <p>Số sinh viên Nam: <?php echo countMaleStudents($students); ?></p>
        <p>Số sinh viên Nữ: <?php echo countFemaleStudents($students); ?></p>
        <p>Điểm trung bình của lớp: <?php echo getAverageScore($students); ?></p>
    </div>

    <h3>Danh sách sinh viên</h3>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Mã SV</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Năm sinh</th>
                <th>Tuổi</th>
                <th>HTML</th>
                <th>CSS</th>
                <th>PHP</th>
                <th>Tổng điểm</th>
                <th>Điểm TB</th>
                <th>Xếp loại</th>
                <th>Học bổng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) {
                $student->showInfo();
            }
            ?>
        </tbody>
    </table>
</main>

<?php require "includes/footer.php"; ?>
