<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh viên - Lab 5</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- CSS của bạn -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="student_index.php">
            Quản lý Sinh viên
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link active"
                       href="student_index.php">
                        Danh sách sinh viên
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="student_add.php">
                        Thêm sinh viên
                    </a>
                </li>

            </ul>

            <form class="d-flex">

                <input class="form-control me-2"
                       type="search"
                       placeholder="Nhập ...">

                <button class="btn btn-outline-light">
                    Tìm
                </button>

            </form>

        </div>

    </div>
</nav>