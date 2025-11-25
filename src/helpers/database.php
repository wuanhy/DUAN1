<?php

// Hàm kết nối tới cơ sở dữ liệu MySQL
// Sử dụng cấu hình từ config/config.php
// Trả về đối tượng PDO nếu kết nối thành công, null nếu thất bại
function getDB()
{
    static $pdo = null;
    static $dbConfig = null;

    // Nếu đã kết nối rồi thì trả về kết nối cũ (singleton pattern)
    if ($pdo !== null) {
        return $pdo;
    }

    try {
        // Tạo chuỗi DSN (Data Source Name) cho PDO
        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=utf8',
            DB_HOST,
            DB_PORT,
            DB_NAME
        );

        // Tạo kết nối PDO với các tùy chọn
        $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, DB_OPTIONS);

        return $pdo;
    } catch (PDOException $e) {
        // Ghi log lỗi (trong môi trường production nên log vào file)
        error_log('Database connection failed: ' . $e->getMessage());
        return null;
    }
}

