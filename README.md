# angular-tutorial
Hướng dẫn về framework AngularJS <br /><br />
## Tổng quan về AngularJS
### Giới thiệu
AngularJS là một bộ Javascript Framework rất mạnh và thường được sử dụng để xây dựng project Single Page Application (SPA). Nó mở rộng HTML DOM với các thuộc tính bổ sung cho nên đáp ứng được nhiều yêu cầu từ phía người dùng. AngularJS là một Framework mã nguồn mở hoàn toàn miễn phí và được hàng ngàn các lập trình viên trên thế giới ưa chuộng và sử dụng. Angular JS hỗ trợ mô hình MVC.<br /><br />
Dưới đây là một số tính năng cốt lõi quan trọng của AngularJS:
- Data-binding: (ràng buộc dữ liệu) tự động đồng bộ dữ liệu giữa model và view
- Scope: (Phạm vi) Đây là những đối tượng kết nối giữa Controller và View
- Controller: Đây là những hàm javascript xử lý kết hợp với bộ điều khiển Scope
- Service: Như tôi đề cập ở trên, AngularJS sử dụng các API được xây dựng từ các web service (PHP, ASP) để thao tác với DB.
- Filters: Bộ lọc lọc ra các thành phẩn của một mảng và trả về mảng mới
- Directives:  đánh dấu vào các yếu tố của DOM, nghĩa là sẽ tạo ra các thẻ HTML tùy chỉnh
- Templates: hiển thị thông tin từ controller, đây là một thành phần của views
- Routing:  chuyển đổi giữa các action trong controller
- MVC: Mô hình chia thành phần riêng biệt thành Model, View, Controller. Đây là một mô hình khá hay nhưng trong Angular thì nó được chế biến lại một chút gần giốn với MVVM (Model View View Model)
- Deep Linking: Liên kết sâu, cho phép bạn mã hóa trạng thái của ứng dụng  trong các URL  để nó có thể đánh dấu được với công cụ tìm kiếm.
- Dependency Injection: liên kết, thống nhất các đối tượng và chắc năng. <br /><br />

### Mối liên hệ giữa các thành phần trong AngularJS <br />
<img src="https://s3.amazonaws.com/classconnection/362/flashcards/6692362/png/screen_shot_2014-12-23_at_70514_pm-14A7A42335A47DBBC08.png" width="200">

### Cài đặt
Để sử dụng AngularJS trong project, bạn cần phải khai báo 1 cặp thẻ `<script></script>` chứa đường link tới file <kbd>angular.min.js</kbd>. Trong tutorial này, tôi sẽ sử dụng AngularJS phiên bản 1.5.0-rc.0. Bạn có thể tải AngularJS trên [trang chủ](https://angularjs.org/) hoặc sử dụng CDN trong cặp thẻ `<script>\</script>` như sau `<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>`.



