## 1. Giới thiệu ngôn ngữ lập trình PHP

- PHP - 'Hypertext Preprocessor' Là một ngôn ngữ lập trình kịch bản được chạy ở server nhằm tạo ra mã HTML
- Ưu điểm:
  - Tối ưu hóa các ứng dụng web, tốc độ nhanh, nhỏ gọn, cú pháp giống C và Java nên dễ triển khai
  - Chạy được trên nhiều nền tảng máy chủ như Apache, Nginx, IIS,...
  - PHP hỗ trợ nhiều cơ sở dữ liệu: Mysql, Oracle, MSSQL,...
  - Cộng đồng phát triển lớn
  - Mã nguồn mở

# Tài Liệu tham khảo

- `https://www.php.net/manual/en/`
- `https://www.w3schools.com/php/`

## 2. Cài đặt PHP trên window

- Xampp:
  - Cài đặt xampp: `https://www.apachefriends.org/download.html`
- IDE - công cụ để code:
  - vsCode
  - sublime text
  - php storm (mất phí), miễn phí cho sinh viên
  - netbeans
  - ...

## 3. Syntax basic

- Các đoạn mã lệnh trong PHP được đặt trong các cặp thẻ sau:
  - <?php ?> : chuẩn cú pháp php
  - <?= ?>
  - <? ?> : phải config php.ini để cấu hình
- Các câu lệnh phải kết thúc bởi dấu (;).
- Không phân biệt khoảng trắng, xuống dòng hay tab
- Comment trong php:

  - comment 1 dòng: // this is comment 1 line
  - comment 1 dòng: # this is comment 1 line

  - comment nhiều dòng:
    /\*\* \*/

- `Output dữ liệu`
  - lệnh echo
    - `echo 'Hello world';`
  - lệnh var_dump();
    - $a = 1;
    - `vardum($a);`

## 4. Khai báo biến trong PHP

- Các biến trong PHP bắt đầu bằng ký tự ($), sau đó là tên biến, tiếp theo là giá trị của biến

  - $fullname = 'Hoàng Trần';
  - $age = 25;

- `Quy tắc đặt tên biến:`
  - Tên biến không được bắt đầu bắng số.
    (- Tên biến phân biệt chữ hoa, chữ thường.
  - Tên biến bao chữ cái alpha, dấu gạch dưới.
  - Tên biến viết theo cú pháp camelCase(lạcĐà)
  - Tên biến phải bằng tiếng anh, và phải có ý nghĩa, thường là danh từ
- `Các kiểu dữ liệu trong PHP`
  - Kiểu int(số nguyên)
  - Kiểu float(số thực)
  - Kiểu string(chuỗi)
  - Kiểu array(mảng)
  - Kiêu object(đối tượng)
  - Kiểu boolean(đúng-sai)
- `Phạm vi biến`
  - Biến toàn cục
    - Biến được sử dụng mọi nơi trong chương trình
    - tuy nhiên để có thể chỉnh sửa biên toàn cục bạn cần phải khai báo từ khóa `global` trước biến để chương trình hiểu đó là biến toàn cục
    - `global $a`;
  - Biến cục bộ
    - chỉ tồn tại trong phạm vi hàm
  - ## Biến static

## 5. Toán tử trong PHP
