<?php

use Src\Controllers\DashboardController;
use Src\Controllers\HomeController;
use Src\Controllers\ScheduleController;
use Src\Controllers\TourController;

// Nạp cấu hình chung của ứng dụng

$config = require __DIR__ . '/config/config.php';

// Nạp các file chứa hàm trợ giúp
require_once __DIR__ . '/src/helpers/helpers.php'; // Helper chứa các hàm trợ giúp (hàm xử lý view, block, asset, session, ...)
// require_once __DIR__ . '/src/helpers/database.php'; // Helper kết nối database(kết nối với cơ sở dữ liệu)

// Nạp các file chứa model
require_once __DIR__ . '/src/models/BaseModel.php';
require_once __DIR__ . '/src/models/User.php';
require_once __DIR__ . '/src/models/blog.php';
require_once __DIR__ . '/src/models/TourModel.php';
require_once __DIR__ . '/src/models/Category.php';
require_once __DIR__ . '/src/models/ScheduleModel.php';

// Nạp các file chứa controller
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/DashboardController.php';
require_once __DIR__ . '/src/controllers/TourController.php';
require_once __DIR__ . '/src/controllers/TourController.php';
require_once __DIR__ . '/src/controllers/ScheduleController.php';

// Khởi tạo các controller
$homeController = new HomeController();
$dashboardController = new DashboardController();
$tourController = new TourController();
$scheduleController = new ScheduleController();

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

    'admin-tourlist' => $tourController-> adminTourList(),
    'admin-addtour' => $tourController-> adminAddTour(),
    'admin-edittour' => $tourController-> adminEditTour(),
    'admin-delete-tour' => $tourController-> adminDeleteTour(),

    'admin-scheduletour' => $scheduleController-> adminScheduleTour(),
    'admin-addscheduletour' => $scheduleController-> adminAddScheduleTour(),
    'admin-delete-schedule' => $scheduleController -> adminDeleteSchedule(),
    'admin-edit-schedule' => $scheduleController -> adminEditSchedule(),

    'admin-bookinglist' => $tourController-> adminBookingList(),
    'admin-refundmanage' => $tourController-> adminRefundManage(),
    default        => require_once BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'not_found.php',
};