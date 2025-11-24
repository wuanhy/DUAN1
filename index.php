<?php

use Src\Controllers\DashboardController;
use Src\Controllers\HomeController;

// Nạp cấu hình chung của ứng dụng

$config = require __DIR__ . '/config/config.php';

// Nạp các file chứa hàm trợ giúp
require_once __DIR__ . '/src/helpers/helpers.php'; // Helper chứa các hàm trợ giúp (hàm xử lý view, block, asset, session, ...)
// require_once __DIR__ . '/src/helpers/database.php'; // Helper kết nối database(kết nối với cơ sở dữ liệu)

// Nạp các file chứa model
require_once __DIR__ . '/src/models/BaseModel.php';
require_once __DIR__ . '/src/models/User.php';
require_once __DIR__ . '/src/models/blog.php';

// Nạp các file chứa controller
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/DashboardController.php';

// Khởi tạo các controller
$homeController = new HomeController();
$dashboardController = new DashboardController();

// Xác định route dựa trên tham số act (mặc định là trang chủ '/')
$act = $_GET['act'] ?? '/';

// Match đảm bảo chỉ một action tương ứng được gọi
match ($act) {
    '/', 'welcome' => $homeController->index(),
    'login'        => $homeController->login(),
    'register'     => $homeController->register(),
    'about'        => $homeController->about(),
    'introduction' => $homeController->introduction(),
    'blog'         => $homeController->blog(),
    'faq'          => $homeController->faq(),
    'admin-dashboard' => $dashboardController->index(),
    'logout'       => $homeController->logout(),
    default        => require_once BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'not_found.php',
};