<?php

$menus = array(
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
);

$subjects = array(
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
);

$students = array(
    array(
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ),
    array(
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ),
    array(
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ),
    array(
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    )
);

$faculties = array(
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
);

$classes = array(
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
);

$genders = array(
    "Nam",
    "Nữ",
    "Khác"
);

$hobbies = array(
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab 2 - Câu B</title>

<style>

body{
    font-family: Arial;
    margin:20px;
    background:#f5f5f5;
}

nav{
    background:#0d6efd;
    margin-bottom:20px;
}

nav ul{
    list-style:none;
    margin:0;
    padding:0;
    overflow:hidden;
}

nav li{
    float:left;
}

nav a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 25px;
}

nav a:hover{
    background:#084298;
}

.box{
    background:white;
    padding:20px;
    margin-bottom:25px;
    border:1px solid #ccc;
}

h2{
    text-align:center;
    color:#0d6efd;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #000;
}

th{
    background:#0d6efd;
    color:white;
}

th,td{
    padding:10px;
    text-align:center;
}

.form-group{
    margin-bottom:15px;
}

label{
    font-weight:bold;
}

input[type=text],
select{
    width:100%;
    padding:8px;
    margin-top:5px;
}

button{
    padding:10px 20px;
}

</style>

</head>

<body>

<!-- MENU -->

<nav>
<ul>

<?php

foreach($menus as $menu)
{

?>

<li>
<a href="#"><?php echo $menu; ?></a>
</li>

<?php

}

?>

</ul>
</nav>

<!-- DANH SÁCH MÔN -->

<div class="box">

<h2>Danh sách ngôn ngữ sử dụng trong môn học</h2>

<ul>

<?php

foreach($subjects as $subject)
{

echo "<li>".$subject."</li>";

}

?>

</ul>

</div>

<!-- DANH SÁCH SINH VIÊN -->

<div class="box">

<h2>Danh sách sinh viên</h2>

<table>

<tr>
<th>STT</th>
<th>Mã SV</th>
<th>Họ và tên</th>
<th>Giới tính</th>
<th>Lớp</th>
</tr>

<?php

$stt = 1;

foreach($students as $student)
{

?>

<tr>

<td><?php echo $stt; ?></td>

<td><?php echo $student["id"]; ?></td>

<td><?php echo $student["name"]; ?></td>

<td><?php echo $student["gender"]; ?></td>

<td><?php echo $student["class"]; ?></td>

</tr>

<?php

$stt++;

}

?>

</table>

</div>

<!-- FORM -->

<div class="box">

<h2>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h2>

<form action="#" method="post">

<div class="form-group">

<label>Họ và tên</label>

<input type="text" name="fullname">

</div>

<div class="form-group">

<label>Khoa</label>

<select name="faculty">

<?php

foreach($faculties as $faculty)
{

?>

<option><?php echo $faculty; ?></option>

<?php

}

?>

</select>

</div>

<div class="form-group">

<label>Lớp</label>

<select name="class">

<?php

foreach($classes as $key => $class)
{

?>

<option value="<?php echo $key; ?>">
<?php echo $class; ?>
</option>

<?php

}

?>

</select>

</div>

<div class="form-group">

<label>Giới tính</label>

<br>

<?php

foreach($genders as $gender)
{

?>

<input
type="radio"
name="gender"
value="<?php echo $gender; ?>">

<?php echo $gender; ?>

<br>

<?php

}

?>

</div>

<div class="form-group">

<label>Sở thích</label>

<br>

<?php

foreach($hobbies as $key => $hobby)
{

?>

<input
type="checkbox"
name="hobbies[]"
value="<?php echo $key; ?>">

<?php echo $hobby; ?>

<br>

<?php

}

?>

</div>

<button type="submit">Đăng ký</button>

<button type="reset">Làm mới</button>

</form>

</div>

</body>
</html>