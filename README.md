# cse485-ms-01
## MiniShop - Phiếu 01: PHP Cơ bản & Catalog

## Giới thiệu
Bài tập PHP cơ bản về quản lý danh sách sản phẩm MiniShop.  
Áp dụng tách dữ liệu và giao diện, xử lý mảng nhiều chiều, hiển thị dữ liệu động bằng PHP.

## Cấu trúc

minishop-01/
├── data.php
├── index.php
└── README.md


## Chức năng
- Tách dữ liệu `categories`, `products` trong `data.php`.
- Hiển thị danh sách 8 sản phẩm bằng `foreach`.
- Map `category_id` thành tên danh mục.
- Tính thành tiền (`price * qty`) và tổng giá trị kho.
- Hiển thị số lượng sản phẩm.
- Sử dụng `htmlspecialchars()` khi xuất dữ liệu.
- Có comment `MS_EXPECT` phục vụ kiểm tra.

## Kết quả
- Số sản phẩm: **8**
- Tổng giá trị kho: **41380000**

## Chạy project
1. Đặt thư mục vào `C:\xampp\htdocs\`.
2. Bật Apache trên XAMPP.
3. Truy cập:


http://localhost/minishop-01/index.php
