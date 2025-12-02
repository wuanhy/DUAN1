<?php

use Src\Models\User;

// Hàm xác định đường dẫn tuyệt đối tới file view tương ứng
function view_path(string $view): string
{
    $normalized = str_replace('.', DIRECTORY_SEPARATOR, $view);
    return BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $normalized . '.php';
}

// Hàm xác định đường dẫn tuyệt đối tới file block tương ứng(thành phần layouts)
function block_path(string $block): string
{
    return BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'blocks' . DIRECTORY_SEPARATOR . $block . '.php';
}

// Hàm view: nạp dữ liệu và hiển thị giao diện
function view(string $view, array $data = []): void
{
    $file = view_path($view);

    if (!file_exists($file)) {
        throw new RuntimeException("View '{$view}' not found at {$file}");
    }

    extract($data, EXTR_OVERWRITE); // biến hóa mảng $data thành biến riêng lẻ
    include $file;
}

// Hàm include block: nạp một block từ thư mục blocks(thành phần layouts)
function block(string $block, array $data = []): void
{
    $file = block_path($block);

    if (!file_exists($file)) {
        throw new RuntimeException("Block '{$block}' not found at {$file}");
    }

    extract($data, EXTR_OVERWRITE); // biến hóa mảng $data thành biến riêng lẻ
    include $file;
}

// Tạo đường dẫn tới asset (css/js/images) trong thư mục public(tài nguyên)
function asset(string $path): string
{
    $trimmed = ltrim($path, '/');
    return rtrim(BASE_URL, '/') . '/public/' . $trimmed;
}

// Khởi động session nếu chưa khởi động(session là một cơ chế để lưu trữ dữ liệu trên server)
function startSession()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// function checkAdmin() {
//     if(!isset($_SESSION['userLogin'])) {
//         $_SESSION['error'] = "Vui lòng đăng nhập trước";
//         header("Location: " . BASE_URL . "login");
//         exit();
//     }

//     if($_SESSION['userLogin']['role_id'] != 1) { 
//         $_SESSION['error'] = "Bạn không có quyền truy cập trang này";
//         header("Location: " . BASE_URL); 
//         exit();
//     }
// }

