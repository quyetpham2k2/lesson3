# lesson 3

- static là thuộc tính hoặc phương thức trực thuộc của lớp đối tượng, không phải là trực thuộc đối tượng cụ thể
- mặc định access modifier của thuộc tính lớp là public
- đặt thuộc tính là private và đặt getter hay setter cho nó thì được gọi là bao đóng trường dữ liệu(data field capsulation).
- khi đặt final cho 1 class hoặc phương thức thì chúng sẽ không thể bị kế thừa hoặc ghi đè.
- Kế thừa là cho phép một lớp con sử dụng lại các phương thức và thuộc tính của lớp cha, tạo ra mối quan hệ "is-a".
- Từ khóa 'parent': cho phép lớp con truy xuất các thành phần của lớp cha. 'parent::\_\_construct' dùng để gọi constructor của lớp cha trong constructor của lớp con.
- Trong khai báo class, muốn tác động đến thuộc tính static thì dùng cú pháp seft::$static_val, cú pháp '$this->' chỉ dùng khi trỏ đến các phần tử động (không phải static), nghĩa là this tham chiếu đến đối tượng hiện tại(instance).
- Có 4 cách chính để khai báo và khởi tạo một thuộc tính trong lớp PHP: khai báo trực tiếp, khởi tạo trong constructor, khởi tạo thông qua một phương thức khác, và khai báo với giá trị mặc định.
