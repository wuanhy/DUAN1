<?php

namespace Src\Controllers;

class ScheduleController
{
    public function index()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $listSchedul = $scheduleModel->getAllSchedule();

        $title = "Danh sách lịch trình các chuyến Tour";
        $view = "admin/list_schedule";
        require_once block_path('main');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["tour_id"]) || empty($_POST["ngay_thu"]) || empty($_POST["tieu_de"]) || empty($_POST["noi_dung"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . 'admin-create-schedule');
                exit();
            }
            $schedule = new \Src\Models\ScheduleModel();
            $schedule->insertSchedule(
                $_POST['tour_id'],
                $_POST['ngay_thu'],
                $_POST['tieu_de'],
                $_POST['noi_dung'],
            );
            $_SESSION['success'][] = 'Thêm thành công';
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
            if (empty($_POST["danhmuc"]) || empty($_POST["ngay_thu"]) || empty($_POST["tieu_de"]) || empty($_POST["noi_dung"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . 'admin-update-schedule&ltr_id=' . $_GET['ltr_id']);
                exit();
            }

            $schedule = new \Src\Models\ScheduleModel();
            $data = $schedule->getOne($_GET['ltr_id']);

            $schedule->updateSchedule(
                $_GET['ltr_id'],
                $_POST['danhmuc'],
                $_POST['ngay_thu'],
                $_POST['tieu_de'],
                $_POST['noi_dung'],
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
}
