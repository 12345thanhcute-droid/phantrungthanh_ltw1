=== CÂU HỎI VÀ TRẢ LỜI BÀI THỰC HÀNH LAB 5 ===

1. Phân biệt MySQL và phpMyAdmin.
- MySQL: Là Hệ quản trị cơ sở dữ liệu quan hệ (RDBMS) chạy dưới dạng dịch vụ (background service), chịu trách nhiệm lưu trữ, truy vấn, xử lý và quản lý dữ liệu thực tế thông qua các câu lệnh SQL.
- phpMyAdmin: Là một công cụ web (GUI) được viết bằng ngôn ngữ PHP, cung cấp giao diện người dùng trực quan trên trình duyệt giúp quản trị viên thao tác với MySQL dễ dàng hơn (như tạo database, tạo bảng, nhập dữ liệu, export/import) mà không cần gõ lệnh dòng lệnh phức tạp.

2. Phân biệt các cách kết nối cơ sở dữ liệu trong PHP (MySQLi thủ tục, MySQLi hướng đối tượng, PDO). Lab này sử dụng cách nào?
- MySQLi Thủ tục (Procedural): Dùng các hàm thuần túy như mysqli_connect(), mysqli_query(), thích hợp cho phong cách lập trình cấu trúc đơn giản.
- MySQLi Hướng đối tượng (Object-Oriented): Sử dụng lớp $conn = new mysqli() và các phương thức như $conn->query(), $stmt->bind_param(). Giúp mã nguồn gọn gàng, dễ mở rộng.
- PDO (PHP Data Objects): Hỗ trợ kết nối tới nhiều Hệ CSDL khác nhau (MySQL, PostgreSQL, SQLite,...), tính bảo mật cao và hướng đối tượng hoàn toàn.
=> Bài thực hành Lab 5 này sử dụng cách: MySQLi (Object-Oriented) - MySQLi Hướng đối tượng.

3. Phân biệt Database, Table, Record và Field.
- Database (Cơ sở dữ liệu): Tập hợp toàn bộ dữ liệu có tổ chức của ứng dụng.
- Table (Bảng): Cấu trúc chứa dữ liệu được chia thành các hàng và cột nằm trong Database (ví dụ bảng `students`, `courses`).
- Field (Trường / Cột): Thuộc tính của dữ liệu định nghĩa kiểu dữ liệu cho từng cột (ví dụ `studentcode`, `fullname`, `phone`).
- Record (Bản ghi / Hàng): Một dòng dữ liệu cụ thể trong bảng chứa giá trị cho tất cả các Field đại diện cho 1 đối tượng thực tế (ví dụ thông tin 1 sinh viên).

4. AUTO_INCREMENT và PRIMARY KEY là gì? Có tác dụng gì?
- PRIMARY KEY (Khóa chính): Là thuộc tính xác định duy nhất cho mỗi bản ghi trong bảng, đảm bảo dữ liệu không bị trùng lặp và không thể để NULL.
- AUTO_INCREMENT (Tự động tăng): Là tính năng tự động phát sinh giá trị số nguyên tăng dần (1, 2, 3,...) cho cột khóa chính mỗi khi một bản ghi mới được chèn vào.
- Tác dụng: Giúp định danh duy nhất từng bản ghi, giúp truy vấn dữ liệu nhanh hơn và người dùng không cần tự nhập giá trị ID thủ công.

5. Phân biệt phương thức GET và POST.
- GET: Truyền dữ liệu thông qua tham số đính kèm trên thanh địa chỉ URL (Query String). Dữ liệu bị giới hạn dung lượng, hiển thị rõ ràng trên URL (không an toàn cho mật khẩu) và có thể lưu Bookmark.
- POST: Truyền dữ liệu ngầm trong phần body của HTTP Request. Không hiển thị dữ liệu lên URL, không giới hạn dung lượng gửi, thích hợp cho dữ liệu nhạy cảm (mật khẩu) hoặc thao tác thêm/sửa/xóa.

6. Tại sao cần Validate dữ liệu trước khi lưu vào cơ sở dữ liệu?
- Đảm bảo tính đúng đắn và toàn vẹn dữ liệu (VD: đúng định dạng số điện thoại, các trường bắt buộc không bị để trống).
- Tránh lỗi phát sinh từ CSDL khi thực thi câu lệnh SQL.
- Tăng cường bảo mật, phòng chống các đợt tấn công chèn mã độc (XSS, SQL Injection).

7. SQL Injection là gì? Vì sao nên sử dụng Prepared Statement?
- SQL Injection: Là kỹ thuật tấn công khi kẻ xấu chèn các đoạn mã SQL độc hại vào các ô nhập liệu của Form nhằm làm thay đổi hành vi của câu lệnh SQL gốc (VD: chiếm quyền đăng nhập, xóa bảng dữ liệu).
- Vì sao nên dùng Prepared Statement: Prepared Statement tách biệt rõ ràng giữa phần câu lệnh SQL cấu trúc và dữ liệu tham số gửi lên. CSDL sẽ biên dịch câu lệnh trước rồi mới truyền giá trị vào các dấu hỏi (?), triệt tiêu hoàn toàn khả năng thi hành các đoạn SQL độc hại do người dùng truyền vào.

8. Tại sao câu lệnh UPDATE hoặc DELETE cần có mệnh đề WHERE?
- Mệnh đề WHERE quy định điều kiện chính xác của bản ghi cần Cập nhật hoặc Xóa.
- Nếu không có mệnh đề WHERE, câu lệnh UPDATE hoặc DELETE sẽ áp dụng tác động lên TOÀN BỘ tất cả bản ghi có trong bảng, gây tổn thất hoặc mất mát dữ liệu nghiêm trọng.

9. Export, Import và Backup cơ sở dữ liệu dùng để làm gì?
- Export (Xuất CSDL): Trích xuất cấu trúc và dữ liệu của Database ra file (thường là file .sql) để sao lưu hoặc di chuyển.
- Import (Nhập CSDL): Nạp dữ liệu từ file sao lưu (.sql) vào một Database mới hoặc tái thiết lập CSDL.
- Backup (Sao lưu): Giúp khôi phục lại dữ liệu hệ thống trong trường hợp xảy ra sự cố phần cứng, mất dữ liệu, hoặc khi chuyển ứng dụng sang môi trường/máy chủ khác.
