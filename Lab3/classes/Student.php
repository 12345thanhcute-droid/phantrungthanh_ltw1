<?php
class Student
{
    public $studentId;
    public $fullName;
    public $gender;
    public $birthYear;
    public $scoreHtml;
    public $scoreCss;
    public $scorePhp;

    public function __construct(
        $studentId,
        $fullName,
        $gender,
        $birthYear,
        $scoreHtml,
        $scoreCss,
        $scorePhp
    ) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    public function getTotalScore()
    {
        $sum = $this->scoreHtml + $this->scoreCss + $this->scorePhp;
        return $sum;
    }

    public function getAge()
    {
        $age = 2026 - $this->birthYear;
        return $age;
    }

    public function getAverage()
    {
        $total = $this->getTotalScore();
        $avg = $total / 3;
        return round($avg, 2);
    }

    public function getRank()
    {
        $avg = $this->getAverage();
        
        if ($avg >= 9.0) {
            $rank = "Xuất sắc";
        } elseif ($avg >= 8.0) {
            $rank = "Giỏi";
        } elseif ($avg >= 6.5) {
            $rank = "Khá";
        } elseif ($avg >= 5.0) {
            $rank = "Trung bình";
        } else {
            $rank = "Yếu";
        }

        return $rank;
    }

    public function getScholarship()
    {
        $rank = $this->getRank();
        if ($rank == "Xuất sắc") {
            $scholarship = "Có";
        } elseif ($rank == "Giỏi") {
            $scholarship = "Có";
        } else {
            $scholarship = "Không";
        }

        return $scholarship;
    }

    public function showInfo()
    {
        $rank = $this->getRank();
        
        if ($rank == "Xuất sắc") {
            $classColor = "table-success";
        } elseif ($rank == "Giỏi") {
            $classColor = "table-info";
        } elseif ($rank == "Khá") {
            $classColor = "table-primary";
        } elseif ($rank == "Trung bình") {
            $classColor = "table-warning";
        } else {
            $classColor = "table-danger";
        }

        echo "<tr class='" . $classColor . "'>";
        echo "<td>" . $this->studentId . "</td>";
        echo "<td>" . $this->fullName . "</td>";
        echo "<td>" . $this->gender . "</td>";
        echo "<td>" . $this->birthYear . "</td>";
        echo "<td>" . $this->getAge() . "</td>";
        echo "<td>" . $this->scoreHtml . "</td>";
        echo "<td>" . $this->scoreCss . "</td>";
        echo "<td>" . $this->scorePhp . "</td>";
        echo "<td>" . $this->getTotalScore() . "</td>";
        echo "<td>" . $this->getAverage() . "</td>";
        echo "<td>" . $this->getRank() . "</td>";
        echo "<td>" . $this->getScholarship() . "</td>";
        echo "</tr>";
    }
}
?>
