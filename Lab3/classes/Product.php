<?php
class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;

    public function __construct($id, $name, $price, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotal()
    {
        return $this->price * $this->quantity;
    }

    public function showInfo()
    {
        echo "<tr>";
        echo "<td>" . $this->id . "</td>";
        echo "<td>" . $this->name . "</td>";
        echo "<td>" . number_format($this->price, 0, ',', '.') . " VNĐ</td>";
        echo "<td>" . $this->quantity . "</td>";
        echo "<td>" . number_format($this->getTotal(), 0, ',', '.') . " VNĐ</td>";
        echo "</tr>";
    }
}
?>
