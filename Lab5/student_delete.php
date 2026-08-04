<?php
require_once "dao/StudentDAO.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $studentDAO = new StudentDAO();
    
    $student = $studentDAO->getById($id);
    if ($student) {
        if ($studentDAO->delete($id)) {
            header("Location: student_index.php?msg=deleted");
            exit;
        }
    }
}

header("Location: student_index.php?msg=error");
exit;
