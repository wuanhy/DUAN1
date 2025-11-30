<?php

use Src\Controllers\BlogController;
use Src\Controllers\TransController;
session_start();
use Src\Controllers\DashboardController;
use Src\Controllers\HomeController;
use Src\Controllers\UserController;

// Nạp cấu hình chung của ứng dụng

$config = require __DIR__ . '/config/config.php';

// Nạp các file chứa hàm trợ giúp
require_once __DIR__ . '/src/helpers/helpers.php'; // Helper chứa các hàm trợ giúp (hàm xử lý view, block, asset, session, ...)
// require_once __DIR__ . '/src/helpers/database.php'; // Helper kết nối database(kết nối với cơ sở dữ liệu)

// Nạp các file chứa model
require_once __DIR__ . '/src/models/BaseModel.php';
require_once __DIR__ . '/src/models/User.php';
require_once __DIR__ . '/src/models/blog.php';
require_once __DIR__ . '/src/models/Trans.php';


// Nạp các file chứa controller
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/DashboardController.php';
require_once __DIR__ . '/src/controllers/UserController.php';
require_once __DIR__ . '/src/controllers/BlogController.php';
require_once __DIR__ . '/src/controllers/TransController.php';





// Khởi tạo các controller
$homeController = new HomeController();
$dashboardController = new DashboardController();
$userController = new UserController();
$blogController = new BlogController();
$transController = new TransController();





// Xác định route dựa trên tham số act (mặc định là trang chủ '/')
$act = $_GET['act'] ?? '/';

// Match đảm bảo chỉ một action tương ứng được gọi
match ($act) {
    '/', 'welcome' => $homeController->index(),
    'login'        => $homeController->login(),
    'register'     => $homeController->register(),
    'about'        => $homeController->about(),
    'introduction' => $homeController->introduction(),
    'blog'         => $blogController->blog(),
    'faq'          => $homeController->faq(),
    'admin-dashboard' => $dashboardController->index(),
    'logout'       => $homeController->logout(),

    //blog
    'admin-list-blog' =>$blogController->index(),
    'admin-create-blog' =>$blogController->create(),
    'admin-update-blog' =>$blogController->update(),
    'admin-delete-blog' =>$blogController->delete(),

    //user
    'admin-list-user' =>$userController->index(),
    'admin-create-user' =>$userController->create(),
    'admin-update-user' =>$userController->update(),
    'admin-delete-user' =>$userController->delete(),

    
    'admin-list-trans' =>$transController->index(),
    'admin-create-trans' =>$transController->create(),
    'admin-update-trans' =>$transController->update(),
    'admin-delete-trans' =>$transController->delete(),


    default        => require_once BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'not_found.php',
};