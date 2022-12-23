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
    'fullname' => 'Tran Vu Hoang',
    'age' => 25,
    'point' => [
    'math_point' => 8.25,
    'physical_point' => 8.25,
    'chemistry_point' => 6.75
    ]
    ];
  - Mảng đa chiều là mảng mà phần tử bên trong nó có thể là 1 mảng nữa.

## 8. Câu điều kiện

- Có 3 loại câu điều kiện

- if...:

  - if (condition) {
    // nếu điều kiện đúng => thực hiện lệnh trong vòng ì {}
    }

- if..else:

  - if (condition) {
    // nếu điều kiện đúng => thực hiện lệnh trong vòng if {}
    } else {
    // nếu điều kiện sai -> thực hiện lệnh trong else {}
    }

- if ... elseif... else:

  - if (conditon1) {
    // nếu điều kiện đúng -> thực hiện lệnh trong vòng lặp if()
    } elseif (condition2) {
    // nếu điều kiện trong vòng if sai -> thực hiện lệnh trong vòng lặp elseif().
    } else {
    // ngược lại điều kiện trong vòng elseif sai -> thực hiện lệnh trong vòng lặp else
    }

- `Câu điều kiện switch case`

  - switch case được sinh ra để hỗ trợ biểu thức if else khi bài toán có quá nhiều điều kiện
  - syntax:

    - switch (n) {
      case 1:
      // code
      break;
      case 2:
      //code
      break;
      }

      default:
      // code
      break;
      }

### Hàm căn bản cần biết

## 9. Hàm trong PHP

- Hàm là chương trình thực hiện một tác vụ cụ thể. Chúng thực chất là những đoạn chương trình nhỏ giúp giải quyết 1 vấn đề lớn. Hàm là 1 phương pháp lập trình hướng thủ tục trong ngôn ngữ PHP và các ngôn ngữ bậc cao khác.

- Hàm giúp lập trình kiểm soát code 1 cách mạch lạc, không phải viết lại code cho các chức năng giống nhau.

- Có 2 loại hàm:

  - Hàm có giá trị trả về(có return)
  - Hàm không có giá trị trả về(hàm k có return)

- Syntax:
  - function functionName() {
    // lệnh thực thi
    }
- Ex:
  function showMyName() {
  echo 'Hoàng';
  }

  function getMyName() {
  return 'Hoàng';
  }

  showMyName();
  var_dump(getMyName);

- `Tham trị và tham chiếu trong hàm`

  - Tham trị: là các biến được truyền vào hàm đó để xử lý.
    -Ex:
    function showValue() {
    var_dump($value);
    }
    showValue();
  - Tham chiếu: Chỉ truyền vào địa chỉ bộ nhớ của biến đó. Vì vậy khi giá trị biến được truyền vào trong hàm thay đổi sẽ kéo theo biến bên ngoài cũng thay đổi giá trị theo.
  - Ex:
    $x = 10;
    function changeValue(&$value) {
    $value = 20;
    }
    changeValue(30);
    var_dump($value);

- `Require, include trong PHP`

  - Trong PHP, để có thể chèn nội dung của 1 file khác (thông thường là file php) từ bên ngoài vào file PHP hiện tại, chúng ta dùng hàm require(); hoặc hàm include(); Việc này nhằm tiết kiệm thời gian và tính nhất quán, giúp cho việc code ứng dụng nhanh hơn.

  - Sự khác nhau giữa required và include:

    - `require`: Sau khi chèn file nếu có xảy ra lỗi thì sẽ xuất ra thông báo lỗi và không chạy các đoạn code tiếp theo.
    - `include`: Sau khi chèn file nếu code bị lỗi thì chương trình vẫn chạy các đoạn code tiếp theo

  - Ngoài ra còn có `include_once` và `require_one` chức năng tương tự như `include` và `require` nhưng file chèn vào sẽ chỉ chèn 1 lần duy nhất.

## 10. Vòng lặp trong PHP

- `Vòng lặp for`

  - Lặp với số lần xác định. Ví dụ bạn muốn in số từ 1->100 thì sẽ dùng vòng lặp này vì chúng ta có thể đặt điều kiện cho nó dừng lại khi lặp 1000 lần.
  - Syntax:
    for ($i = 0; $i < 100; $i++) {
    echo $i;
    }

- `Vòng lặp while`

  - Lặp 1 hành động dựa theo 1 điều kiện cụ thể mà nó trả về là true

- Vòng lặp `do while`

  - Vòng lặp này tương tự như do while, nhưng n sẽ chạy lệnh ít nhất 1 lần trước khi lặp.

- Vòng lặp `foreach`

  - Vòng lặp này để duyệt mảng, lặp các khóa và giá trị của mảng
  - vd:
    $colors = ['red', 'green', 'blue'];

    foreach ($colors as $color) {
    echo $color . '<br/>';
    }

## 11. $\_GET và $\_POST trong PHP

- POST, GET là các phương thức truyền dữ liệu từ client lên server
- Sử dụng 2 biến global: $\_POST, $\_GET để lấy thông tin về 2 phương thức trên.
- Sử dụng để lấy dữ liệu từ form gửi lên.

- Phương thức `GET`

  - Phương thức `GET` để gửi dữ liệu lên server thông qua url
  - Phương thức get được giới hạn gửi tối đa 1024 ký tự.
  - Không bao giờ sử dụng phương thức GET nếu gửi password hoặc thông tin nhạy cảm lên server vì lúc này password sẽ bị lộ trên url
  - GET không thể gửi dữ liệu nhị phân, ví dụ như hình ảnh hoặc tài liệu word lên server.
  - Sử dụng biến global $\_GET để lấy dữ liệu

- Phương thức `POST`
  - Phương thức `POST` không có bất kỳ hạn chế nào về kích thước dữ liệu sẽ gửi
  - Phương thức `POST` có thể sử dụng để gửi dữ liệu nhị phân.
  - Dữ liệu được gửi bởi phương thức POST thông qua http header, vì vậy việc bảo mật phụ thuộc vào giao thức http. Bằng việc sử dụng secure http, bạn có thể chắc chắn răng thông tin của mình là an toàn.
  - Sử dụng biến global $\_POST để lấy dữ liệu.

## 12. Vd $\_GET và $\_POST

- if (isset($_POST['form_login'])) {
    $fullname = !empty($\_POST['fullname']) ? trim($_POST['fullname']) : '';
    $age = !empty($\_POST['age']) ? trim($\_POST['age']) : '';

      echo 'Welcome: ' . $fullname;
      echo '<br/>';
      echo 'Age: ' . $age;
      die();

  }

?>

<form action="" method="post">
    <label for="fullname">Fullname</label><br />
    <input type="text" name="fullname" id="fullname"><br />
    <label for="age">Age</label><br />
    <input type="text" name="age" id="age"><br />

    <input type="submit" name="form_login" value="submit">

</form>
