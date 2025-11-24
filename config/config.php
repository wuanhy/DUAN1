<?php

// Định nghĩa các hằng số toàn cục dùng trong dự án (chỉ define nếu chưa được định nghĩa)
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__)); // Đường dẫn tuyệt đối tới thư mục gốc của dự án
    define('PATH_VIEW', BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR); // Đường dẫn tuyệt đối tới thư mục views
}
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/website_quan_ly_tour/'); // URL cơ bản của dự án(Lưu ý cấp độ trong htdocs hoặc www)
}

// Cấu hình kết nối CSDL (Phải dùng define thì bên Model mới gọi được)
define('DB_HOST', 'localhost');
define('DB_PORT', '3306'); // Cổng mặc định của MySQL
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); // Mặc định XAMPP là rỗng
define('DB_NAME', 'tour_db');
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Báo lỗi chi tiết
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Lấy dữ liệu dạng mảng
]);