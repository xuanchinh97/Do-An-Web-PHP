# Website bán điện thoại 

không sử dụng thư viện, đơn giản dễ sử dụng

### tải xuống

```bash
	git clone https://github.com/xuanchinh97/mobile-shop.git
```

### sử dụng

- cần có web server: XAMPP

- import file mobileshop.sql vào trong mysql ( tạo 1 database mới tên là: mobileshop, xong import file vào)

- Config file  ketnoi.php trong thư mục cauhinh\ketnoi.php

```bash
	$dbhost='localhost'; // để mặc định
	$dbuser='root';	     // tên user trong mysql, mặc định thường là root
	$dbpass='';	     // mật khẩu của user bên trên nếu có thì thêm vào không sẽ báo lỗi
	$dbname='mobileshop'; // tên database vửa tạo bên trên
```

- Config file  ketnoi.php trong thư mục quantri\ketnoi.php

cấu hình tương tự bên trên	

### truy cập trang quản trị

- gmail: admin@gmail.com
- pass: admin

** Lưu ý : mọi người chú ý cổng mà mình đang chạy trên localhost nhé
- mặc định là cổng 8080 thì sẽ như vầy: http://localhost/
- của mình để cổng 97 thì sẽ như vầy: http://localhost:97/
