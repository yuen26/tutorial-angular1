# Angualr Overview

<br>
## Giới thiệu
AngularJS là một bộ Javascript Framework rất mạnh và thường được sử dụng để xây dựng các project Single Page Application (SPA). Nó mở rộng HTML DOM với các thuộc tính bổ sung cho nên đáp ứng được nhiều yêu cầu từ phía người dùng. AngularJS là một Framework mã nguồn mở hoàn toàn miễn phí và được hàng ngàn các lập trình viên trên thế giới ưa chuộng và sử dụng. Angular JS hỗ trợ mô hình MVC và đồng bộ dữ liệu 2 chiều.

## Single Page Application (SPA)
SPA cho phép các view khác nhau được load vào trong một trang web. Người dùng khi sử dụng SPA không có cảm giác trang web bị load lại. SPA dựa trên các công nghệ sau:
* DOM manipulation
* History
* Routing
* AJAX
* Data Binding
...

## Các thành phần chính trong AngularJS
<img src="http://i.imgur.com/Fkmt1zC.png" width="400">

## Cài đặt
Để sử dụng AngularJS trong 1 trang HTML, bạn cần phải khai báo đường dẫn tới file <kbd>angular.min.js</kbd>. Có 2 cách khai báo:
* Cách 1: `<script src="path/to/angular.min.js">` nếu như bạn tải AngularJS trên trang chủ rồi paste vào project.
* Cách 2: sử dụng CDN như sau `https://ajax.googleapis.com/ajax/libs/angularjs/[version]/angular.min.js`. Trong tutorial này, mình sẽ sử dụng version là 1.5.7 nhé.

## Hello World
```html
<!DOCTYPE html>
<html>
<head>
  <title>AngularJS</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
</head>
<body>
<div ng-app="">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1>
</div>
</body>
</html>
```
