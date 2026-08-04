**1. Khi nào nên sử dụng Function, khi nào nên sử dụng Class và Object?**

* **Function:** Dùng để thực hiện một công việc cụ thể như tính tổng, kiểm tra dữ liệu, định dạng chuỗi hoặc xử lý một tác vụ đơn giản.
* **Class và Object:** Dùng khi chương trình cần quản lý nhiều dữ liệu và các chức năng liên quan với nhau. Ví dụ: đối tượng Sinh viên gồm mã sinh viên, họ tên, điểm và các phương thức tính điểm trung bình, xếp loại.

**2. Ý nghĩa của từ khóa `$this` trong lớp**

* `$this` là từ khóa đại diện cho đối tượng hiện tại.
* Dùng để truy cập các thuộc tính và phương thức bên trong cùng một lớp.

Ví dụ:

```php
$this->fullName;
$this->getAverage();
```

**3. Ý nghĩa của toán tử mũi tên (`->`)**

* Toán tử `->` được dùng để truy cập thuộc tính hoặc gọi phương thức của một đối tượng.

Ví dụ:

```php
$student->fullName;
$student->showInfo();
```

**4. Lợi ích của việc tái sử dụng phương thức (Method Reuse)**

* Giúp giảm việc lặp lại mã nguồn.
* Dễ sửa đổi và bảo trì chương trình.
* Tiết kiệm thời gian khi lập trình.
* Làm cho chương trình rõ ràng, dễ đọc và dễ mở rộng.
* Khi cần thay đổi cách xử lý, chỉ cần sửa trong một phương thức, các vị trí gọi phương thức sẽ tự động sử dụng kết quả mới.
