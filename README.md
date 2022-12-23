## 1. Giới thiệu ngôn ngữ lập trình PHP

- PHP - 'Hypertext Preprocessor' Là một ngôn ngữ lập trình kịch bản được chạy ở server nhằm tạo ra mã HTML
- Ưu điểm:
  - Tối ưu hóa các ứng dụng web, tốc độ nhanh, nhỏ gọn, cú pháp giống C và Java nên dễ triển khai
  - Chạy được trên nhiều nền tảng máy chủ như Apache, Nginx, IIS,...
  - PHP hỗ trợ nhiều cơ sở dữ liệu: Mysql, Oracle, MSSQL,...
  - Cộng đồng phát triển lớn
  - Mã nguồn mở

## Tài Liệu tham khảo

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
  - `<?php ?>` : chuẩn cú pháp php
  - `<?= ?>`
  - `<? ?>`: phải config php.ini để cấu hình
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

- `Toán tử số học`

  - Cộng(+): $a + $b;
  - Trừ(-): $a - $b;
  - Nhân(\*): $a \* $b;
  - Chia(/): $a / $b;
  - Chia lấy dư (%): $a % $b;
  - Giảm 1 đơn vị (--): $a--;
  - Tăng 1 đơn vị (++): $a++;

- `Toán tử so sánh`

  - So sánh bằng(==): $a == $b;
  - So sánh bé hơn hoặc bằng (<=): $a <= $b;
  - So sánh lớn hơn hoặc bằng (>=): $a >= $b;
  - So sánh bé hơn(<): $a < $b;
  - So sánh lớn hơn(>): $a > $b;
  - So sánh bằng tuyệt đối(===): $a === $b;
  - So sánh khác (!=): $a != $b;

- `Toán tử logic`
  - && hoặc and: Thỏa mãn cả 2 điều kiện là true, ngược lại là false
    - vd: $a && $b;
  - || hoặc or: Thỏa mãn 1 trong 2 điều kiện là true, không thỏa mãn cả 2 => false
  - !: phủ định !$a;
- `Toán tử kết hợp`
  - += : $ a+= $b <=> $a = $a + $b;
  - -=
  - \*=
  - /=
  - %=

## 6 Chuỗi trong PHP

- Chuỗi đặt trong cặp ngoặc đơn ('') hoặc cặp ngoặc kép ("").
  - Chuỗi đặt trong cặp ngoặc kép ("") thì sẽ hiểu được biến bên trong chuỗi đó.
  - Chuỗi đặt trong cặp ngoặc đơn ('') thì toàn bộ những j trong cặp ngoặc ('') sẽ hiểu là chuỗi.
- `Một số hàm thao tác với chuỗi`

  - Nối chuỗi bằng dấu chấm (.):

    - $fullname = 'Tran Vu Hoang';
    - $age = 25;
    - echo $fullname . $age;

  - strlen(): Lấy độ dài chuỗi

## 7 Mảng trong PHP

- Mảng trong PHP là 1 phần rất quan trọng.
- Mảng là 1 biến có thể chứa nhiều phần tử.
- Mảng cho phép sắp xếp, lưu trữ, xóa phần tử 1 cách dễ dàng.
- Mảng có nhiều loại:

  - mảng 1 chiều
    - Mảng liên tục(tuần tự): các phần tử trong mảng phải cùng kiểu dữ liệu
    - Mảng không liên tục: các phần tử trong mảng có thể khác kiểu dl.
  - Mảng đa chiều

- Cấu trúc mảng:

  - $arr = [key => value];

- `Cách khởi tạo mảng:`

  - Cách cũ:
    $arr = array(1, 2, 3);
  - Cách mới:
    $arr = [1, 2, 3];

- `Mảng tuần tự`

  - Ex: $arr = [1, 2, 3, 4, 5, Hoang];
  - Index tăng từ 0->n
  - Truy xuất phần tử trong mảng dùng index
    - $arr[0]; // 1
    - $arr[4]; // 5
  - Thêm phần tử vào mảng tuần tự:
    $arr[] = 'hello';

- `Mảng không tuần tự`
  - Syntax: $arr = ['key1' => 'value1', 'key2' => 'value2'];
  - Ex: $arr = ['fullname' => 'Tran Vu Hoang, 'age' => 25];
  - key là kiểu số hoạc chuỗi
  - Truy xuất phần tử trong mảng dùng key: $arr['fullname'];// Tran Vu Hoang
  - Thêm phần tử vào mảng: $arr['address'] = 'Thai Binh';

- `Mảng đa chiều`
    - Ex:
        $arr = [
            'fullname'  => 'Tran Vu Hoang',
            'age'  => 25,
            'point'  => [
                'math_point'        => 8.25,
                'physical_point'    => 8.25,
                'chemistry_point'   => 6.75
            ]
        ];
    - Mảng đa chiều là mảng mà phần tử bên trong nó có thể là 1 mảng nữa.

## 8. Câu điều kiện
