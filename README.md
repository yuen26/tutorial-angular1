# angular-tutorial
Hướng dẫn về framework AngularJS <br /><br />
## Tổng quan về AngularJS
### Giới thiệu
AngularJS là một bộ Javascript Framework rất mạnh và thường được sử dụng để xây dựng project Single Page Application (SPA). Nó mở rộng HTML DOM với các thuộc tính bổ sung cho nên đáp ứng được nhiều yêu cầu từ phía người dùng. AngularJS là một Framework mã nguồn mở hoàn toàn miễn phí và được hàng ngàn các lập trình viên trên thế giới ưa chuộng và sử dụng. Angular JS hỗ trợ mô hình MVC.

Dưới đây là một số tính năng cốt lõi quan trọng của AngularJS:
- Data-binding (Ràng buộc dữ liệu): tự động đồng bộ dữ liệu giữa model và view
- Scope: những đối tượng kết nối Controller và View
- Controller: lớp business logic phía sau views
- Service: mục đích của xây dựng service là để tái sử dụng các phương thức chung ở nhiều view hoặc controller khác nhau
- Filters (Bộ lọc): format lại dữ liệu hiển thị ra ngoài view người dùn
- Directives: cho phép mở rộng HTML và bạn có thể custom lại các thuộc tính (attribute), phần tử (elements)
- Templates: hiển thị thông tin từ controller, đây là một thành phần của views
- Routing: chuyển đổi giữa các action trong controller
- MVW: Model-View-Whatever, từ MVW chúng ta có thể phát triển thành MVC Model-View-Controller hoặc là MVVM Model-View-ViewModel
- Deep Linking (Liên kết sâu): cho phép bạn mã hóa trạng thái của ứng dụng trong các URL để nó có thể đánh dấu được với công cụ tìm kiếm.
- Dependency Injection: liên kết, thống nhất các đối tượng và chắc năng.

Mối liên hệ giữa các thành phần trong AngularJS <br />
<img src="https://s3.amazonaws.com/classconnection/362/flashcards/6692362/png/screen_shot_2014-12-23_at_70514_pm-14A7A42335A47DBBC08.png" width="400">

### Cài đặt
Để sử dụng AngularJS trong project, bạn cần phải khai báo 1 cặp thẻ `<script></script>` chứa đường link tới file <kbd>angular.min.js</kbd>. Trong tutorial này, tôi sẽ sử dụng AngularJS phiên bản 1.5.0-rc.0. Bạn có thể tải AngularJS trên [trang chủ](https://angularjs.org/) hoặc sử dụng CDN trong cặp thẻ `<script>\</script>` như sau `<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>`.



