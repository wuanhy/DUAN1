<?php

namespace Src\Controllers;

class ScheduleController
{
    public function index()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $listSchedul = $scheduleModel->getAllSchedule();

        $group = [];
        foreach ($listSchedul as $schedule) {
            $tourName = $schedule['danhmuc'];
            if (!isset($group[$tourName])) {
                $group[$tourName] = [
                    'ten_tour' => $tourName,
                    'details' => [],
                ];
            }
            $group[$tourName]['details'][] = $schedule;
        }

        $title = "Danh sách lịch trình các chuyến Tour";
        $view = "admin/list_schedule";
        require_once block_path('main');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["tour_id"]) || !isset($_POST["schedule"]) || !is_array($_POST["schedule"])) {
                $_SESSION['error'][] = "Vui lòng chọn 1 tour";
                header("Location:" . BASE_URL . 'admin-create-schedule');
                exit();
            }
            $tourId = $_POST['tour_id'];
            $schedules = $_POST['schedule'];
            $scheduleModel = new \Src\Models\ScheduleModel();
            $count = 0;
            foreach ($schedules as $schedule) {
                if (empty($schedule['ngay_thu']) || empty($schedule['dia_diem']) || empty($schedule["hoat_dong"])) {
                    continue;
                }
                $scheduleModel->insertSchedule(
                    $tourId,
                    $schedule['ngay_thu'],
                    $schedule['dia_diem'],
                    $schedule['hoat_dong'],
                );
                $count++;
            }
            if ($count > 0) {
                $_SESSION['success'][] = "Đã thêm thành công $count lịch trình";
            } else {
                $_SESSION['success'][] = "Không có lịch trình nào được thêm, vui lòng kiểm tra lại dữ liệu";
            }
            header("Location:" . BASE_URL . 'admin-list-schedule');
            exit();
        }

        $tour = new \Src\Models\TourModel();
        $listTour = $tour->getAll();

        $title = "Thêm lịch trình các chuyến Tour";
        $view = "admin/create_schedule";
        require_once block_path('main');
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["danhmuc"]) || empty($_POST["ngay_thu"]) || empty($_POST["dia_diem"]) || empty($_POST["hoat_dong"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . 'admin-update-schedule&ltr_id=' . $_GET['ltr_id']);
                exit();
            }

            $schedule = new \Src\Models\ScheduleModel();
            $data = $schedule->getOne($_GET['ltr_id']);

            $schedule->updateSchedule(
                $_GET['ltr_id'],
$_POST['tour_id'],
                $_POST['ngay_thu'],
                $_POST['dia_diem'],
                $_POST['hoat_dong'],
            );
            $_SESSION['success'][] = 'Cập nhật thành công';
            header("Location:" . BASE_URL . 'admin-list-schedule');
            exit();
        }
        $tour = new \Src\Models\TourModel();
        $listTour = $tour->getAll();

        $schedule = new \Src\Models\ScheduleModel();
        $data = $schedule->getOne($_GET['ltr_id']);

        $title = "Cập nhật lịch trình các chuyến Tour";
        $view = "admin/update_schedule";
        require_once block_path('main');
    }

    public function delete()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $data = $scheduleModel->delete($_GET['ltr_id']);

        header("Location:" . BASE_URL . 'admin-list-schedule');
        exit();
    }

    // public function deleteTourSchedule()
    // {
    //     if (isset($_GET['tour_id'])) {
    //         $tourId = $_GET['tour_id'];
    //         $scheduleModel = new \Src\Models\ScheduleModel();

    //         $scheduleModel->deleteByTourId($tourId);
    //         $_SESSION['success'][] = "Đã xóa toàn bộ lịch trình của Tour ID $tourId thành công";
    //     } else {
    //         $_SESSION['error'][] = "Không tìm thấy tour id để xóa";
    //     }
    //     header("Location:" . BASE_URL . 'admin-list-schedule');
    //     exit();
    // }

    // public function updateTourSchedule()
    // {
    //     $scheduleModel = new \Src\Models\ScheduleModel();
    //     $tourModel = new \Src\Models\TourModel();
    //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //         $tourId = $_POST['tour_id'];
    //         $schedules = $_POST['schedule'];
    //         $count = 0;

    //         foreach ($schedules as $ltrId => $schedule) {
    //             if (isset($ltrId) && is_numeric($ltrId)) {
    //                 $scheduleModel->updateSchedule(
    //                     $ltrId,
    //                     $tourId,
    //                     $schedule['ngay_thu'],
    //                     $schedule['dia_diem'],
    //                     $schedule['hoat_dong']
    //                 );
    //                 $count++;
    //             }
    //         }
    //         $_SESSION['success'][] = "Đã cập nhật $count lịch trình của Tour thành công";
    //         header("Location:" . BASE_URL . 'admin-list-schedule');
    //         exit();
    //     }
    //     if (isset($_GET['tour_id'])) {
    //         $tourId = $_GET['tour_id'];
    //         $listSchedules = $scheduleModel->getAllScheduleByTourId($tourId);
    //         $listTour = $tourModel->getAll();

    //         $title = "Cập nhật Lịch trình Tour";
    //         $view = "admin/update_tour_schedule"; // View mới
    //         require_once block_path('main');
    //     } else {
    //         header("Location:" . BASE_URL . 'admin-list-schedule');
//         exit();
    //     }
    // }
}